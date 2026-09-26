<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <flux:heading size="xl">Events Management</flux:heading>
            <flux:subheading>Post awareness sessions, clinics, workshops, and family support circles.</flux:subheading>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin.events.create')" wire:navigate>
            Post Event
        </flux:button>
    </div>

    <!-- Filters & Search -->
    <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-center justify-between">
        <div class="sm:w-80">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Search events..." icon="magnifying-glass" clearable />
        </div>
        <div class="w-48">
            <flux:select wire:model.live="filter">
                <flux:select.option value="all">All events</flux:select.option>
                <flux:select.option value="upcoming">Upcoming</flux:select.option>
                <flux:select.option value="past">Past</flux:select.option>
            </flux:select>
        </div>
    </div>

    <!-- Events Table -->
    <div class="rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800/50 text-xs font-semibold uppercase text-zinc-500 dark:text-zinc-400">
                    <tr>
                        <th class="py-3.5 px-4">Event</th>
                        <th class="py-3.5 px-4">Date &amp; Time</th>
                        <th class="py-3.5 px-4">Location</th>
                        <th class="py-3.5 px-4">Category</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse ($events as $event)
                        <tr wire:key="event-{{ $event->id }}" class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30 transition">
                            <td class="py-3.5 px-4">
                                <div class="flex items-center gap-3">
                                    @if ($event->image)
                                        <img src="{{ $event->image_url }}" alt="" class="size-11 rounded-lg object-cover border border-zinc-200 dark:border-zinc-700" />
                                    @else
                                        <div class="grid size-11 place-items-center rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-400">
                                            <flux:icon name="calendar" class="size-5" />
                                        </div>
                                    @endif
                                    <div class="min-w-0">
                                        <p class="font-medium text-zinc-900 dark:text-zinc-100 truncate max-w-xs">{{ $event->title }}</p>
                                        <p class="text-xs text-zinc-500 truncate max-w-xs">{{ $event->action_label }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3.5 px-4 text-zinc-600 dark:text-zinc-400 text-xs">
                                <div>{{ $event->formatted_date }}</div>
                                <div class="text-zinc-400">{{ $event->formatted_time }}</div>
                            </td>
                            <td class="py-3.5 px-4 text-zinc-600 dark:text-zinc-400 text-xs">
                                {{ $event->location }}
                            </td>
                            <td class="py-3.5 px-4 text-zinc-600 dark:text-zinc-400 text-xs">
                                <flux:badge color="zinc" size="sm">{{ $event->category ?? 'Event' }}</flux:badge>
                            </td>
                            <td class="py-3.5 px-4">
                                <flux:button
                                    variant="ghost"
                                    size="sm"
                                    wire:click="toggleActive({{ $event->id }})"
                                >
                                    @if ($event->is_active)
                                        <flux:badge color="green" size="sm">Active</flux:badge>
                                    @else
                                        <flux:badge color="zinc" size="sm">Inactive</flux:badge>
                                    @endif
                                </flux:button>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        icon="pencil-square"
                                        :href="route('admin.events.edit', $event)"
                                        wire:navigate
                                    />
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        icon="trash"
                                        class="text-red-600 hover:text-red-700"
                                        wire:click="confirmDelete({{ $event->id }})"
                                    />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-8 text-center text-zinc-500 dark:text-zinc-400">
                                No events found. Click "Post Event" to add one.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($events->hasPages())
            <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
                {{ $events->links() }}
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <flux:modal name="delete-event" class="max-w-md">
        <div class="space-y-4">
            <flux:heading size="lg">Delete Event</flux:heading>
            <flux:subheading>Are you sure you want to delete this event?</flux:subheading>
            <div class="flex justify-end gap-2 pt-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="deleteEvent">Confirm Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
