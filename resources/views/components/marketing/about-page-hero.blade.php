<section class="relative isolate overflow-hidden bg-cham-ink text-white" aria-labelledby="about-page-hero-heading">
    <div class="pointer-events-none absolute -top-28 -left-28 size-80 rounded-full border-[3.5rem] border-cham-primary/12" aria-hidden="true"></div>
    <div class="pointer-events-none absolute top-24 right-[47%] size-2 rounded-full bg-cham-primary" aria-hidden="true"></div>

    <x-marketing.container class="relative grid gap-12 py-16 sm:py-20 lg:min-h-[46rem] lg:grid-cols-12 lg:items-center lg:gap-14 lg:py-24">
        <div class="lg:col-span-6">
            <nav class="flex items-center gap-2 text-xs font-bold tracking-[0.08em] text-white/55" aria-label="Breadcrumb">
                <a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('home') }}">Home</a>
                <span class="text-cham-primary" aria-hidden="true">/</span>
                <span class="text-white/80">Why we exist</span>
            </nav>

            <p class="mt-10 inline-flex items-center gap-3 text-sm font-bold tracking-[0.1em] text-cham-pink-200 uppercase">
                <span class="h-px w-12 bg-cham-primary" aria-hidden="true"></span>
                Care · Hope · Impact
            </p>

            <h1 id="about-page-hero-heading" class="font-hero mt-5 max-w-3xl text-[2.8rem] leading-[1.02] font-semibold tracking-[-0.045em] sm:text-6xl lg:text-[4.5rem]">
                No child should face cancer without a <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">clear path to support.</span>
            </h1>

            <p class="mt-6 max-w-xl text-base leading-7 text-white/70 sm:text-lg sm:leading-8">
                Project CHAM supports children living with cancer and the families standing beside them through awareness, access to care, practical support, and advocacy.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <x-marketing.button-link href="#about-story-heading">
                    Read our story
                </x-marketing.button-link>

                <x-marketing.button-link :href="route('donate')" variant="light">
                    Stand with a child
                </x-marketing.button-link>
            </div>

            <dl class="mt-12 grid grid-cols-3 border-t border-white/12 pt-6">
                <div>
                    <dt class="text-[0.65rem] font-bold tracking-[0.12em] text-white/45 uppercase">Care</dt>
                    <dd class="font-hero mt-1 text-sm font-semibold text-white sm:text-base">Child-first</dd>
                </div>
                <div class="border-l border-white/12 pl-5">
                    <dt class="text-[0.65rem] font-bold tracking-[0.12em] text-white/45 uppercase">Hope</dt>
                    <dd class="font-hero mt-1 text-sm font-semibold text-white sm:text-base">Unwavering</dd>
                </div>
                <div class="border-l border-white/12 pl-5">
                    <dt class="text-[0.65rem] font-bold tracking-[0.12em] text-white/45 uppercase">Impact</dt>
                    <dd class="font-hero mt-1 text-sm font-semibold text-white sm:text-base">Measurable</dd>
                </div>
            </dl>
        </div>

        <div class="relative lg:col-span-6">
            <div class="relative min-h-[31rem] overflow-hidden rounded-[2rem] bg-cham-blue-950 sm:min-h-[39rem]">
                <img
                    class="absolute inset-0 h-full w-full object-cover object-center"
                    src="{{ Vite::asset('resources/images/marketing/project-cham-about-support.png') }}"
                    alt="Black children learning together with a caring adult"
                    width="1456"
                    height="1092"
                >
                <div class="absolute inset-0 bg-linear-to-t from-cham-blue-950/90 via-transparent to-cham-blue-950/10" aria-hidden="true"></div>
                <div class="absolute inset-0 ring-1 ring-inset ring-white/15" aria-hidden="true"></div>

                <p class="font-hero absolute right-5 bottom-5 left-5 max-w-md text-2xl leading-tight font-semibold sm:right-8 sm:bottom-8 sm:left-8 sm:text-3xl">
                    Care is not a moment. It is a system that stays with the child.
                </p>
            </div>

            <div class="absolute -top-5 -right-3 grid size-24 rotate-6 place-items-center rounded-[1.5rem] bg-cham-primary text-center text-xs font-extrabold tracking-[0.1em] text-white uppercase shadow-2xl sm:-right-5 sm:size-28">
                Care<br>that<br>continues
            </div>

            <div class="absolute -bottom-5 -left-4 rounded-full border-4 border-cham-ink bg-cham-blue-100 px-5 py-3 text-sm font-extrabold text-cham-secondary shadow-xl sm:-left-7">
                Awareness → Action → Care
            </div>
        </div>
    </x-marketing.container>
</section>
