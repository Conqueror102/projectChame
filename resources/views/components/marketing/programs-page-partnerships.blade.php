<section id="partnerships-outreach" class="relative isolate overflow-hidden bg-cham-blue-50 py-20 sm:py-24 lg:py-28" aria-labelledby="partnerships-outreach-heading">
    <x-marketing.container>
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="font-hero text-sm font-semibold tracking-[0.12em] text-cham-secondary uppercase">Program 04</p>
                <h2 id="partnerships-outreach-heading" class="font-hero mt-4 text-4xl leading-[1.04] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                    Partnerships &amp; Outreach that <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">extend the pathway.</span>
                </h2>
            </div>
            <p class="text-base leading-8 text-cham-stone lg:col-span-5">
                We collaborate with healthcare providers, organisations, and community stakeholders to expand reach, improve resource access, and build impact that can continue.
            </p>
        </div>

        <div class="mt-12 overflow-hidden rounded-[2.25rem] bg-cham-blue-950 shadow-[0_28px_80px_rgb(10_35_68_/_0.16)] lg:grid lg:grid-cols-12">
            <div class="relative min-h-[31rem] lg:col-span-8 lg:min-h-[36rem]">
                <img
                    class="absolute inset-0 h-full w-full object-cover object-center"
                    src="{{ Vite::asset('resources/images/marketing/project-cham-get-involved-partner.png') }}"
                    alt="Nigerian healthcare and community partners planning child support together"
                    width="1456"
                    height="1092"
                    loading="lazy"
                >
                <div class="absolute inset-0 bg-linear-to-t from-cham-blue-950/55 via-transparent to-transparent" aria-hidden="true"></div>
            </div>

            <div class="flex flex-col justify-center p-7 text-white sm:p-10 lg:col-span-4 lg:p-12">
                <p class="text-xs font-extrabold tracking-[0.12em] text-cham-blue-200 uppercase">Partnership outcomes</p>
                <ol class="mt-7 grid gap-6">
                    <li class="border-b border-white/12 pb-5"><span class="font-hero text-3xl font-semibold text-cham-primary">01</span><p class="font-hero mt-2 text-xl font-semibold">Expanded reach</p></li>
                    <li class="border-b border-white/12 pb-5"><span class="font-hero text-3xl font-semibold text-cham-primary">02</span><p class="font-hero mt-2 text-xl font-semibold">Increased access to resources</p></li>
                    <li><span class="font-hero text-3xl font-semibold text-cham-primary">03</span><p class="font-hero mt-2 text-xl font-semibold">Sustainable impact</p></li>
                </ol>
                <x-marketing.button-link :href="route('home').'#partner-with-us'" class="mt-9 self-start">
                    Partner with us
                </x-marketing.button-link>
            </div>
        </div>
    </x-marketing.container>
</section>
