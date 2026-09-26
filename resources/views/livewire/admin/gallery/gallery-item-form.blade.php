<div class="max-w-2xl space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ $item && $item->exists ? 'Edit Gallery Photo' : 'Add Gallery Photo' }}</flux:heading>
            <flux:subheading>Upload and document care moments, support sessions, and clinic visits.</flux:subheading>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.gallery.index')" wire:navigate>
            Back to Gallery
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs space-y-6">
            <flux:field>
                <flux:label>Headline / Caption Title</flux:label>
                <flux:input wire:model="title" placeholder="e.g. Room to learn, laugh, and still feel like a child" required />
                <flux:error name="title" />
            </flux:field>

            <flux:field>
                <flux:label>Category / Eyebrow Tag</flux:label>
                <flux:input wire:model="eyebrow" placeholder="e.g. Child &amp; family support, Access to care" />
                <flux:error name="eyebrow" />
            </flux:field>

            <flux:field>
                <flux:label>Full Caption / Story Context</flux:label>
                <flux:textarea wire:model="caption" rows="2" placeholder="Brief explanation of the moment captured in this photograph..." />
                <flux:error name="caption" />
            </flux:field>

            <flux:field>
                <flux:label>Image Alt Text (Accessibility)</flux:label>
                <flux:input wire:model="alt_text" placeholder="Detailed description of the image content..." />
                <flux:error name="alt_text" />
            </flux:field>

            <!-- Image Upload -->
            <flux:field>
                <flux:label>Photograph</flux:label>
                @if ($image)
                    <div class="mb-3">
                        <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="h-48 w-auto rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @elseif ($existing_image)
                    <div class="mb-3">
                        <img src="{{ $item->image_url }}" alt="Existing" class="h-48 w-auto rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @endif
                <input
                    type="file"
                    wire:model="image"
                    accept="image/jpeg,image/png,image/webp,image/avif"
                    class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-cham-pink-50 file:text-cham-primary hover:file:bg-cham-pink-100 cursor-pointer"
                />
                <flux:description>High quality JPG or WebP under 5MB.</flux:description>
                <flux:error name="image" />
            </flux:field>

            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Display Order Sequence</flux:label>
                    <flux:input type="number" min="1" wire:model="order" required />
                    <flux:description>Used for the 01, 02 numbering and ordering.</flux:description>
                    <flux:error name="order" />
                </flux:field>

                <flux:field>
                    <flux:label>Bento Layout Role</flux:label>
                    <flux:select wire:model="layout_span">
                        <flux:select.option value="standard">Standard Frame</flux:select.option>
                        <flux:select.option value="featured_large">Featured Anchor (Large 2-row)</flux:select.option>
                        <flux:select.option value="compact">Compact Frame</flux:select.option>
                    </flux:select>
                    <flux:error name="layout_span" />
                </flux:field>
            </div>

            <flux:field>
                <flux:checkbox wire:model="is_active" label="Display in public gallery" />
            </flux:field>
        </div>

        <div class="flex items-center justify-end gap-3">
            <flux:button variant="ghost" :href="route('admin.gallery.index')" wire:navigate>
                Cancel
            </flux:button>
            <flux:button variant="primary" type="submit">
                {{ $item && $item->exists ? 'Save Changes' : 'Upload Photo' }}
            </flux:button>
        </div>
    </form>
</div>
