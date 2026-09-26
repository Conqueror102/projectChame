@props([
    'uploadUrl' => route('admin.media.upload'),
    'label' => 'Story Content',
    'id' => 'tiptap-' . uniqid(),
])

<div
    x-data="window.tiptapEditor({
        content: @entangle($attributes->wire('model')),
        uploadUrl: '{{ $uploadUrl }}',
        csrf: '{{ csrf_token() }}'
    })"
    class="w-full space-y-2"
>
    @if ($label)
        <flux:label>{{ $label }}</flux:label>
    @endif

    <div class="rounded-xl border border-zinc-200 bg-white overflow-hidden shadow-xs dark:border-zinc-700 dark:bg-zinc-900 focus-within:border-cham-primary focus-within:ring-2 focus-within:ring-cham-primary/20 transition">
        <!-- Toolbar -->
        <div class="flex flex-wrap items-center gap-1 border-b border-zinc-200 bg-zinc-50/80 px-3 py-2 text-zinc-700 dark:border-zinc-700 dark:bg-zinc-800/80 dark:text-zinc-200">
            <button
                type="button"
                @click="toggleBold()"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-sm font-bold transition"
                title="Bold"
            >
                B
            </button>
            <button
                type="button"
                @click="toggleItalic()"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-sm italic transition"
                title="Italic"
            >
                I
            </button>
            <div class="h-4 w-px bg-zinc-300 dark:bg-zinc-600 mx-1"></div>
            <button
                type="button"
                @click="toggleHeading(2)"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs font-bold transition"
                title="Heading 2"
            >
                H2
            </button>
            <button
                type="button"
                @click="toggleHeading(3)"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs font-bold transition"
                title="Heading 3"
            >
                H3
            </button>
            <button
                type="button"
                @click="toggleHeading(4)"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs font-bold transition"
                title="Heading 4"
            >
                H4
            </button>
            <div class="h-4 w-px bg-zinc-300 dark:bg-zinc-600 mx-1"></div>
            <button
                type="button"
                @click="toggleBulletList()"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs transition"
                title="Bullet list"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                    <circle cx="4" cy="6" r="2" />
                    <circle cx="4" cy="10" r="2" />
                    <circle cx="4" cy="14" r="2" />
                    <path d="M9 5h8v2H9V5zm0 4h8v2H9V9zm0 4h8v2H9v-2z" />
                </svg>
            </button>
            <button
                type="button"
                @click="toggleOrderedList()"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs transition"
                title="Numbered list"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 4h2v5H3V4zm0 7h2.5v1H4v1h1.5v1H3v1h3v-5H3v1zm6-6h8v2H9V5zm0 4h8v2H9V9zm0 4h8v2H9v-2z" />
                </svg>
            </button>
            <button
                type="button"
                @click="toggleBlockquote()"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs transition"
                title="Quote"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M4 6a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H6v3H4V6zm8 0a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v3h-2V6z"/>
                </svg>
            </button>
            <button
                type="button"
                @click="setLink()"
                class="inline-flex size-8 items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs transition"
                title="Add link"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M12.586 4.586a2 2 0 1 1 2.828 2.828l-3 3a2 2 0 0 1-2.828 0 1 1 0 0 0-1.414 1.414 4 4 0 0 0 5.656 0l3-3a4 4 0 0 0-5.656-5.656l-1.5 1.5a1 1 0 1 0 1.414 1.414l1.5-1.5zm-5.172 10.828a2 2 0 0 1-2.828-2.828l3-3a2 2 0 0 1 2.828 0 1 1 0 0 0 1.414-1.414 4 4 0 0 0-5.656 0l-3 3a4 4 0 1 0 5.656 5.656l1.5-1.5a1 1 0 0 0-1.414-1.414l-1.5 1.5z" />
                </svg>
            </button>
            <div class="h-4 w-px bg-zinc-300 dark:bg-zinc-600 mx-1"></div>
            <!-- In-editor image upload button -->
            <label
                class="inline-flex size-8 cursor-pointer items-center justify-center rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-700 text-xs transition"
                title="Insert Image (JPG, PNG, WebP)"
            >
                <input
                    type="file"
                    accept="image/jpeg,image/png,image/webp,image/avif"
                    class="sr-only"
                    @change="uploadImage($event)"
                />
                <svg class="size-4 text-cham-primary" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                </svg>
            </label>

            <!-- Loading indicator -->
            <span x-show="isUploading" class="ml-2 inline-flex items-center text-xs font-semibold text-cham-primary animate-pulse">
                Uploading image...
            </span>
        </div>

        <!-- Editor Canvas -->
        <div
            x-ref="editorElement"
            class="prose prose-zinc dark:prose-invert max-w-none p-4 min-h-[320px] focus:outline-hidden text-zinc-900 dark:text-zinc-100 text-base leading-relaxed"
        ></div>
    </div>

    @error($attributes->wire('model')->value())
        <flux:error>{{ $message }}</flux:error>
    @enderror
</div>
