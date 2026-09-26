<div class="max-w-3xl space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ $event && $event->exists ? 'Edit Event' : 'Post Event' }}</flux:heading>
            <flux:subheading>Add or update upcoming community sessions, workshops, and clinics.</flux:subheading>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.events.index')" wire:navigate>
            Back to Events
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs space-y-6">
            <flux:field>
                <flux:label>Event Title</flux:label>
                <flux:input wire:model.live.debounce.400ms="title" placeholder="e.g. Childhood Cancer Awareness Session" required />
                <flux:error name="title" />
            </flux:field>

            <flux:field>
                <flux:label>Slug</flux:label>
                <flux:input wire:model="slug" required />
                <flux:error name="slug" />
            </flux:field>

            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Date &amp; Time</flux:label>
                    <flux:input type="datetime-local" wire:model="event_date" required />
                    <flux:error name="event_date" />
                </flux:field>

                <flux:field>
                    <flux:label>Location / Venue</flux:label>
                    <flux:input wire:model="location" placeholder="e.g. Lagos, Nigeria or Virtual / Zoom" required />
                    <flux:error name="location" />
                </flux:field>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Category</flux:label>
                    <flux:input wire:model="category" placeholder="e.g. Awareness Session, Family Support Circle" />
                    <flux:error name="category" />
                </flux:field>

                <flux:field>
                    <flux:label>Action Button Label</flux:label>
                    <flux:input wire:model="action_label" placeholder="e.g. View event, Register now" required />
                    <flux:error name="action_label" />
                </flux:field>
            </div>

            <flux:field>
                <flux:label>Action / Registration Link (Optional)</flux:label>
                <flux:input wire:model="action_url" placeholder="https://... or #events" />
                <flux:description>Where visitors go when clicking the event card button.</flux:description>
                <flux:error name="action_url" />
            </flux:field>

            <flux:field>
                <flux:label>Description</flux:label>
                <flux:textarea wire:model="description" rows="3" placeholder="Tell attendees what to expect and who should join..." />
                <flux:error name="description" />
            </flux:field>

            <!-- Image Upload -->
            <flux:field>
                <flux:label>Event Cover Photo</flux:label>
                @if ($image)
                    <div class="mb-3">
                        <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="h-44 w-auto rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @elseif ($existing_image)
                    <div class="mb-3">
                        <img src="{{ $event->image_url }}" alt="Current" class="h-44 w-auto rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @endif
                <input
                    type="file"
                    wire:model="image"
                    accept="image/jpeg,image/png,image/webp,image/avif"
                    class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-cham-blue-50 file:text-cham-secondary hover:file:bg-cham-blue-100 cursor-pointer"
                />
                <flux:description>Recommended: horizontal 16:9 or 4:3 image under 5MB.</flux:description>
                <flux:error name="image" />
            </flux:field>

            <flux:field>
                <flux:checkbox wire:model="is_active" label="Show this event on public website" />
            </flux:field>
        </div>

        <div class="flex items-center justify-end gap-3">
            <flux:button variant="ghost" :href="route('admin.events.index')" wire:navigate>
                Cancel
            </flux:button>
            <flux:button variant="primary" type="submit">
                {{ $event && $event->exists ? 'Save Changes' : 'Post Event' }}
            </flux:button>
        </div>
    </form>
</div>
