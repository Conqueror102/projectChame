<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <flux:heading size="xl">Gallery (Moments of Care)</flux:heading>
            <flux:subheading>Curate documentary photos, captions, and care moments across Project Cham.</flux:subheading>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin.gallery.create')" wire:navigate>
            Add Photo
        </flux:button>
    </div>

    <div class="sm:w-80">
        <flux:input wire:model.live.debounce.300ms="search" placeholder="Search gallery..." icon="magnifying-glass" clearable />
    </div>

    <!-- Gallery Grid -->
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @forelse ($items as $item)
            <div wire:key="gallery-{{ $item->id }}" class="rounded-xl border border-zinc-200 bg-white p-3 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="relative aspect-video sm:aspect-4/3 w-full rounded-lg overflow-hidden bg-zinc-100 dark:bg-zinc-800 mb-3">
                        <img src="{{ $item->image_url }}" alt="{{ $item->alt_text ?? $item->title }}" class="size-full object-cover" />
                        <div class="absolute top-2 left-2">
                            <span class="rounded-md bg-black/60 backdrop-blur-xs px-2 py-0.5 text-xs font-mono font-bold text-white">
                                #{{ $item->number_string }}
                            </span>
                        </div>
                        <div class="absolute top-2 right-2">
                            <flux:badge :color="$item->is_active ? 'green' : 'zinc'" size="sm">
                                {{ $item->is_active ? 'Active' : 'Hidden' }}
                            </flux:badge>
                        </div>
                    </div>

                    <p class="text-xs font-semibold uppercase tracking-wider text-cham-primary">{{ $item->eyebrow }}</p>
                    <h3 class="font-semibold text-zinc-900 dark:text-zinc-100 text-sm mt-1 line-clamp-2">{{ $item->title }}</h3>
                    @if ($item->caption)
                        <p class="text-xs text-zinc-500 mt-1 line-clamp-2">{{ $item->caption }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between pt-3 mt-3 border-t border-zinc-100 dark:border-zinc-800 text-xs text-zinc-500">
                    <span class="capitalize">{{ str_replace('_', ' ', $item->layout_span) }}</span>
                    <div class="inline-flex gap-1">
                        <flux:button
                            variant="ghost"
                            size="sm"
                            wire:click="toggleActive({{ $item->id }})"
                        >
                            {{ $item->is_active ? 'Hide' : 'Show' }}
                        </flux:button>
                        <flux:button
                            variant="ghost"
                            size="sm"
                            icon="pencil-square"
                            :href="route('admin.gallery.edit', $item)"
                            wire:navigate
                        />
                        <flux:button
                            variant="ghost"
                            size="sm"
                            icon="trash"
                            class="text-red-600 hover:text-red-700"
                            wire:click="confirmDelete({{ $item->id }})"
                        />
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full py-12 text-center text-zinc-500 dark:text-zinc-400">
                No gallery photos found. Click "Add Photo" to upload one.
            </div>
        @endforelse
    </div>

    @if ($items->hasPages())
        <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
            {{ $items->links() }}
        </div>
    @endif

    <!-- Delete Confirmation Modal -->
    <flux:modal name="delete-item" class="max-w-md">
        <div class="space-y-4">
            <flux:heading size="lg">Delete Gallery Photo</flux:heading>
            <flux:subheading>Are you sure you want to remove this photo from the gallery?</flux:subheading>
            <div class="flex justify-end gap-2 pt-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="deleteItem">Confirm Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
