<section id="impact" class="relative overflow-hidden bg-[#f7faf7] py-20 sm:py-24 lg:flex lg:h-[100svh] lg:min-h-[47rem] lg:items-center lg:py-14" aria-labelledby="impact-heading">
    <x-marketing.container class="lg:flex lg:h-full lg:flex-col lg:justify-center">
        <div class="grid items-end gap-7 lg:grid-cols-[1fr_auto]">
            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-forest">
                    <span class="grid size-8 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="none">
                            <path d="m3 13 4-4 3 3 6-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 5h4v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    Impact in action
                </p>

                <h2 id="impact-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.75rem]">
                    Progress built around <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold-dark">better outcomes.</span>
                </h2>

                <p class="mt-4 max-w-2xl text-base leading-7 text-cham-stone">
                    We connect every activity to a practical outcome for children and families—from informed action to stronger support and clearer pathways to care.
                </p>
            </div>

            <x-marketing.button-link :href="route('home').'#get-involved'" variant="secondary">
                Help extend the impact
            </x-marketing.button-link>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-3 lg:mt-8 lg:gap-7">
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
