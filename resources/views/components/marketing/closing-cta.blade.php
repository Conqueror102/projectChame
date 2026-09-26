<section class="bg-cham-blue-50 py-16 sm:py-18 lg:py-22" aria-labelledby="closing-cta-heading">
    <x-marketing.container>
        <div class="relative isolate min-h-[25rem] overflow-hidden rounded-[1.75rem] bg-cham-blue-950 text-white shadow-[0_28px_80px_rgb(10_35_68_/_0.18)]">
            <img
                class="absolute inset-0 h-full w-full object-cover object-[62%_center]"
                src="{{ Vite::asset('resources/images/marketing/project-cham-caregiver-portrait-bg.png') }}"
                alt="A Black mother holding her child close"
                width="1792"
                height="1024"
                loading="lazy"
            >

            <div class="absolute inset-0 bg-linear-to-r from-cham-blue-950 via-cham-blue-950/88 to-cham-blue-950/5 lg:via-[48%] lg:to-[72%]" aria-hidden="true"></div>
            <div class="absolute inset-0 bg-linear-to-t from-cham-blue-950/30 via-transparent to-cham-blue-950/10" aria-hidden="true"></div>

            <div class="relative flex min-h-[25rem] items-center px-6 py-12 sm:px-10 lg:px-14">
                <div class="max-w-xl">
                    <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-white/75">
                        <span class="grid size-8 place-items-center rounded-full bg-cham-primary text-white" aria-hidden="true">
                            <svg class="size-4" viewBox="0 0 20 20" fill="none">
                                <path d="M10 16.2s-6-3.6-6-8.1A3.3 3.3 0 0 1 10 6a3.3 3.3 0 0 1 6 2.1c0 4.5-6 8.1-6 8.1Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        Join the movement
                    </p>

                    <h2 id="closing-cta-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] sm:text-5xl">
                        No child should face cancer <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">alone.</span>
                    </h2>

                    <p class="mt-5 max-w-lg text-base leading-7 text-white/75">
                        Project CHAM is built on one conviction: to ensure that every child battling cancer receives the support, care, and opportunity needed to survive and thrive.
                    </p>

                    <x-marketing.button-link :href="route('donate')" class="mt-7 bg-cham-primary text-white hover:bg-cham-primary-hover">
                        Donate / Support a child
                    </x-marketing.button-link>
                </div>
            </div>
        </div>
    </x-marketing.container>
</section>
