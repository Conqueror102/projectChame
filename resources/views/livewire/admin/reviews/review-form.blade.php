<div class="max-w-2xl space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <flux:heading size="xl">{{ $review && $review->exists ? 'Edit Review / Reflection' : 'Add New Review' }}</flux:heading>
            <flux:subheading>Family reflections and testimonials displayed on the homepage carousel.</flux:subheading>
        </div>
        <flux:button variant="ghost" icon="arrow-left" :href="route('admin.reviews.index')" wire:navigate>
            Back to Reviews
        </flux:button>
    </div>

    <form wire:submit="save" class="space-y-6">
        <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs space-y-6">
            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Author Name / Identifier</flux:label>
                    <flux:input wire:model="author_name" placeholder="e.g. A Project Cham family or Mrs. Ngozi E." required />
                    <flux:description>May be anonymous for privacy.</flux:description>
                    <flux:error name="author_name" />
                </flux:field>

                <flux:field>
                    <flux:label>Relationship / Role</flux:label>
                    <flux:input wire:model="role" placeholder="e.g. Supported Caregiver or Parent" />
                    <flux:description>Context of care or involvement.</flux:description>
                    <flux:error name="role" />
                </flux:field>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Privacy / Location Note</flux:label>
                    <flux:input wire:model="meta" placeholder="e.g. Identity protected or Lagos, Nigeria" />
                    <flux:error name="meta" />
                </flux:field>

                <flux:field>
                    <flux:label>Initials for Badge (Optional)</flux:label>
                    <flux:input wire:model="initials" maxlength="10" placeholder="e.g. PC or SC (auto-generated if empty)" />
                    <flux:error name="initials" />
                </flux:field>
            </div>

            <flux:field>
                <flux:label>Testimonial / Quote Content</flux:label>
                <flux:textarea wire:model="content" rows="4" placeholder="What difference did Project Cham make in their care journey..." required />
                <flux:error name="content" />
            </flux:field>

            <div class="grid gap-4 sm:grid-cols-2">
                <flux:field>
                    <flux:label>Rating (1 to 5)</flux:label>
                    <flux:select wire:model="rating">
                        <flux:select.option value="5">5 Stars — Excellent</flux:select.option>
                        <flux:select.option value="4">4 Stars — Very Good</flux:select.option>
                        <flux:select.option value="3">3 Stars — Good</flux:select.option>
                    </flux:select>
                    <flux:error name="rating" />
                </flux:field>

                <flux:field>
                    <flux:label>Display Order Priority</flux:label>
                    <flux:input type="number" min="0" wire:model="order" required />
                    <flux:description>Lower numbers display first.</flux:description>
                    <flux:error name="order" />
                </flux:field>
            </div>

            <div class="flex items-center gap-2 pt-2">
                <flux:switch wire:model="is_active" label="Display on public website" />
            </div>
        </div>

        <div class="flex items-center justify-end gap-3">
            <flux:button variant="ghost" :href="route('admin.reviews.index')" wire:navigate>
                Cancel
            </flux:button>
            <flux:button variant="primary" type="submit">
                {{ $review && $review->exists ? 'Update Review' : 'Publish Review' }}
            </flux:button>
        </div>
    </form>
</div>
