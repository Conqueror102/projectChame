<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <flux:heading size="xl">Donor Inquiries &amp; Outreach CRM</flux:heading>
            <flux:subheading>Follow up with people willing to donate, support children, or partner with Project Cham.</flux:subheading>
        </div>
    </div>

    <!-- Quick Stats Summary -->
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
        <div class="rounded-xl border border-zinc-200 bg-white p-4 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs">
            <p class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">Total Inquiries</p>
            <p class="text-2xl font-bold text-zinc-900 dark:text-zinc-100 mt-1">{{ $counts['total'] }}</p>
        </div>
        <div class="rounded-xl border border-rose-200 bg-rose-50/50 p-4 dark:border-rose-900/50 dark:bg-rose-950/30 shadow-xs">
            <p class="text-xs font-semibold text-rose-600 dark:text-rose-400 uppercase tracking-wider">New (Needs Outreach)</p>
            <p class="text-2xl font-bold text-rose-700 dark:text-rose-300 mt-1">{{ $counts['new'] }}</p>
        </div>
        <div class="rounded-xl border border-blue-200 bg-blue-50/50 p-4 dark:border-blue-900/50 dark:bg-blue-950/30 shadow-xs">
            <p class="text-xs font-semibold text-blue-600 dark:text-blue-400 uppercase tracking-wider">In Discussion</p>
            <p class="text-2xl font-bold text-blue-700 dark:text-blue-300 mt-1">{{ $counts['in_progress'] }}</p>
        </div>
        <div class="rounded-xl border border-emerald-200 bg-emerald-50/50 p-4 dark:border-emerald-900/50 dark:bg-emerald-950/30 shadow-xs">
            <p class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 uppercase tracking-wider">Pledged / Donated</p>
            <p class="text-2xl font-bold text-emerald-700 dark:text-emerald-300 mt-1">{{ $counts['pledged'] }}</p>
        </div>
    </div>

    <!-- Filters & Search -->
    <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-center justify-between">
        <div class="sm:w-80">
            <flux:input wire:model.live.debounce.300ms="search" placeholder="Search by name, email, phone..." icon="magnifying-glass" clearable />
        </div>
        <div class="flex flex-wrap gap-2">
            <div class="w-40">
                <flux:select wire:model.live="status">
                    <flux:select.option value="all">All statuses</flux:select.option>
                    <flux:select.option value="new">New</flux:select.option>
                    <flux:select.option value="contacted">Contacted</flux:select.option>
                    <flux:select.option value="in_progress">In Progress</flux:select.option>
                    <flux:select.option value="pledged">Pledged</flux:select.option>
                    <flux:select.option value="closed">Closed</flux:select.option>
                </flux:select>
            </div>
            <div class="w-48">
                <flux:select wire:model.live="involvement">
                    <flux:select.option value="all">All causes</flux:select.option>
                    <flux:select.option value="support_child">Support a Child</flux:select.option>
                    <flux:select.option value="general_donation">Direct Medical Fund</flux:select.option>
                    <flux:select.option value="partner">Partnership</flux:select.option>
                    <flux:select.option value="advocate">Advocacy</flux:select.option>
                </flux:select>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800/50 text-xs font-semibold uppercase text-zinc-500 dark:text-zinc-400">
                    <tr>
                        <th class="py-3.5 px-4">Contact</th>
                        <th class="py-3.5 px-4">Cause / Interest</th>
                        <th class="py-3.5 px-4">Pledge &amp; Frequency</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-4">Received</th>
                        <th class="py-3.5 px-4 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse ($inquiries as $inquiry)
                        <tr wire:key="inquiry-{{ $inquiry->id }}" class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30 transition">
                            <td class="py-3.5 px-4">
                                <div class="font-medium text-zinc-900 dark:text-zinc-100">{{ $inquiry->name }}</div>
                                <div class="text-xs text-zinc-500">{{ $inquiry->email }}</div>
                                @if ($inquiry->phone)
                                    <div class="text-xs text-cham-secondary">{{ $inquiry->phone }}</div>
                                @endif
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="text-xs font-medium text-zinc-800 dark:text-zinc-200">{{ $inquiry->involvement_label }}</span>
                            </td>
                            <td class="py-3.5 px-4 text-xs">
                                <div class="font-semibold text-zinc-900 dark:text-zinc-100">
                                    {{ $inquiry->pledge_amount ? $inquiry->pledge_amount : 'Flexible' }}
                                </div>
                                <div class="text-zinc-500">{{ $inquiry->frequency_label }}</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <flux:badge :color="$inquiry->status_color" size="sm">
                                    {{ ucfirst(str_replace('_', ' ', $inquiry->status)) }}
                                </flux:badge>
                            </td>
                            <td class="py-3.5 px-4 text-xs text-zinc-500">
                                <div>{{ $inquiry->created_at->format('M d, Y') }}</div>
                                <div class="text-[11px] text-zinc-400">{{ $inquiry->created_at->diffForHumans() }}</div>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <div class="inline-flex gap-1">
                                    <flux:button
                                        variant="primary"
                                        size="sm"
                                        wire:click="viewInquiry({{ $inquiry->id }})"
                                    >
                                        Review Lead
                                    </flux:button>
                                    <flux:button
                                        variant="ghost"
                                        size="sm"
                                        icon="trash"
                                        class="text-red-600 hover:text-red-700"
                                        wire:click="confirmDelete({{ $inquiry->id }})"
                                    />
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-8 text-center text-zinc-500 dark:text-zinc-400">
                                No donor inquiries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($inquiries->hasPages())
            <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
                {{ $inquiries->links() }}
            </div>
        @endif
    </div>

    <!-- Detail & Outreach Notes Modal -->
    <flux:modal name="inquiry-detail" class="max-w-2xl">
        @if ($selectedInquiry)
            <div class="space-y-5">
                <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-700 pb-3">
                    <div>
                        <flux:heading size="lg">{{ $selectedInquiry->name }}</flux:heading>
                        <flux:subheading>{{ $selectedInquiry->email }} &bull; {{ $selectedInquiry->phone ?? 'No phone' }}</flux:subheading>
                    </div>
                    <flux:badge :color="$selectedInquiry->status_color">
                        {{ ucfirst(str_replace('_', ' ', $selectedInquiry->status)) }}
                    </flux:badge>
                </div>

                <div class="grid grid-cols-2 gap-3 text-sm bg-zinc-50 dark:bg-zinc-800/60 p-3.5 rounded-xl border border-zinc-200 dark:border-zinc-700">
                    <div>
                        <span class="text-xs text-zinc-500 uppercase font-semibold">Interest Area:</span>
                        <p class="font-medium text-zinc-900 dark:text-zinc-100 mt-0.5">{{ $selectedInquiry->involvement_label }}</p>
                    </div>
                    <div>
                        <span class="text-xs text-zinc-500 uppercase font-semibold">Intended Pledge:</span>
                        <p class="font-medium text-zinc-900 dark:text-zinc-100 mt-0.5">
                            {{ $selectedInquiry->pledge_amount ?: 'Flexible / Custom' }} ({{ $selectedInquiry->frequency_label }})
                        </p>
                    </div>
                </div>

                @if ($selectedInquiry->message)
                    <div>
                        <span class="text-xs text-zinc-500 uppercase font-semibold">Personal Message:</span>
                        <div class="mt-1 p-3 rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 text-sm whitespace-pre-wrap">
                            {{ $selectedInquiry->message }}
                        </div>
                    </div>
                @endif

                <!-- Status Update Buttons -->
                <div>
                    <span class="text-xs text-zinc-500 uppercase font-semibold">Update Outreach Status:</span>
                    <div class="mt-2 flex flex-wrap gap-2">
                        <flux:button
                            variant="{{ $selectedInquiry->status === 'new' ? 'primary' : 'outline' }}"
                            size="sm"
                            wire:click="updateStatus({{ $selectedInquiry->id }}, 'new')"
                        >
                            New
                        </flux:button>
                        <flux:button
                            variant="{{ $selectedInquiry->status === 'contacted' ? 'primary' : 'outline' }}"
                            size="sm"
                            wire:click="updateStatus({{ $selectedInquiry->id }}, 'contacted')"
                        >
                            Contacted
                        </flux:button>
                        <flux:button
                            variant="{{ $selectedInquiry->status === 'in_progress' ? 'primary' : 'outline' }}"
                            size="sm"
                            wire:click="updateStatus({{ $selectedInquiry->id }}, 'in_progress')"
                        >
                            In Progress
                        </flux:button>
                        <flux:button
                            variant="{{ $selectedInquiry->status === 'pledged' ? 'primary' : 'outline' }}"
                            size="sm"
                            wire:click="updateStatus({{ $selectedInquiry->id }}, 'pledged')"
                        >
                            Pledged
                        </flux:button>
                        <flux:button
                            variant="{{ $selectedInquiry->status === 'closed' ? 'primary' : 'outline' }}"
                            size="sm"
                            wire:click="updateStatus({{ $selectedInquiry->id }}, 'closed')"
                        >
                            Closed
                        </flux:button>
                    </div>
                </div>

                <!-- Internal Notes / CRM Call Log -->
                <div class="space-y-2 pt-2 border-t border-zinc-200 dark:border-zinc-700">
                    <flux:label>Internal Outreach Notes / Follow-up Log</flux:label>
                    <flux:textarea
                        wire:model="notes"
                        rows="3"
                        placeholder="Log phone calls, emails, commitments, or specific child support details here..."
                    />
                    <div class="flex justify-end gap-2 pt-2">
                        <flux:modal.close>
                            <flux:button variant="ghost">Close</flux:button>
                        </flux:modal.close>
                        <flux:button variant="primary" size="sm" wire:click="saveNotes">
                            Save Notes
                        </flux:button>
                    </div>
                </div>
            </div>
        @endif
    </flux:modal>

    <!-- Delete Modal -->
    <flux:modal name="delete-inquiry" class="max-w-md">
        <div class="space-y-4">
            <flux:heading size="lg">Delete Inquiry</flux:heading>
            <flux:subheading>Are you sure you want to delete this donor inquiry record?</flux:subheading>
            <div class="flex justify-end gap-2 pt-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="deleteInquiry">Confirm Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
