import { Editor } from '@tiptap/core';
import StarterKit from '@tiptap/starter-kit';
import Image from '@tiptap/extension-image';
import Link from '@tiptap/extension-link';
import Placeholder from '@tiptap/extension-placeholder';

window.tiptapEditor = function ({ content = '', uploadUrl = '', csrf = '' }) {
    return {
        editor: null,
        content: content,
        isUploading: false,
        init() {
            this.editor = new Editor({
                element: this.$refs.editorElement,
                extensions: [
                    StarterKit.configure({
                        heading: { levels: [2, 3, 4] },
                    }),
                    Link.configure({
                        openOnClick: false,
                        HTMLAttributes: {
                            rel: 'noopener noreferrer',
                            target: '_blank',
                            class: 'text-cham-secondary underline hover:text-cham-primary',
                        },
                    }),
                    Image.configure({
                        inline: true,
                        allowBase64: false,
                        HTMLAttributes: {
                            class: 'my-4 rounded-xl border border-zinc-200 dark:border-zinc-700 max-h-[500px] w-auto object-cover',
                        },
                    }),
                    Placeholder.configure({
                        placeholder: 'Write your story here... Share practical guidance, updates, or family stories.',
                    }),
                ],
                content: this.content,
                onUpdate: ({ editor }) => {
                    this.content = editor.getHTML();
                    this.$dispatch('input', this.content);
                },
            });

            this.$watch('content', (val) => {
                if (this.editor && this.editor.getHTML() !== val) {
                    this.editor.commands.setContent(val || '', false);
                }
            });
        },
        toggleBold() {
            this.editor?.chain().focus().toggleBold().run();
        },
        toggleItalic() {
            this.editor?.chain().focus().toggleItalic().run();
        },
        toggleHeading(level) {
            this.editor?.chain().focus().toggleHeading({ level }).run();
        },
        toggleBulletList() {
            this.editor?.chain().focus().toggleBulletList().run();
        },
        toggleOrderedList() {
            this.editor?.chain().focus().toggleOrderedList().run();
        },
        toggleBlockquote() {
            this.editor?.chain().focus().toggleBlockquote().run();
        },
        setLink() {
            const previousUrl = this.editor?.getAttributes('link').href;
            const url = window.prompt('Enter URL', previousUrl || 'https://');
            if (url === null) return;
            if (url === '') {
                this.editor?.chain().focus().extendMarkRange('link').unsetLink().run();
                return;
            }
            this.editor?.chain().focus().extendMarkRange('link').setLink({ href: url }).run();
        },
        async uploadImage(event) {
            const file = event.target.files[0];
            if (!file) return;

            const formData = new FormData();
            formData.append('image', file);

            this.isUploading = true;

            try {
                const response = await fetch(uploadUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrf,
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                if (!response.ok) {
                    const error = await response.json();
                    alert(error.message || 'Image upload failed.');
                    return;
                }

                const data = await response.json();
                this.editor?.chain().focus().setImage({ src: data.url, alt: file.name }).run();
            } catch (err) {
                console.error(err);
                alert('Network error while uploading image.');
            } finally {
                this.isUploading = false;
                event.target.value = '';
            }
        },
        destroy() {
            if (this.editor) {
                this.editor.destroy();
            }
        },
    };
};

document.addEventListener('click', (event) => {
    const control = event.target.closest('[data-scroll-rail]');

    if (! control) {
        return;
    }

    const rail = document.getElementById(control.dataset.scrollRail);

    if (! rail) {
        return;
    }

    const direction = control.dataset.scrollDirection === 'previous' ? -1 : 1;
    const card = rail.querySelector('[data-scroll-card]');
    const gap = Number.parseFloat(getComputedStyle(rail).columnGap) || 0;
    const distance = card ? card.getBoundingClientRect().width + gap : rail.clientWidth * 0.8;

    rail.scrollBy({
        left: direction * distance,
        behavior: 'smooth',
    });
});
