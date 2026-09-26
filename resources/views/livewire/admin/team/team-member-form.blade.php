<div class="max-w-2xl space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ $member && $member->exists ? 'Edit Team Member' : 'Add Team Member' }}</flux:heading>
            <flux:subheading>Profile for leadership, healthcare partners, or volunteers.</flux:subheading>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.team.index')" wire:navigate>
            Back to Team
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs space-y-6">
            <div class="grid gap-6 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Full Name</flux:label>
                    <flux:input wire:model="name" placeholder="e.g. Amara Okafor" required />
                    <flux:error name="name" />
                </flux:field>

                <flux:field>
                    <flux:label>Role / Position</flux:label>
                    <flux:input wire:model="role" placeholder="e.g. Child &amp; Family Support Lead" required />
                    <flux:error name="role" />
                </flux:field>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Specialty / Focus Area</flux:label>
                    <flux:input wire:model="specialty" placeholder="e.g. Pediatric Nursing &amp; Navigation" />
                    <flux:error name="specialty" />
                </flux:field>

                <flux:field>
                    <flux:label>Email Address</flux:label>
                    <flux:input type="email" wire:model="email" placeholder="e.g. name@projectcham.org" />
                    <flux:error name="email" />
                </flux:field>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                <flux:field>
                    <flux:label>LinkedIn Profile URL</flux:label>
                    <flux:input type="url" wire:model="linkedin_url" placeholder="https://linkedin.com/in/username" />
                    <flux:error name="linkedin_url" />
                </flux:field>

                <flux:field>
                    <flux:label>X / Twitter URL</flux:label>
                    <flux:input type="url" wire:model="twitter_url" placeholder="https://x.com/username" />
                    <flux:error name="twitter_url" />
                </flux:field>
            </div>

            <flux:field>
                <flux:label>Inspiring Quote / Care Philosophy</flux:label>
                <flux:input wire:model="quote" placeholder="e.g. No family should walk this journey in isolation." />
                <flux:error name="quote" />
            </flux:field>

            <flux:field>
                <flux:label>Full Biography</flux:label>
                <flux:textarea wire:model="bio" rows="4" placeholder="Comprehensive background on their qualifications, healthcare experience, and role at Project Cham..." />
                <flux:error name="bio" />
            </flux:field>

            <!-- Photo Upload -->
            <flux:field>
                <flux:label>Profile Photo</flux:label>
                @if ($image)
                    <div class="mb-3">
                        <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="size-32 rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @elseif ($existing_image)
                    <div class="mb-3">
                        <img src="{{ $member->image_url }}" alt="Existing" class="size-32 rounded-xl object-cover border border-zinc-200 dark:border-zinc-700" />
                    </div>
                @endif
                <input
                    type="file"
                    wire:model="image"
                    accept="image/jpeg,image/png,image/webp,image/avif"
                    class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-cham-pink-50 file:text-cham-primary hover:file:bg-cham-pink-100 cursor-pointer"
                />
                <flux:description>Square portrait recommended (under 5MB).</flux:description>
                <flux:error name="image" />
            </flux:field>

            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Display Order Priority</flux:label>
                    <flux:input type="number" min="0" wire:model="order" required />
                    <flux:description>Lower numbers appear first.</flux:description>
                    <flux:error name="order" />
                </flux:field>

                <flux:field class="pt-6">
                    <flux:checkbox wire:model="is_active" label="Visible on public website" />
                </flux:field>
            </div>
        </div>

        <div class="flex items-center justify-end gap-3">
            <flux:button variant="ghost" :href="route('admin.team.index')" wire:navigate>
                Cancel
            </flux:button>
            <flux:button variant="primary" type="submit">
                {{ $member && $member->exists ? 'Save Changes' : 'Add Member' }}
            </flux:button>
        </div>
    </form>
</div>
