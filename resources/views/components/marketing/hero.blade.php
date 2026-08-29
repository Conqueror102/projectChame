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
                Structured support. Visible impact.
                <span class="hidden h-px w-10 bg-cham-gold sm:block sm:w-16" aria-hidden="true"></span>
            </div>

            <h1 id="hero-heading" class="font-hero text-balance text-[2.6rem] leading-[1.06] font-semibold tracking-[-0.035em] text-cham-ink sm:text-5xl lg:text-[clamp(2.8rem,4vw,3.5rem)]">
                Supporting Children Battling Cancer with Care, Structure, and <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold">Measurable Impact.</span>
            </h1>

            <p class="mt-5 max-w-2xl text-base leading-7 text-cham-stone sm:text-lg sm:leading-7">
                Project Cham improves outcomes for children with cancer by providing structured support, driving awareness, and enabling access to critical care.
            </p>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <x-marketing.button-link :href="route('home').'#get-involved'">
                    Support a child
                </x-marketing.button-link>

                <x-marketing.button-link :href="route('home').'#programs'" variant="secondary">
                    Explore our work
                </x-marketing.button-link>
            </div>

            <x-marketing.support-hands class="absolute right-1 -bottom-2 hidden w-44 opacity-90 xl:block" />
        </div>
    </x-marketing.container>

    <div class="relative z-20 border-t border-white/15 bg-cham-ink text-white">
        <x-marketing.container class="grid divide-y divide-white/10 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
            <a class="marketing-focus-ring group flex items-center gap-4 px-1 py-6 sm:px-5 lg:py-7" href="{{ route('home') }}#programs">
                <span class="grid size-9 shrink-0 place-items-center rounded-full bg-cham-primary text-xs font-extrabold text-white">01</span>
                <span>
                    <span class="block text-xs font-bold tracking-[0.13em] text-white/45 uppercase">What we do</span>
                    <span class="mt-1 block text-sm font-extrabold group-hover:text-cham-gold">Awareness &amp; Advocacy</span>
                </span>
            </a>

            <a class="marketing-focus-ring group flex items-center gap-4 px-1 py-6 sm:px-5 lg:py-7" href="{{ route('home') }}#programs">
                <span class="grid size-9 shrink-0 place-items-center rounded-full bg-cham-primary text-xs font-extrabold text-white">02</span>
                <span>
                    <span class="block text-xs font-bold tracking-[0.13em] text-white/45 uppercase">What we do</span>
                    <span class="mt-1 block text-sm font-extrabold group-hover:text-cham-gold">Child &amp; Family Support</span>
                </span>
            </a>

            <a class="marketing-focus-ring group flex items-center gap-4 px-1 py-6 sm:px-5 lg:py-7" href="{{ route('home') }}#programs">
                <span class="grid size-9 shrink-0 place-items-center rounded-full bg-cham-primary text-xs font-extrabold text-white">03</span>
                <span>
                    <span class="block text-xs font-bold tracking-[0.13em] text-white/45 uppercase">What we do</span>
                    <span class="mt-1 block text-sm font-extrabold group-hover:text-cham-gold">Access to Care</span>
                </span>
            </a>
        </x-marketing.container>
    </div>
</section>
