<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <flux:heading size="xl">Stories &amp; Blog</flux:heading>
            <flux:subheading>Manage articles, guidance, and updates published to Project Cham.</flux:subheading>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin.posts.create')" wire:navigate>
            Write Story
        </flux:button>
    </div>

    <!-- Filters & Search -->
    <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-center justify-between">
        <div class="sm:w-80">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Search stories..." icon="magnifying-glass" clearable />
        </div>
        <div class="w-48">
            <flux:select wire:model.live="status">
                <flux:select.option value="all">All statuses</flux:select.option>
                <flux:select.option value="published">Published</flux:select.option>
                <flux:select.option value="draft">Drafts</flux:select.option>
            </flux:select>
        </div>
    </div>

    <!-- Posts Table -->
    <div class="rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800/50 text-xs font-semibold uppercase text-zinc-500 dark:text-zinc-400">
                    <tr>
                        <th class="py-3.5 px-4">Story</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-4">Published Date</th>
                        <th class="py-3.5 px-4">Read Time</th>
                        <th class="py-3.5 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse ($posts as $post)
                        <tr wire:key="post-{{ $post->id }}" class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30 transition">
                            <td class="py-3.5 px-4">
                                <div class="flex items-center gap-3">
                                    @if ($post->featured_image)
                                        <img src="{{ $post->featured_image_url }}" alt="" class="size-11 rounded-lg object-cover border border-zinc-200 dark:border-zinc-700" />
                                    @else
                                        <div class="grid size-11 place-items-center rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-400">
                                            <flux:icon name="document-text" class="size-5" />
                                        </div>
                                    @endif
                                    <div class="min-w-0">
                                        <p class="font-medium text-zinc-900 dark:text-zinc-100 truncate max-w-sm">{{ $post->title }}</p>
                                        <p class="text-xs text-zinc-500 truncate max-w-sm">{{ $post->slug }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3.5 px-4">
                                @if ($post->isPublished())
                                    <flux:badge color="green" size="sm">Published</flux:badge>
                                @else
                                    <flux:badge color="zinc" size="sm">Draft</flux:badge>
                                @endif
                            </td>
                            <td class="py-3.5 px-4 text-zinc-600 dark:text-zinc-400 text-xs">
                                {{ $post->published_at ? $post->published_at->format('M d, Y') : '—' }}
                            </td>
                            <td class="py-3.5 px-4 text-zinc-600 dark:text-zinc-400 text-xs">
                                {{ $post->read_time_minutes }} min read
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        wire:click="toggleStatus({{ $post->id }})"
                                        title="{{ $post->status === 'published' ? 'Unpublish' : 'Publish' }}"
                                    >
                                        {{ $post->status === 'published' ? 'Draft' : 'Publish' }}
                                    </flux:button>
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        icon="pencil-square"
                                        :href="route('admin.posts.edit', $post)"
                                        wire:navigate
                                    />
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        icon="trash"
                                        class="text-red-600 hover:text-red-700"
                                        wire:click="confirmDelete({{ $post->id }})"
                                    />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-zinc-500 dark:text-zinc-400">
                                No stories found. Click "Write Story" to add one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($posts->hasPages())
            <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
                {{ $posts->links() }}
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <flux:modal name="delete-post" class="max-w-md">
        <div class="space-y-4">
            <flux:heading size="lg">Delete Story</flux:heading>
            <flux:subheading>Are you sure you want to delete this story? This action can be undone from trash.</flux:subheading>
            <div class="flex justify-end gap-2 pt-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="deletePost">Confirm Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
