<section id="programs" class="relative isolate overflow-hidden bg-[#eee4cf] py-18 sm:py-22 lg:py-26" aria-labelledby="programs-heading">
    <img
        class="pointer-events-none absolute inset-0 z-0 h-full w-full object-cover opacity-75 mix-blend-multiply"
        src="{{ Vite::asset('resources/images/marketing/project-cham-programs-paper-texture.png') }}"
        alt=""
        width="1536"
        height="1024"
        loading="lazy"
        aria-hidden="true"
    >

    <div class="pointer-events-none absolute inset-0 z-0 bg-white/20" aria-hidden="true"></div>

    <x-marketing.container class="relative z-10">
        <div class="mx-auto max-w-3xl text-center">
            <p class="inline-flex items-center gap-2 rounded-full border border-cham-ink/8 bg-white/80 px-3 py-2 text-sm font-bold tracking-[0.08em] text-cham-ink shadow-sm backdrop-blur-sm">
                <span class="grid size-7 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M4 10h12M10 4v12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                What we do
            </p>

            <h2 id="programs-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.75rem] lg:text-[2.75rem]">
                Three ways we turn support into <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold-dark">real impact.</span>
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-cham-stone">
                Our programs connect awareness, family support, and access to care—so every effort moves a child toward better outcomes.
            </p>

            <x-marketing.button-link class="mt-5" :href="route('programs')" variant="secondary">
                Explore all programs
            </x-marketing.button-link>
        </div>

        <div class="mt-9 grid gap-6 md:grid-cols-3 lg:mt-12 lg:gap-7">
            <x-marketing.program-card
                title="Awareness & Advocacy"
                description="Driving awareness to promote early detection and informed action."
                image="resources/images/marketing/project-cham-about-support.png"
                alt="Black children learning together during a guided awareness activity"
                image-position="center"
            >
                <x-slot:icon>
                    <svg class="size-6" viewBox="0 0 24 24" fill="none">
                        <path d="M4 13.5v-3l12-5v13l-12-5Zm3 1.2v3.8c0 .8.7 1.5 1.5 1.5h1.8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </x-slot:icon>
            </x-marketing.program-card>

            <x-marketing.program-card
                title="Child & Family Support"
                description="Providing structured emotional, financial, and community-based support."
                image="resources/images/marketing/project-cham-about-portrait.png"
                alt="Two Black children taking part in a supportive art activity"
                image-position="52% center"
            >
                <x-slot:icon>
                    <svg class="size-6" viewBox="0 0 24 24" fill="none">
                        <path d="M12 20c-3.4-3.1-8-6.4-8-11.2A4.8 4.8 0 0 1 12 5a4.8 4.8 0 0 1 8 3.8C20 13.6 15.4 16.9 12 20Z" fill="currentColor"/>
                    </svg>
                </x-slot:icon>
            </x-marketing.program-card>

            <x-marketing.program-card
                title="Access to Care"
                description="Connecting families to treatment partners and the critical resources they need."
                image="resources/images/marketing/project-cham-about-family-support.png"
                alt="A Black mother and child meeting with a family-support navigator"
                image-position="center"
            >
                <x-slot:icon>
                    <svg class="size-6" viewBox="0 0 24 24" fill="none">
                        <path d="M9.5 4h5v5h5v5h-5v5h-5v-5h-5V9h5V4Z" fill="currentColor"/>
                    </svg>
                </x-slot:icon>
            </x-marketing.program-card>
        </div>
    </x-marketing.container>
</section>
