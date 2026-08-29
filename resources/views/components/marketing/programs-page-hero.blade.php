<section class="relative isolate overflow-hidden bg-cham-blue-950 text-white" aria-labelledby="programs-page-hero-heading">
    <img
        class="absolute inset-0 h-full w-full object-cover object-center"
        src="{{ Vite::asset('resources/images/marketing/project-cham-programs-hero.png') }}"
        alt="A Nigerian mother and child discussing a care plan with a support worker"
        width="1792"
        height="896"
    >
    <div class="absolute inset-0 bg-linear-to-r from-cham-blue-950 via-cham-blue-950/88 to-cham-blue-950/5" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-linear-to-t from-cham-blue-950/65 via-transparent to-cham-ink/12" aria-hidden="true"></div>

    <x-marketing.container class="relative flex min-h-[42rem] items-center py-20 sm:min-h-[46rem] sm:py-24 lg:min-h-[48rem]">
        <div class="max-w-2xl">
            <nav class="flex items-center gap-2 text-xs font-bold tracking-[0.08em] text-white/55" aria-label="Breadcrumb">
                <a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('home') }}">Home</a>
                <span class="text-cham-primary" aria-hidden="true">/</span>
                <span class="text-white/80">Programs &amp; initiatives</span>
            </nav>

            <p class="mt-10 inline-flex items-center gap-3 text-sm font-bold tracking-[0.1em] text-cham-pink-200 uppercase">
                <span class="h-px w-12 bg-cham-primary" aria-hidden="true"></span>
                Support designed to continue
            </p>

            <h1 id="programs-page-hero-heading" class="font-hero mt-5 text-[2.8rem] leading-[1.02] font-semibold tracking-[-0.045em] sm:text-6xl lg:text-[4.75rem]">
                Four programs. One <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">clearer path through care.</span>
            </h1>

            <p class="mt-6 max-w-xl text-base leading-7 text-white/72 sm:text-lg sm:leading-8">
                Project Cham connects practical child support, informed communities, stronger families, and healthcare partnerships around every child battling cancer.
            </p>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <x-marketing.button-link href="#program-framework">
                    Explore the programs
                </x-marketing.button-link>
                <x-marketing.button-link :href="route('home').'#get-involved'" variant="outline">
                    Help extend the work
                </x-marketing.button-link>
            </div>
        </div>
    </x-marketing.container>
</section>
