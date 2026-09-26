<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <flux:heading size="xl">Team Members</flux:heading>
            <flux:subheading>Manage doctors, support coordinators, and leaders on Project Cham.</flux:subheading>
        </div>
        <flux:button variant="primary" icon="plus" :href="route('admin.team.create')" wire:navigate>
            Add Member
        </flux:button>
    </div>

    <div class="sm:w-80">
        <flux:input wire:model.live.debounce.300ms="search" placeholder="Search team members..." icon="magnifying-glass" clearable />
    </div>

    <!-- Team Cards Grid -->
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @forelse ($members as $member)
            <div wire:key="member-{{ $member->id }}" class="rounded-xl border border-zinc-200 bg-white p-4 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs flex flex-col justify-between">
                <div>
                    <div class="relative aspect-square w-full rounded-lg overflow-hidden bg-zinc-100 dark:bg-zinc-800 mb-3">
                        @if ($member->image)
                            <img src="{{ $member->image_url }}" alt="{{ $member->name }}" class="size-full object-cover" />
                        @else
                            <div class="grid size-full place-items-center text-zinc-400">
                                <flux:icon name="user" class="size-12" />
                            </div>
                        @endif
                        <div class="absolute top-2 right-2">
                            <flux:badge :color="$member->is_active ? 'green' : 'zinc'" size="sm">
                                {{ $member->is_active ? 'Active' : 'Hidden' }}
                            </flux:badge>
                        </div>
                    </div>

                    <h3 class="font-semibold text-zinc-900 dark:text-zinc-100">{{ $member->name }}</h3>
                    <p class="text-xs text-cham-primary font-medium mt-0.5">{{ $member->role }}</p>
                    @if ($member->bio)
                        <p class="text-xs text-zinc-500 mt-2 line-clamp-2">{{ $member->bio }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between pt-4 mt-3 border-t border-zinc-100 dark:border-zinc-800 text-xs text-zinc-500">
                    <span>Order: #{{ $member->order }}</span>
                    <div class="inline-flex gap-1">
                        <flux:button
                            variant="ghost"
                            size="sm"
                            wire:click="toggleActive({{ $member->id }})"
                        >
                            {{ $member->is_active ? 'Hide' : 'Show' }}
                        </flux:button>
                        <flux:button
                            variant="ghost"
                            size="sm"
                            icon="pencil-square"
                            :href="route('admin.team.edit', $member)"
                            wire:navigate
                        />
                        <flux:button
                            variant="ghost"
                            size="sm"
                            icon="trash"
                            class="text-red-600 hover:text-red-700"
                            wire:click="confirmDelete({{ $member->id }})"
                        />
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full py-12 text-center text-zinc-500 dark:text-zinc-400">
                No team members found. Click "Add Member" to add one.
            </div>
        @endforelse
    </div>

    @if ($members->hasPages())
        <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
            {{ $members->links() }}
        </div>
    @endif

    <!-- Delete Confirmation Modal -->
    <flux:modal name="delete-member" class="max-w-md">
        <div class="space-y-4">
            <flux:heading size="lg">Delete Team Member</flux:heading>
            <flux:subheading>Are you sure you want to remove this team member?</flux:subheading>
            <div class="flex justify-end gap-2 pt-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="deleteMember">Confirm Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
