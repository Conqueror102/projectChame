<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <flux:heading size="xl">Family Voices &amp; Reviews</flux:heading>
            <flux:subheading>Manage parent reflections, testimonials, and caregiver quotes displayed on the website.</flux:subheading>
        </div>
        <div>
            <flux:button variant="primary" icon="plus" :href="route('admin.reviews.create')" wire:navigate>
                Add Review
            </flux:button>
        </div>
    </div>

    <!-- Search & Filters -->
    <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-center justify-between">
        <div class="sm:w-80">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Search by author or quote..." icon="magnifying-glass" clearable />
        </div>
    </div>

    <!-- Reviews Table -->
    <div class="rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800/50 text-xs font-semibold uppercase text-zinc-500 dark:text-zinc-400">
                    <tr>
                        <th class="py-3.5 px-4">Author &amp; Meta</th>
                        <th class="py-3.5 px-4">Quote / Testimonial</th>
                        <th class="py-3.5 px-4 text-center">Order</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse ($reviews as $rev)
                        <tr wire:key="review-{{ $rev->id }}" class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30 transition">
                            <td class="py-3.5 px-4">
                                <div class="flex items-center gap-3">
                                    <div class="grid size-9 shrink-0 place-items-center rounded-full bg-rose-50 dark:bg-rose-950/40 text-rose-600 font-extrabold text-xs">
                                        {{ $rev->effective_initials }}
                                    </div>
                                    <div>
                                        <div class="font-semibold text-zinc-900 dark:text-zinc-100">{{ $rev->author_name }}</div>
                                        <div class="text-xs text-zinc-500">{{ $rev->role ?: 'Care Recipient' }} &bull; {{ $rev->meta }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3.5 px-4 max-w-md">
                                <p class="text-xs text-zinc-700 dark:text-zinc-300 italic line-clamp-2">
                                    &ldquo;{{ $rev->content }}&rdquo;
                                </p>
                            </td>
                            <td class="py-3.5 px-4 text-center text-xs font-semibold text-zinc-700 dark:text-zinc-300">
                                {{ $rev->order }}
                            </td>
                            <td class="py-3.5 px-4">
                                <button
                                    type="button"
                                    wire:click="toggleActive({{ $rev->id }})"
                                    class="cursor-pointer"
                                >
                                    <flux:badge :color="$rev->is_active ? 'green' : 'zinc'" size="sm">
                                        {{ $rev->is_active ? 'Active' : 'Hidden' }}
                                    </flux:badge>
                                </button>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <div class="inline-flex gap-2">
                                    <flux:button
                                        variant="outline"
                                        size="sm"
                                        :href="route('admin.reviews.edit', $rev->id)"
                                        wire:navigate
                                    >
                                        Edit
                                    </flux:button>
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        icon="trash"
                                        class="text-red-600 hover:text-red-700"
                                        wire:click="confirmDelete({{ $rev->id }})"
                                    />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-zinc-500 dark:text-zinc-400">
                                No reviews found. Click &ldquo;Add Review&rdquo; to create one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($reviews->hasPages())
            <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
                {{ $reviews->links() }}
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <flux:modal name="delete-review" class="max-w-md">
        <div class="space-y-4">
            <flux:heading size="lg">Delete Review</flux:heading>
            <flux:subheading>Are you sure you want to remove this family reflection? It will no longer appear on the website.</flux:subheading>
            <div class="flex justify-end gap-2 pt-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="deleteReview">Confirm Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
