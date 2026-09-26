<div class="w-full">
    @if ($submitted)
        <div class="rounded-3xl bg-white p-8 sm:p-10 border border-cham-blue-100 shadow-xl text-center space-y-4">
            <div class="mx-auto grid size-16 place-items-center rounded-full bg-cham-pink-50 text-cham-primary">
                <svg class="size-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                </svg>
            </div>

            <h3 class="font-hero text-2xl font-bold text-cham-ink sm:text-3xl">
                Thank You for Stepping Forward
            </h3>

            <p class="max-w-md mx-auto text-base text-cham-stone leading-relaxed">
                We have received your details. A Project Cham care coordinator will personally reach out to you within 24 to 48 hours to discuss how your generosity directly supports children and families.
            </p>

            <div class="pt-4">
                <button
                    type="button"
                    wire:click="resetForm"
                    class="rounded-full bg-cham-ink px-6 py-2.5 text-sm font-semibold text-white hover:bg-cham-secondary transition"
                >
                    Submit another inquiry
                </button>
            </div>
        </div>
    @else
        <form wire:submit="submit" class="rounded-3xl bg-white p-6 sm:p-10 border border-cham-line/70 shadow-xl space-y-6">
            <!-- Invisible Anti-Spam Honeypot Field -->
            <div class="hidden" aria-hidden="true">
                <label for="website">Leave this field blank</label>
                <input type="text" id="website" name="website" wire:model="website" tabindex="-1" autocomplete="off" />
            </div>

            <div class="border-b border-cham-line pb-4">
                <p class="text-xs font-bold uppercase tracking-wider text-cham-primary">Join the Circle of Care</p>
                <h3 class="font-hero text-2xl sm:text-3xl font-bold text-cham-ink mt-1">
                    How would you like to help?
                </h3>
                <p class="text-sm text-cham-stone mt-1.5">
                    Choose how you want to stand with children fighting cancer. We will reach out directly to coordinate your gift or partnership.
                </p>
            </div>

            <!-- Involvement Choice -->
            <div>
                <label class="block text-sm font-bold text-cham-ink mb-2">How Would You Like to Stand with Project CHAM?</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2.5">
                    <label class="relative flex cursor-pointer items-center rounded-2xl border p-3.5 transition {{ in_array($involvement_type, ['sponsor_treatment', 'support_child']) ? 'border-cham-primary bg-cham-pink-50/60 ring-1 ring-cham-primary' : 'border-cham-line hover:border-cham-blue-300' }}">
                        <input type="radio" wire:model.live="involvement_type" value="sponsor_treatment" class="sr-only" />
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full {{ in_array($involvement_type, ['sponsor_treatment', 'support_child']) ? 'bg-cham-primary text-white' : 'bg-cham-paper text-cham-stone' }}">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-2a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-cham-ink">Sponsor Treatment</p>
                                <p class="text-[0.7rem] text-cham-stone">Medicines &amp; chemotherapy</p>
                            </div>
                        </div>
                    </label>

                    <label class="relative flex cursor-pointer items-center rounded-2xl border p-3.5 transition {{ $involvement_type === 'support_family' ? 'border-cham-primary bg-cham-pink-50/60 ring-1 ring-cham-primary' : 'border-cham-line hover:border-cham-blue-300' }}">
                        <input type="radio" wire:model.live="involvement_type" value="support_family" class="sr-only" />
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full {{ $involvement_type === 'support_family' ? 'bg-cham-primary text-white' : 'bg-cham-paper text-cham-stone' }}">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 2a1 1 0 0 1 1 1v2.07c2.934.398 5.253 2.717 5.65 5.65H18a1 1 0 1 1 0 2h-1.35a7.002 7.002 0 0 1-5.65 5.65V19a1 1 0 1 1-2 0v-2.07A7.002 7.002 0 0 1 3.35 11.28H2a1 1 0 1 1 0-2h1.35A7.002 7.002 0 0 1 9 3.63V1a1 1 0 0 1 1-1Zm0 4a5 5 0 1 0 0 10 5 5 0 0 0 0-10Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-cham-ink">Support a Family</p>
                                <p class="text-[0.7rem] text-cham-stone">Relief packages &amp; transit</p>
                            </div>
                        </div>
                    </label>

                    <label class="relative flex cursor-pointer items-center rounded-2xl border p-3.5 transition {{ in_array($involvement_type, ['corporate_partner', 'partner']) ? 'border-cham-primary bg-cham-pink-50/60 ring-1 ring-cham-primary' : 'border-cham-line hover:border-cham-blue-300' }}">
                        <input type="radio" wire:model.live="involvement_type" value="corporate_partner" class="sr-only" />
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full {{ in_array($involvement_type, ['corporate_partner', 'partner']) ? 'bg-cham-primary text-white' : 'bg-cham-paper text-cham-stone' }}">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM14 15a4 4 0 0 0-8 0v3h8v-3zM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM16 18v-3a5.972 5.972 0 0 0-.75-2.906A3.005 3.005 0 0 1 19 15v3h-3zM4.75 12.094A5.973 5.973 0 0 0 4 15v3H1v-3a3 3 0 0 1 3.75-2.906z" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-cham-ink">Corporate Partnership</p>
                                <p class="text-[0.7rem] text-cham-stone">Institutional CSR &amp; sponsors</p>
                            </div>
                        </div>
                    </label>

                    <label class="relative flex cursor-pointer items-center rounded-2xl border p-3.5 transition {{ in_array($involvement_type, ['fund_research', 'advocate']) ? 'border-cham-primary bg-cham-pink-50/60 ring-1 ring-cham-primary' : 'border-cham-line hover:border-cham-blue-300' }}">
                        <input type="radio" wire:model.live="involvement_type" value="fund_research" class="sr-only" />
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full {{ in_array($involvement_type, ['fund_research', 'advocate']) ? 'bg-cham-primary text-white' : 'bg-cham-paper text-cham-stone' }}">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 3a1 1 0 0 0-1.447-.894L8.763 6H5a3 3 0 0 0 0 6h.28l1.771 5.316A1 1 0 0 0 8 18h1a1 1 0 0 0 1-1v-4.39l6.553 3.276A1 1 0 0 0 18 15V3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-cham-ink">Fund Research</p>
                                <p class="text-[0.7rem] text-cham-stone">Paediatric cancer data &amp; advocacy</p>
                            </div>
                        </div>
                    </label>

                    <label class="relative flex cursor-pointer items-center rounded-2xl border p-3.5 transition {{ $involvement_type === 'monthly_giving' ? 'border-cham-primary bg-cham-pink-50/60 ring-1 ring-cham-primary' : 'border-cham-line hover:border-cham-blue-300' }}">
                        <input type="radio" wire:model.live="involvement_type" value="monthly_giving" class="sr-only" />
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full {{ $involvement_type === 'monthly_giving' ? 'bg-cham-primary text-white' : 'bg-cham-paper text-cham-stone' }}">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-cham-ink">Monthly Giving</p>
                                <p class="text-[0.7rem] text-cham-stone">Sustained recurring care</p>
                            </div>
                        </div>
                    </label>

                    <label class="relative flex cursor-pointer items-center rounded-2xl border p-3.5 transition {{ in_array($involvement_type, ['general_support', 'general_donation']) ? 'border-cham-primary bg-cham-pink-50/60 ring-1 ring-cham-primary' : 'border-cham-line hover:border-cham-blue-300' }}">
                        <input type="radio" wire:model.live="involvement_type" value="general_support" class="sr-only" />
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full {{ in_array($involvement_type, ['general_support', 'general_donation']) ? 'bg-cham-primary text-white' : 'bg-cham-paper text-cham-stone' }}">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2V6h10a2 2 0 0 0-2-2H4zm2 6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-4zm6 4a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-xs font-bold text-cham-ink">General Support</p>
                                <p class="text-[0.7rem] text-cham-stone">Direct where most needed</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Contact Inputs -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-cham-ink mb-1">Your Full Name *</label>
                    <input
                        type="text"
                        wire:model="name"
                        placeholder="e.g. Dr. Ngozi Adeleke"
                        class="w-full rounded-xl border border-cham-line px-4 py-3 text-sm focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 transition outline-hidden"
                        required
                    />
                    @error('name') <p class="text-xs text-cham-primary mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-cham-ink mb-1">Email Address *</label>
                    <input
                        type="email"
                        wire:model="email"
                        placeholder="name@example.com"
                        class="w-full rounded-xl border border-cham-line px-4 py-3 text-sm focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 transition outline-hidden"
                        required
                    />
                    @error('email') <p class="text-xs text-cham-primary mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-bold text-cham-ink mb-1">Phone Number (Optional)</label>
                    <input
                        type="tel"
                        wire:model="phone"
                        placeholder="+234 ... or 080..."
                        class="w-full rounded-xl border border-cham-line px-4 py-3 text-sm focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 transition outline-hidden"
                    />
                    @error('phone') <p class="text-xs text-cham-primary mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-cham-ink mb-1">Intended Pledge / Amount</label>
                    <input
                        type="text"
                        wire:model="pledge_amount"
                        placeholder="e.g. ₦50,000 or $100"
                        class="w-full rounded-xl border border-cham-line px-4 py-3 text-sm focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 transition outline-hidden"
                    />
                    @error('pledge_amount') <p class="text-xs text-cham-primary mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-cham-ink mb-1">Frequency</label>
                    <select
                        wire:model="frequency"
                        class="w-full rounded-xl border border-cham-line px-4 py-3 text-sm focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 transition outline-hidden bg-white"
                    >
                        <option value="monthly">Monthly Support</option>
                        <option value="one_time">One-Time Gift</option>
                        <option value="annual">Annual Commitment</option>
                        <option value="other">Flexible / Undecided</option>
                    </select>
                </div>
            </div>

            <!-- Optional message -->
            <div>
                <label class="block text-sm font-bold text-cham-ink mb-1">Personal Note or Message (Optional)</label>
                <textarea
                    wire:model="message"
                    rows="3"
                    placeholder="Tell us what inspired you to reach out, or specific initiatives you wish to support..."
                    class="w-full rounded-xl border border-cham-line p-3.5 text-sm focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 transition outline-hidden"
                ></textarea>
                @error('message') <p class="text-xs text-cham-primary mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="pt-2">
                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    class="w-full rounded-full bg-cham-primary hover:bg-cham-primary-hover px-8 py-4 text-base font-bold text-white shadow-md transition hover:shadow-lg disabled:opacity-50 cursor-pointer"
                >
                    <span wire:loading.remove>Submit Pledge &amp; Have Team Reach Out</span>
                    <span wire:loading>Sending your message...</span>
                </button>
                <p class="text-center text-xs text-cham-stone mt-3">
                    Privacy guaranteed. Project Cham will only contact you regarding your designated support.
                </p>
            </div>
        </form>
    @endif
</div>
