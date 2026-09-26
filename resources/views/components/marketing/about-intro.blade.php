<section id="about" class="relative isolate overflow-hidden bg-[#fbfbf8] py-16 sm:py-20 lg:flex lg:h-[calc(100svh-5rem)] lg:min-h-[42rem] lg:max-h-[54rem] lg:items-center lg:py-16" aria-labelledby="about-heading">
    <img
        class="pointer-events-none absolute -top-16 -right-32 z-0 w-[27rem] max-w-none rotate-180 sm:-top-20 sm:-right-28 sm:w-[32rem] lg:-top-24 lg:-right-32 lg:w-[36rem]"
        src="{{ Vite::asset('resources/images/marketing/project-cham-about-artifact.png') }}"
        alt=""
        width="612"
        height="408"
        loading="lazy"
        aria-hidden="true"
    >

    <x-marketing.container class="relative z-10 grid items-center gap-10 lg:grid-cols-[1fr_0.95fr] lg:gap-16">
        <x-marketing.about-collage />

        <div class="max-w-xl">
            <div>
                <p class="inline-flex items-center gap-2 rounded-full border border-cham-ink/8 bg-white/95 px-3 py-2 text-sm font-bold tracking-[0.08em] text-cham-ink shadow-sm">
                    <span class="grid size-7 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="none">
                            <path d="M10 16.4c-2.7-2.5-6.8-5.4-6.8-9.7A4.1 4.1 0 0 1 10 3.5a4.1 4.1 0 0 1 6.8 3.2c0 4.3-4.1 7.2-6.8 9.7Z" fill="currentColor"/>
                        </svg>
                    </span>
                    About us
                </p>
            </div>

            <h2 id="about-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.75rem] lg:text-[3rem]">
                Support that reaches the child—and strengthens the <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold">family.</span>
            </h2>

            <p class="mt-5 text-base leading-7 text-cham-stone">
                Project CHAM began with a simple conviction: <strong>no child should face cancer without care, support, and hope</strong>. We work directly on hospital wards and with caregivers across Nigeria to ensure vulnerable children and families are never left to fight alone.
            </p>

            <ul class="mt-5 grid gap-3 rounded-[1.75rem] bg-[#eef7f2]/95 p-5 backdrop-blur-[2px] sm:p-6" aria-label="Our approach">
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-3.5" viewBox="0 0 16 16" fill="none"><path d="m4 8 2.5 2.5L12 5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="font-medium text-cham-ink/80">Awareness &amp; early detection education for communities</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-3.5" viewBox="0 0 16 16" fill="none"><path d="m4 8 2.5 2.5L12 5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="font-medium text-cham-ink/80">Direct treatment subsidies, medications, and bedside aid</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-3.5" viewBox="0 0 16 16" fill="none"><path d="m4 8 2.5 2.5L12 5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="font-medium text-cham-ink/80">Caregiver support circles, travel relief, and emotional care</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="mt-0.5 grid size-6 shrink-0 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-3.5" viewBox="0 0 16 16" fill="none"><path d="m4 8 2.5 2.5L12 5" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="font-medium text-cham-ink/80">Evidence-based research and institutional advocacy</span>
                </li>
            </ul>

            <x-marketing.button-link class="mt-6" :href="route('about')" variant="secondary">
                Read our full story &rarr;
            </x-marketing.button-link>
        </div>
    </x-marketing.container>
</section>
