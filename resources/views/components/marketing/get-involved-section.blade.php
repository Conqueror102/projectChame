<section id="get-involved" class="relative isolate overflow-hidden bg-[#eef7f2] py-20 sm:py-24 lg:flex lg:h-[100svh] lg:min-h-[47rem] lg:items-center lg:py-16" aria-labelledby="get-involved-heading">
    <div class="pointer-events-none absolute -top-24 -left-24 size-72 rounded-full border-[3rem] border-white/50" aria-hidden="true"></div>
    <div class="pointer-events-none absolute right-[8%] bottom-8 size-3 rounded-full bg-cham-gold" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="grid items-center gap-12 lg:grid-cols-[minmax(17rem,0.72fr)_minmax(0,1.65fr)] lg:gap-14">
            <div class="max-w-md">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-forest">
                    <span class="grid size-9 place-items-center rounded-full bg-white text-cham-secondary shadow-sm" aria-hidden="true">
                        <svg class="size-4.5" viewBox="0 0 20 20" fill="none">
                            <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                        </svg>
                    </span>
                    Get involved
                </p>

                <h2 id="get-involved-heading" class="font-hero mt-5 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.75rem]">
                    Collective effort creates <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold-dark">lasting support.</span>
                </h2>

                <p class="mt-5 text-base leading-7 text-cham-stone">
                    Making impact requires people and organisations who are ready to act. Choose the role that fits how you want to help children and families.
                </p>

                <x-marketing.button-link :href="route('home').'#partner-with-us'" class="mt-7" variant="secondary">
                    Find your way to help
                </x-marketing.button-link>
            </div>

            <div class="min-w-0">
                <div
                    id="get-involved-rail"
                    data-involvement-rail
                    class="flex snap-x snap-mandatory gap-5 overflow-x-auto pb-5 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:gap-6"
                    tabindex="0"
                    aria-label="Ways to get involved with Project Cham"
                >
                    <x-marketing.involvement-card
                        id="partner-with-us"
                        label="Partner"
                        title="Partner With Us"
                        description="Collaborate with Project Cham as an organisation, healthcare provider, or community partner to expand reach and sustainable impact."
                        detail="Best for organisations and care partners"
                        image="resources/images/marketing/project-cham-get-involved-partner.png"
                        alt="Black healthcare and community partners planning support together"
                        :href="route('home').'#partner-with-us'"
                        action="Start a partnership"
                    />

                    <x-marketing.involvement-card
                        id="support-a-child"
                        label="Support"
                        title="Support a Child"
                        description="Contribute to structured initiatives that help children undergoing treatment and reduce the practical burden on their families."
                        detail="Direct support for children and families"
                        image="resources/images/marketing/project-cham-get-involved-support-child.png"
                        alt="A Black child and mother enjoying a supported creative activity with a volunteer"
                        :href="route('home').'#support-a-child'"
                        action="Support a child"
                    />

                    <x-marketing.involvement-card
                        id="advocate"
                        label="Advocate"
                        title="Use Your Voice"
                        description="Help more people recognise childhood cancer, understand the need for early action, and connect families with credible support."
                        detail="Awareness that leads to informed action"
                        image="resources/images/marketing/project-cham-get-involved-advocate.png"
                        alt="A young Black woman leading a childhood-health awareness conversation"
                        :href="route('home').'#advocate'"
                        action="Become an advocate"
                        image-position="center 42%"
                    />
                </div>

                <div class="mt-3 flex items-center gap-3" aria-label="Get involved card navigation">
                    <button
                        type="button"
                        data-scroll-rail="get-involved-rail"
                        data-scroll-direction="previous"
                        class="marketing-focus-ring grid size-11 place-items-center rounded-full bg-cham-ink text-white transition hover:-translate-y-0.5 hover:bg-cham-forest"
                        aria-label="View previous involvement option"
                    >
                        <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M16 10H5m4.5-4.5L5 10l4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button
                        type="button"
                        data-scroll-rail="get-involved-rail"
                        data-scroll-direction="next"
                        class="marketing-focus-ring grid size-11 place-items-center rounded-full border border-cham-blue-300 bg-white text-cham-secondary transition hover:-translate-y-0.5 hover:bg-cham-blue-50"
                        aria-label="View next involvement option"
                    >
                        <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <p class="ml-2 text-xs font-bold tracking-[0.06em] text-cham-stone">
                        Drag or use the arrows
                    </p>
                </div>
            </div>
        </div>
    </x-marketing.container>
</section>
