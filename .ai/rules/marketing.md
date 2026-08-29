---
paths:
  - 'resources/views/components/marketing/**'
  - 'resources/views/components/marketing/get-involved-*.blade.php'
  - 'resources/views/components/marketing/recent-support-*.blade.php'
  - 'resources/views/components/marketing/event*.blade.php'
  - resources/views/components/marketing/event-card.blade.php
  - 'resources/views/components/marketing/testimonial*.blade.php'
  - resources/views/components/marketing/closing-cta.blade.php
  - 'resources/views/components/marketing/blog*.blade.php'
  - resources/views/components/marketing/footer.blade.php
  - 'resources/views/components/marketing/gallery*.blade.php'
  - 'resources/views/components/marketing/{events-section,testimonials-section}.blade.php'
---

# Marketing

## Project Cham marketing design system
Build public-facing pages from anonymous Blade components under resources/views/components/marketing. Reuse the Cham color and font tokens defined in resources/css/app.css; keep the visual language editorial, compassionate, structured, and outcome-led rather than generic charity UI.

## Marketing typography and pill controls
Use Lexend for public-facing headings and brand text, Noto Sans for navigation and supporting copy, and Indie Flower sparingly for selected yellow emphasis words. Marketing CTA components use a fully rounded pill silhouette.

## Use an action-led involvement rail
The homepage Get Involved section uses an editorial intro beside a horizontal rail for Partner, Support, and Advocate paths. Keep cards action-led and outcome-specific; do not add invented donation totals, dates, or admin metadata.

## Use rounded typography for homepage content headings
Use `font-hero` (Varela Round) for homepage section headings and marketing card titles so they match Hero, About, Programs, and Impact. Keep `font-display` (Lexend) for brand text, `font-sans` (Noto Sans) for supporting copy, and `font-handwriting` for selected yellow emphasis.

## Keep recent support compact
The Recent Support section must be shorter than a full viewport on desktop (`calc(100svh - 9rem)`, capped at 40rem), with low-profile 12.5rem cards and navigation comfortably inside the section.

## Keep the homepage event section event-specific
The dark painted homepage section is Upcoming Events, not stories or blog updates. Cards show event status, category, venue format, title, and a View event action; use the generated Project Cham brush texture as the background.

## Match the reference event-card composition
Event cards use a tall image with an unboxed time label over a dark jagged brush mark, followed by a flush dark body containing a date/location row, Varela Round title, and yellow underlined action. Do not add category/status pills, a visible outer border, or a gap between image and body.

## Keep family voices compact and image-led
The homepage Family Voices testimonial section uses normal content height, never viewport-height sizing. Keep heading and testimonial content on the left so the generated mother-and-child photo and pink brushwork remain unobstructed on the right; use compact testimonial cards.

## Place testimonial card left and family voices copy right
This supersedes the earlier Family Voices placement note. On desktop, keep the white testimonial card and controls on the left, the Family Voices label/heading/supporting copy on the right, and an open center strip for the mother-and-child portrait. Use normal compact banner height, never viewport-height sizing.

## Final Family Voices layout uses original left-right order
This supersedes both earlier Family Voices placement notes. Keep the Family Voices label/heading/supporting copy on the left and the white testimonial card with controls on the right. Preserve the compact normal-height rectangular banner; do not use viewport-height sizing.

## Use the preserved caregiver portrait for the closing CTA
The homepage closes with a compact dark navy Get Involved banner using project-cham-caregiver-portrait-bg.png on the right. Keep real Project Cham involvement copy on the left, a pink pill CTA, and normal content height rather than viewport-height sizing.

## Keep the homepage blog in the two-plus-list composition
Match the approved reference structure: centered Stories intro and CTA, two equal featured story cards with large images and full metadata bodies, plus four compact image-and-title rows in the right column. Keep Project Cham-specific childhood cancer content and the approved pink/blue palette.

## Use icon-only social links in the marketing footer
Keep the marketing footer structured as newsletter, four information columns, watermark, and copyright bar. Facebook, Instagram, and X links must be circular SVG icon buttons with accessible labels—never text pills. Avoid inventing phone numbers, addresses, or email details.

## Homepage gallery replaces recent support
The homepage uses a normal-height five-image editorial bento gallery in place of the Recent Support carousel. Keep one large anchor image, four staggered supporting frames, story-led captions, subtle hover motion, and the approved pink/blue/charcoal palette. Reuse the gallery-tile component and avoid donation-style metadata.

## Use spacious section rhythm except testimonials
Homepage marketing sections use the expanded container gutter (28px mobile, 40px tablet, 56–64px desktop) and generous responsive vertical padding. The Family Voices testimonial is the explicit exception: pass `compact` to the container and preserve its existing compact height and gutters.

## Events are spacious; testimonials widen horizontally only
This supersedes the testimonial exception in the general spacing rule. Events use content-based height with 96px desktop top/bottom padding; do not restore viewport-height caps. Family Voices uses the expanded 64px desktop horizontal gutter but retains its compact 56px vertical padding and normal content height.
