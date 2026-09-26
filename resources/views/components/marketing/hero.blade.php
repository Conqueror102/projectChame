<section class="marketing-paper relative isolate overflow-hidden" aria-labelledby="hero-heading">
    <div class="relative h-[21rem] overflow-hidden sm:h-[27rem] lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-[84%] xl:w-[82%]">
        <img
            class="h-full w-full object-cover object-[35%_center] sm:object-center"
            src="{{ Vite::asset('resources/images/marketing/project-cham-family-hero.png') }}"
            alt="A Black mother holding two children close"
            width="1672"
            height="941"
        >
        <div class="absolute inset-x-0 bottom-0 h-20 bg-linear-to-t from-cham-paper to-transparent lg:hidden" aria-hidden="true"></div>
    </div>

    <x-marketing.container class="relative z-10 grid lg:min-h-[clamp(31rem,calc(100svh-11rem),35rem)] lg:grid-cols-12 lg:items-center">
        <div class="-mt-5 pt-4 pb-18 sm:-mt-8 sm:pt-6 sm:pb-20 lg:col-span-6 lg:col-start-7 lg:mt-0 lg:py-16 lg:pl-12 xl:pl-20">
            <div class="mb-5 flex items-center gap-3 text-[0.68rem] font-extrabold tracking-[0.16em] text-cham-ink/70 uppercase sm:text-xs">
                <span class="h-px w-10 bg-cham-gold sm:w-16" aria-hidden="true"></span>
                Care · Hope · Impact
                <span class="hidden h-px w-10 bg-cham-gold sm:block sm:w-16" aria-hidden="true"></span>
            </div>

            <h1 id="hero-heading" class="font-hero text-balance text-[2.6rem] leading-[1.06] font-semibold tracking-[-0.035em] text-cham-ink sm:text-5xl lg:text-[clamp(2.8rem,4vw,3.5rem)]">
                No Child Should <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold">Face Cancer Alone.</span>
            </h1>

            <p class="mt-5 max-w-2xl text-base leading-7 text-cham-stone sm:text-lg sm:leading-7">
                Project CHAM supports children living with cancer and the families standing beside them through awareness, access to care, practical support, and advocacy.
            </p>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <x-marketing.button-link :href="route('donate')">
                    Support a child
                </x-marketing.button-link>

                <x-marketing.button-link :href="route('donate').'#partner'" variant="secondary">
                    Partner with us
                </x-marketing.button-link>
            </div>

            <x-marketing.support-hands class="absolute right-1 -bottom-2 hidden w-44 opacity-90 xl:block" />
        </div>
    </x-marketing.container>

    <div class="relative z-20 border-t border-white/15 bg-cham-ink text-white">
        <x-marketing.container class="grid grid-cols-2 divide-y divide-white/10 sm:grid-cols-3 sm:divide-y-0 sm:divide-x lg:grid-cols-5">
            <div class="flex items-center gap-3.5 px-3 py-5 sm:px-4 lg:py-6">
                <span class="font-hero text-2xl font-bold text-cham-primary sm:text-3xl">100+</span>
                <span class="text-xs font-bold leading-tight tracking-[0.06em] text-white/75 uppercase">
                    Children<br class="hidden sm:inline"> Reached
                </span>
            </div>

            <div class="flex items-center gap-3.5 px-3 py-5 sm:px-4 lg:py-6">
                <span class="font-hero text-2xl font-bold text-cham-gold sm:text-3xl">70+</span>
                <span class="text-xs font-bold leading-tight tracking-[0.06em] text-white/75 uppercase">
                    Families<br class="hidden sm:inline"> Supported
                </span>
            </div>

            <div class="flex items-center gap-3.5 px-3 py-5 sm:px-4 lg:py-6">
                <span class="grid size-8 shrink-0 place-items-center rounded-full bg-white/10 text-cham-secondary">
                    <svg class="size-4.5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 0 1 1 1v2.07c2.934.398 5.253 2.717 5.65 5.65H18a1 1 0 1 1 0 2h-1.35a7.002 7.002 0 0 1-5.65 5.65V19a1 1 0 1 1-2 0v-2.07A7.002 7.002 0 0 1 3.35 11.28H2a1 1 0 1 1 0-2h1.35A7.002 7.002 0 0 1 9 3.63V1a1 1 0 0 1 1-1Zm0 4a5 5 0 1 0 0 10 5 5 0 0 0 0-10Z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="text-xs font-bold leading-tight tracking-[0.06em] text-white/75 uppercase">
                    Hospital<br class="hidden sm:inline"> Outreaches
                </span>
            </div>

            <div class="flex items-center gap-3.5 px-3 py-5 sm:px-4 lg:py-6">
                <span class="grid size-8 shrink-0 place-items-center rounded-full bg-white/10 text-cham-primary">
                    <svg class="size-4.5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="text-xs font-bold leading-tight tracking-[0.06em] text-white/75 uppercase">
                    Awareness &amp;<br class="hidden sm:inline"> Education
                </span>
            </div>

            <div class="col-span-2 flex items-center gap-3.5 px-3 py-5 sm:col-span-1 sm:px-4 lg:py-6">
                <span class="grid size-8 shrink-0 place-items-center rounded-full bg-white/10 text-cham-gold">
                    <svg class="size-4.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </span>
                <span class="text-xs font-bold leading-tight tracking-[0.06em] text-white/75 uppercase">
                    Partner With<br class="hidden sm:inline"> LUTH Oncology
                </span>
            </div>
        </x-marketing.container>
    </div>
</section>
