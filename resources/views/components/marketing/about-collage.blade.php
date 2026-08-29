<div {{ $attributes->class(['relative mx-auto w-full max-w-[35rem]']) }}>
    <div class="grid grid-cols-[0.96fr_1.04fr] gap-3 sm:gap-4">
        <figure class="row-span-2 overflow-hidden rounded-[1.75rem] bg-cham-paper shadow-[0_22px_55px_rgb(13_28_21_/_0.12)]">
            <img
                class="h-full min-h-[24rem] w-full object-cover object-[52%_center] sm:min-h-[29rem] lg:min-h-[30rem]"
                src="{{ Vite::asset('resources/images/marketing/project-cham-about-portrait.png') }}"
                alt="Two Black children sharing an art activity with a family-support volunteer"
                width="1092"
                height="1456"
                loading="lazy"
            >
        </figure>

        <figure class="overflow-hidden rounded-[1.5rem] bg-cham-ink shadow-[0_18px_45px_rgb(13_28_21_/_0.1)]">
            <img
                class="h-[11.5rem] w-full object-cover object-center grayscale sm:h-[14rem] lg:h-[14.5rem]"
                src="{{ Vite::asset('resources/images/marketing/project-cham-about-support.png') }}"
                alt="A support worker guiding Black children through a structured activity"
                width="1456"
                height="1092"
                loading="lazy"
            >
        </figure>

        <figure class="overflow-hidden rounded-[1.5rem] bg-cham-paper shadow-[0_18px_45px_rgb(13_28_21_/_0.1)]">
            <img
                class="h-[11.5rem] w-full object-cover object-center sm:h-[14rem] lg:h-[14.5rem]"
                src="{{ Vite::asset('resources/images/marketing/project-cham-about-family-support.png') }}"
                alt="A Black mother and child meeting with a family-support navigator"
                width="1456"
                height="1092"
                loading="lazy"
            >
        </figure>
    </div>

    <div class="absolute -right-3 -bottom-4 rounded-2xl bg-cham-gold px-4 py-3 text-cham-ink shadow-lg sm:-right-5 sm:px-5">
        <span class="font-hero block text-2xl font-semibold">Child first.</span>
        <span class="block text-xs font-bold tracking-wide text-cham-ink/70">Support that stays.</span>
    </div>
</div>
