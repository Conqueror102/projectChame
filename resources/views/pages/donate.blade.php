<x-marketing.layout
    title="Donate & Support a Child — Project CHAM"
    description="Stand with children battling cancer and their families in Nigeria. Donate directly, sponsor essential treatments, or make a sustained pledge."
>
    <section class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute -top-24 -left-24 size-72 rounded-full border-[3rem] border-cham-pink-100/60" aria-hidden="true"></div>
        <div class="pointer-events-none absolute top-1/2 -right-16 size-80 rounded-full bg-cham-blue-100/40" aria-hidden="true"></div>

        <x-marketing.container class="relative max-w-[1100px]">
            <div class="mx-auto max-w-2xl text-center mb-12 sm:mb-16">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-stone">
                    <span class="grid size-8 place-items-center rounded-full bg-cham-pink-50 text-cham-primary" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Care · Hope · Impact
                </p>

                <h1 class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[3rem]">
                    Donate &amp; Stand Beside a Child. <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">Give Hope Today.</span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-cham-stone">
                    Every gift directly funds essential chemotherapy, diagnostic biopsies, caregiver emergency packages, and clinical support on hospital wards.
                </p>
            </div>

            <!-- Two Ways to Give: Instant Transfer/Card OR Custom Pledge -->
            <div class="grid gap-8 lg:grid-cols-12 mb-16">
                <!-- Column 1: Immediate Direct Giving (Bank & Online) -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="rounded-3xl border border-cham-primary/20 bg-linear-to-b from-white to-cham-pink-50/40 p-6 sm:p-8 shadow-sm">
                        <div class="flex items-center gap-3 border-b border-cham-line/60 pb-4">
                            <span class="grid size-10 place-items-center rounded-2xl bg-cham-primary text-white shadow-xs">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect width="20" height="14" x="2" y="5" rx="2" />
                                    <line x1="2" x2="22" y1="10" y2="10" />
                                </svg>
                            </span>
                            <div>
                                <h3 class="font-hero text-lg font-bold text-cham-ink">Direct Bank Transfer</h3>
                                <p class="text-xs text-cham-stone">Fulfill your gift immediately via mobile app or transfer</p>
                            </div>
                        </div>

                        <div class="mt-6 space-y-4 text-sm" x-data="{ copied: false }">
                            <div class="rounded-2xl border border-cham-line bg-white p-4">
                                <span class="block text-xs font-semibold text-cham-stone uppercase tracking-wider">Account Name</span>
                                <span class="font-hero mt-0.5 block text-base font-bold text-cham-ink">PROJECT CHAM FOUNDATION</span>
                            </div>

                            <div class="rounded-2xl border border-cham-line bg-white p-4">
                                <span class="block text-xs font-semibold text-cham-stone uppercase tracking-wider">Bank Name</span>
                                <span class="font-hero mt-0.5 block text-base font-bold text-cham-ink">Guaranty Trust Bank (GTBank)</span>
                            </div>

                            <div class="rounded-2xl border border-cham-primary/30 bg-cham-pink-50/50 p-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span class="block text-xs font-semibold text-cham-stone uppercase tracking-wider">Account Number (NGN)</span>
                                        <span class="font-hero mt-0.5 block text-xl font-bold tracking-wider text-cham-primary" id="bank-acc-no">0123456789</span>
                                    </div>
                                    <button
                                        type="button"
                                        @click="navigator.clipboard.writeText('0123456789'); copied = true; setTimeout(() => copied = false, 2500)"
                                        class="rounded-full bg-cham-ink px-3.5 py-1.5 text-xs font-bold text-white transition hover:bg-cham-primary cursor-pointer"
                                    >
                                        <span x-show="!copied">Copy</span>
                                        <span x-show="copied" x-cloak class="text-cham-gold">Copied!</span>
                                    </button>
                                </div>
                            </div>

                            <p class="text-[0.75rem] text-cham-stone text-center leading-relaxed">
                                Please use narration: <strong class="text-cham-ink">"Child Support"</strong> or your name so our finance team can verify and send your receipt.
                            </p>
                        </div>

                        <!-- Card Payment Option -->
                        <div class="mt-6 border-t border-cham-line/60 pt-5 text-center">
                            <a
                                href="#pledge-form"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-cham-secondary px-6 py-3.5 text-sm font-bold text-white shadow-xs transition hover:bg-cham-secondary-hover hover:shadow-md cursor-pointer"
                            >
                                <svg class="size-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                </svg>
                                <span>Donate via Debit/Credit Card &rarr;</span>
                            </a>
                            <p class="mt-2 text-[0.7rem] text-cham-stone">Secured payment channel for local and international donors.</p>
                        </div>
                    </div>

                    <!-- Hospital Collaboration Callout -->
                    <div class="rounded-3xl border border-cham-blue-200 bg-cham-blue-50/60 p-5 text-sm">
                        <div class="flex items-center gap-3">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full bg-cham-secondary text-white">
                                <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-bold text-cham-ink">Direct Hospital Partnership</p>
                                <p class="text-xs text-cham-stone">Directly supporting patients at LUTH Paediatric Oncology services.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Specific Pledge / Coordination Form -->
                <div class="lg:col-span-7" id="pledge-form">
                    <livewire:public.donor-inquiry-form />
                </div>
            </div>

            <!-- Governance & Accountability Section: Accountability You Can See -->
            <div id="accountability" class="mt-20 border-t border-cham-line/80 pt-16">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <p class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-cham-primary">
                        Governance &amp; Trust
                    </p>
                    <h2 class="font-hero mt-2 text-3xl font-bold text-cham-ink">
                        Accountability You Can See
                    </h2>
                    <p class="mt-2 text-sm text-cham-stone">
                        Because we serve vulnerable children and handle delicate health journeys, governance, transparency, and child safeguarding are foundational to everything we do.
                    </p>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-3xl border border-cham-line bg-white p-6 shadow-xs">
                        <div class="grid size-10 place-items-center rounded-2xl bg-cham-pink-50 text-cham-primary mb-4">
                            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h3 class="font-hero text-base font-bold text-cham-ink">Child Safeguarding</h3>
                        <p class="mt-2 text-xs text-cham-stone leading-relaxed">
                            Strict protection protocols govern all volunteer bedside visits, photography consent, and community interactions.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-cham-line bg-white p-6 shadow-xs">
                        <div class="grid size-10 place-items-center rounded-2xl bg-cham-blue-50 text-cham-secondary mb-4">
                            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                            </svg>
                        </div>
                        <h3 class="font-hero text-base font-bold text-cham-ink">Financial Transparency</h3>
                        <p class="mt-2 text-xs text-cham-stone leading-relaxed">
                            Every donor gift is cross-referenced with hospital pharmacy bills, biopsy vouchers, and patient care records.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-cham-line bg-white p-6 shadow-xs">
                        <div class="grid size-10 place-items-center rounded-2xl bg-cham-pink-50 text-cham-gold mb-4">
                            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <h3 class="font-hero text-base font-bold text-cham-ink">Patient Health Privacy</h3>
                        <p class="mt-2 text-xs text-cham-stone leading-relaxed">
                            Medical histories and family backgrounds are treated with confidential care, respecting dignity and privacy.
                        </p>
                    </div>

                    <div class="rounded-3xl border border-cham-line bg-white p-6 shadow-xs">
                        <div class="grid size-10 place-items-center rounded-2xl bg-cham-blue-50 text-cham-secondary mb-4">
                            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                        </div>
                        <h3 class="font-hero text-base font-bold text-cham-ink">Legal Registration</h3>
                        <p class="mt-2 text-xs text-cham-stone leading-relaxed">
                            Project CHAM operates with established non-profit governance, accountability audits, and clinical liaisons.
                        </p>
                    </div>
                </div>
            </div>
        </x-marketing.container>
    </section>
</x-marketing.layout>
