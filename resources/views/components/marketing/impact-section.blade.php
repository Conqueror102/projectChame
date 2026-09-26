<section id="impact" class="relative overflow-hidden bg-[#f7faf7] py-20 sm:py-24" aria-labelledby="impact-heading">
    <x-marketing.container>
        <div class="grid items-end gap-7 lg:grid-cols-[1fr_auto]">
            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-forest">
                    <span class="grid size-8 place-items-center rounded-full bg-cham-pink-50 text-cham-primary" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Accountability You Can See
                </p>

                <h2 id="impact-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.75rem]">
                    Project CHAM <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">in Numbers.</span>
                </h2>

                <p class="mt-4 max-w-2xl text-base leading-7 text-cham-stone">
                    Progress in paediatric cancer isn't vague words—it is measured in children reached, families supported through treatment, and communities equipped with life-saving awareness.
                </p>
            </div>

            <x-marketing.button-link :href="route('donate')" variant="primary">
                Stand beside a child today
            </x-marketing.button-link>
        </div>

        <!-- Project CHAM in Numbers: Real Statistics Grid -->
        <div class="mt-12 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
            <div class="rounded-3xl border border-cham-line/70 bg-white p-5 shadow-xs transition hover:shadow-md sm:p-6">
                <span class="font-hero block text-3xl font-bold text-cham-primary sm:text-4xl">100+</span>
                <span class="mt-2 block text-sm font-bold text-cham-ink">Children Reached</span>
                <p class="mt-1 text-xs text-cham-stone">Bedside care, direct therapeutic support, and creative recovery activities.</p>
            </div>

            <div class="rounded-3xl border border-cham-line/70 bg-white p-5 shadow-xs transition hover:shadow-md sm:p-6">
                <span class="font-hero block text-3xl font-bold text-cham-secondary sm:text-4xl">70+</span>
                <span class="mt-2 block text-sm font-bold text-cham-ink">Families Supported</span>
                <p class="mt-1 text-xs text-cham-stone">Caregiver relief packages, travel coordination, and peer support circles.</p>
            </div>

            <div class="rounded-3xl border border-cham-line/70 bg-white p-5 shadow-xs transition hover:shadow-md sm:p-6">
                <span class="font-hero block text-3xl font-bold text-cham-gold sm:text-4xl">12+</span>
                <span class="mt-2 block text-sm font-bold text-cham-ink">Hospital Outreaches</span>
                <p class="mt-1 text-xs text-cham-stone">Hands-on presence on paediatric oncology wards including LUTH.</p>
            </div>

            <div class="rounded-3xl border border-cham-line/70 bg-white p-5 shadow-xs transition hover:shadow-md sm:p-6">
                <span class="font-hero block text-3xl font-bold text-cham-primary sm:text-4xl">45+</span>
                <span class="mt-2 block text-sm font-bold text-cham-ink">Care Aids Funded</span>
                <p class="mt-1 text-xs text-cham-stone">Subsidized clinical diagnostics, medications, and nutritional support.</p>
            </div>

            <div class="col-span-2 rounded-3xl border border-cham-line/70 bg-white p-5 shadow-xs transition hover:shadow-md sm:col-span-1 sm:p-6">
                <span class="font-hero block text-3xl font-bold text-cham-secondary sm:text-4xl">20+</span>
                <span class="mt-2 block text-sm font-bold text-cham-ink">Awareness Sessions</span>
                <p class="mt-1 text-xs text-cham-stone">Community education on warning signs and when to seek urgent care.</p>
            </div>
        </div>

        <!-- Accountability & Partner Anchors -->
        <div class="mt-6 flex flex-wrap items-center justify-between gap-4 rounded-2xl bg-cham-paper/90 px-6 py-4 text-xs font-bold text-cham-ink sm:text-sm">
            <span class="text-cham-stone uppercase tracking-wider text-[0.7rem]">Verification &amp; Pathways:</span>
            <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                <span class="inline-flex items-center gap-1.5 text-cham-primary">
                    <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    Hospital Partner: LUTH Paediatric Oncology
                </span>
                <a href="{{ route('home') }}#programs" class="text-cham-stone hover:text-cham-primary transition">Where We Work &rarr;</a>
                <a href="{{ route('stories.index') }}" class="text-cham-stone hover:text-cham-primary transition">Our Impact Stories &rarr;</a>
                <a href="{{ route('donate') }}#accountability" class="text-cham-stone hover:text-cham-primary transition">Governance &amp; Safeguarding &rarr;</a>
            </div>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3 lg:gap-7">
            <x-marketing.impact-story-card
                category="Awareness"
                title="Awareness that leads to earlier action"
                image="resources/images/marketing/project-cham-impact-awareness.png"
                alt="A Black childhood-health educator leading an awareness session with families"
                focus="Community education"
                :href="route('home').'#get-involved'"
                image-position="center"
            />

            <x-marketing.impact-story-card
                category="Family support"
                title="Support that strengthens the whole family"
                image="resources/images/marketing/project-cham-impact-family-support.png"
                alt="A Black mother and child sharing a supported creative activity with a volunteer"
                focus="Family stability"
                :href="route('home').'#get-involved'"
                image-position="center"
            />

            <x-marketing.impact-story-card
                category="Care access"
                title="Care connections that reduce the distance"
                image="resources/images/marketing/project-cham-impact-care-access.png"
                alt="A Black mother and child being welcomed by a patient navigator at a care centre"
                focus="Care coordination"
                :href="route('home').'#get-involved'"
                image-position="center"
            />
        </div>
    </x-marketing.container>
</section>
