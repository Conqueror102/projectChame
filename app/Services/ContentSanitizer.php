<?php

namespace App\Services;

use DOMDocument;
use DOMElement;
use DOMNode;
use Illuminate\Support\Str;

class ContentSanitizer
{
    /**
     * Whitelist of permitted HTML tags for TipTap content.
     *
     * @var array<string>
     */
    protected static array $allowedTags = [
        'p', 'br', 'strong', 'em', 'u', 's', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
        'blockquote', 'ul', 'ol', 'li', 'a', 'img', 'pre', 'code', 'table',
        'thead', 'tbody', 'tr', 'th', 'td', 'figure', 'figcaption', 'hr',
    ];

    /**
     * Permitted attributes for specific tags.
     *
     * @var array<string, array<string>>
     */
    protected static array $allowedAttributes = [
        'a' => ['href', 'title', 'target', 'rel'],
        'img' => ['src', 'alt', 'title', 'width', 'height', 'loading'],
        'th' => ['colspan', 'rowspan', 'scope'],
        'td' => ['colspan', 'rowspan'],
    ];

    /**
     * Sanitize HTML content to prevent Stored XSS and malicious injections.
     */
    public static function clean(?string $html): string
    {
        if (blank($html)) {
            return '';
        }

        // Suppress warnings from malformed HTML snippets
        libxml_use_internal_errors(true);

        $doc = new DOMDocument('1.0', 'UTF-8');
        // Wrap in HTML body with UTF-8 meta to preserve Unicode characters
        $wrapped = '<?xml encoding="utf-8" ?><body>'.$html.'</body>';
        $doc->loadHTML($wrapped, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        self::sanitizeNode($doc->getElementsByTagName('body')->item(0));

        $output = '';
        $body = $doc->getElementsByTagName('body')->item(0);
        if ($body) {
            foreach ($body->childNodes as $child) {
                $output .= $doc->saveHTML($child);
            }
        }

        libxml_clear_errors();

        return $output;
    }

    /**
     * Recursively sanitize DOM nodes.
     */
    protected static function sanitizeNode(?DOMNode $node): void
    {
        if (! $node) {
            return;
        }

        $children = [];
        foreach ($node->childNodes as $child) {
            $children[] = $child;
        }

        foreach ($children as $child) {
            if ($child->nodeType === XML_ELEMENT_NODE) {
                $tagName = strtolower($child->nodeName);

                if (! in_array($tagName, self::$allowedTags, true)) {
                    // Remove dangerous node
                    $node->removeChild($child);

                    continue;
                }

                if ($child instanceof DOMElement) {
                    self::sanitizeAttributes($child);
                }

                self::sanitizeNode($child);
            }
        }
    }

    /**
     * Clean and strip untrusted attributes from a DOMElement.
     */
    protected static function sanitizeAttributes(DOMElement $element): void
    {
        $tagName = strtolower($element->nodeName);
        $allowed = self::$allowedAttributes[$tagName] ?? [];
        $attributesToRemove = [];

        foreach ($element->attributes as $attribute) {
            $attrName = strtolower($attribute->nodeName);

            // Strip all event handlers like onclick, onload, onerror
            if (Str::startsWith($attrName, 'on')) {
                $attributesToRemove[] = $attribute->nodeName;

                continue;
            }

            // Check if attribute is in allowed whitelist for this tag
            if (! in_array($attrName, $allowed, true)) {
                $attributesToRemove[] = $attribute->nodeName;

                continue;
            }

            // Sanitize URLs in href and src
            if (in_array($attrName, ['href', 'src'], true)) {
                $value = trim($attribute->nodeValue);

                // Disallow javascript:, vbscript:, and data: schemes
                if (preg_match('/^(javascript|vbscript|data):/i', $value)) {
                    $attributesToRemove[] = $attribute->nodeName;

                    continue;
                }
            }
        }

        foreach ($attributesToRemove as $name) {
            $element->removeAttribute($name);
        }

        // If link, ensure rel="noopener noreferrer" for security
        if ($tagName === 'a') {
            $element->setAttribute('rel', 'noopener noreferrer');
        }
    }
}
