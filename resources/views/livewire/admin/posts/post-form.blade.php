<div class="max-w-4xl space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ $post && $post->exists ? 'Edit Story' : 'New Story' }}</flux:heading>
            <flux:subheading>Write and publish stories, guidance, or updates with TipTap.</flux:subheading>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.posts.index')" wire:navigate>
            Back to Stories
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs space-y-6">
            <!-- Title & Slug -->
            <flux:field>
                <flux:label>Title</flux:label>
                <flux:input wire:model.live.debounce.400ms="title" placeholder="e.g. When Awareness Becomes Early Action" required />
                <flux:error name="title" />
            </flux:field>

            <flux:field>
                <flux:label>URL Slug</flux:label>
                <flux:input wire:model="slug" placeholder="when-awareness-becomes-early-action" required />
                <flux:description>The web address where this story will be viewed (e.g. /stories/{{ $slug ?: 'your-slug' }}).</flux:description>
                <flux:error name="slug" />
            </flux:field>

            <!-- Excerpt -->
            <flux:field>
                <flux:label>Excerpt (Summary)</flux:label>
                <flux:textarea wire:model="excerpt" rows="2" placeholder="Short description shown on story cards and search previews..." />
                <flux:error name="excerpt" />
            </flux:field>

            <!-- Featured Image -->
            <flux:field>
                <flux:label>Featured Cover Image</flux:label>
                @if ($featured_image)
                    <div class="mb-3">
                        <img src="{{ $featured_image->temporaryUrl() }}" alt="Preview" class="h-44 w-auto rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @elseif ($existing_featured_image)
                    <div class="mb-3">
                        <img src="{{ $post->featured_image_url }}" alt="Existing" class="h-44 w-auto rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @endif
                <input
                    type="file"
                    wire:model="featured_image"
                    accept="image/jpeg,image/png,image/webp,image/avif"
                    class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-cham-pink-50 file:text-cham-primary hover:file:bg-cham-pink-100 cursor-pointer"
                />
                <flux:description>Allowed formats: JPG, PNG, WebP. Max size: 5MB.</flux:description>
                <flux:error name="featured_image" />
            </flux:field>

            <!-- TipTap Rich Text Editor -->
            <div wire:ignore>
                <x-tiptap-editor
                    wire:model="content"
                    label="Story Content (TipTap Editor)"
                    :upload-url="route('admin.media.upload')"
                />
            </div>
            @error('content')
                <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror

            <!-- Publication Settings -->
            <div class="grid gap-4 sm:grid-cols-3 pt-4 border-t border-zinc-200 dark:border-zinc-700">
                <flux:field>
                    <flux:label>Status</flux:label>
                    <flux:select wire:model="status">
                        <flux:select.option value="draft">Draft</flux:select.option>
                        <flux:select.option value="published">Published</flux:select.option>
                    </flux:select>
                    <flux:error name="status" />
                </flux:field>

                <flux:field>
                    <flux:label>Publication Date</flux:label>
                    <flux:input type="datetime-local" wire:model="published_at" />
                    <flux:error name="published_at" />
                </flux:field>

                <flux:field>
                    <flux:label>Read Time (Minutes)</flux:label>
                    <flux:input type="number" min="1" max="60" wire:model="read_time_minutes" />
                    <flux:error name="read_time_minutes" />
                </flux:field>
            </div>
        </div>

        <div class="flex items-center justify-end gap-3">
            <flux:button variant="ghost" :href="route('admin.posts.index')" wire:navigate>
                Cancel
            </flux:button>
            <flux:button variant="primary" type="submit">
                {{ $post && $post->exists ? 'Save Changes' : 'Create Story' }}
            </flux:button>
        </div>
    </form>
</div>
