<section class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="about-story-heading">
    <div class="pointer-events-none absolute -right-20 bottom-12 size-56 rounded-full bg-cham-pink-100/70" aria-hidden="true"></div>

    <x-marketing.container class="relative grid items-center gap-14 lg:grid-cols-12 lg:gap-20">
        <div class="relative lg:col-span-6">
            <div class="grid grid-cols-5 grid-rows-5 gap-4">
                <div class="col-span-4 row-span-5 overflow-hidden rounded-[2rem] bg-cham-blue-100 shadow-[0_24px_70px_rgb(10_35_68_/_0.14)]">
                    <img
                        class="h-full min-h-[34rem] w-full object-cover object-center"
                        src="{{ Vite::asset('resources/images/marketing/project-cham-about-portrait.png') }}"
                        alt="A Black support worker creating a joyful learning space with two children"
                        width="1092"
                        height="1456"
                        loading="lazy"
                    >
                </div>

                <div class="col-span-2 col-start-4 row-span-2 row-start-4 overflow-hidden rounded-[1.5rem] border-[0.45rem] border-cham-paper bg-white shadow-2xl">
                    <img
                        class="h-full w-full object-cover"
                        src="{{ Vite::asset('resources/images/marketing/project-cham-impact-care-access.png') }}"
                        alt="A mother and child being welcomed into a care centre"
                        width="1456"
                        height="1092"
                        loading="lazy"
                    >
                </div>
            </div>

            <div class="absolute -top-6 left-6 rounded-full bg-cham-blue-950 px-5 py-3 text-xs font-extrabold tracking-[0.11em] text-white uppercase shadow-xl">
                The child stays at the centre
            </div>
        </div>

        <div class="lg:col-span-6">
            <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-secondary">
                <span class="grid size-8 place-items-center rounded-full bg-cham-blue-100" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                    </svg>
                </span>
                Our Story
            </p>

            <h2 id="about-story-heading" class="font-hero mt-5 text-4xl leading-[1.05] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                No child should face cancer <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">without hope.</span>
            </h2>

            <p class="mt-6 text-base leading-8 text-cham-stone">
                <strong>Project CHAM began with a simple conviction:</strong> no child should face cancer without care, support, and hope. Walking into hospital wards and meeting families in Nigeria, we witnessed the immense physical, emotional, and financial weight that paediatric cancer places on parents and children alike.
            </p>

            <p class="mt-4 text-base leading-8 text-cham-stone">
                Too often, treatment is delayed because warning signs are not recognized early, and families feel utterly isolated between clinic appointments. We founded Project CHAM to change this reality—standing directly at the bedside with practical relief, clinical access pathways, caregiver support, and community awareness.
            </p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-[1.5rem] border border-cham-pink-200 bg-white p-5 shadow-sm">
                    <p class="text-xs font-extrabold tracking-[0.1em] text-cham-primary uppercase">Our Conviction</p>
                    <p class="font-hero mt-2 text-xl font-semibold text-cham-ink">A child should never disappear inside a diagnosis.</p>
                </div>
                <div class="rounded-[1.5rem] bg-cham-blue-950 p-5 text-white shadow-sm">
                    <p class="text-xs font-extrabold tracking-[0.1em] text-cham-blue-200 uppercase">Our Commitment</p>
                    <p class="font-hero mt-2 text-xl font-semibold">Care, hope, and real impact families can lean on.</p>
                </div>
            </div>
        </div>
    </x-marketing.container>
</section>
