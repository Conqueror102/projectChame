<section class="relative isolate overflow-hidden bg-cham-ink text-white" aria-labelledby="founder-page-hero-heading">
    <div class="pointer-events-none absolute -top-28 -left-28 size-80 rounded-full border-[3.5rem] border-cham-primary/12" aria-hidden="true"></div>

    <x-marketing.container class="relative grid gap-12 py-16 sm:py-20 lg:grid-cols-12 lg:items-center lg:gap-14 lg:py-24">
        <div class="lg:col-span-7">
            <nav class="flex items-center gap-2 text-xs font-bold tracking-[0.08em] text-white/55" aria-label="Breadcrumb">
                <a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('home') }}">Home</a>
                <span class="text-cham-primary" aria-hidden="true">/</span>
                <a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('about') }}">About</a>
                <span class="text-cham-primary" aria-hidden="true">/</span>
                <span class="text-white/80">Our founder</span>
            </nav>

            <p class="mt-10 inline-flex items-center gap-3 text-sm font-bold tracking-[0.1em] text-cham-pink-200 uppercase">
                <span class="h-px w-12 bg-cham-primary" aria-hidden="true"></span>
                Founder's story
            </p>

            <h1 id="founder-page-hero-heading" class="font-hero mt-5 max-w-3xl text-[2.6rem] leading-[1.04] font-semibold tracking-[-0.045em] sm:text-6xl">
                The Story Behind <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">Project CHAM</span>
            </h1>

            <p class="mt-6 max-w-xl text-base leading-7 text-white/70 sm:text-lg sm:leading-8">
                A journey that began with questions, grew through compassion and became a commitment to giving children a fighting chance.
            </p>

            <dl class="mt-10 grid max-w-md grid-cols-2 border-t border-white/12 pt-6">
                <div>
                    <dt class="text-[0.65rem] font-bold tracking-[0.12em] text-white/45 uppercase">Founded</dt>
                    <dd class="font-hero mt-1 text-sm font-semibold text-white sm:text-base">October 23, 2022</dd>
                </div>
                <div class="border-l border-white/12 pl-5">
                    <dt class="text-[0.65rem] font-bold tracking-[0.12em] text-white/45 uppercase">Founder</dt>
                    <dd class="font-hero mt-1 text-sm font-semibold text-white sm:text-base">Modupe Olusoga</dd>
                </div>
            </dl>
        </div>

        <figure class="relative mx-auto w-full max-w-sm lg:col-span-5 lg:max-w-none">
            <div class="overflow-hidden rounded-[2rem] bg-cham-blue-950 shadow-[0_28px_80px_rgb(0_0_0_/_0.35)]">
                <img
                    class="aspect-[761/1080] w-full object-cover object-top"
                    src="{{ Vite::asset('resources/images/marketing/project-cham-founder-modupe-olusoga.jpeg') }}"
                    alt="Portrait of Modupe Olusoga, Founder of Project CHAM"
                    width="761"
                    height="1080"
                >
            </div>
            <figcaption class="absolute -bottom-5 left-6 rounded-full bg-cham-primary px-5 py-3 text-xs font-extrabold tracking-[0.11em] text-white uppercase shadow-xl">
                Modupe Olusoga · Founder
            </figcaption>
        </figure>
    </x-marketing.container>
</section>
