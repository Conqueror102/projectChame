<section class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="promise-heading">
    <x-marketing.container>
        <div class="relative isolate overflow-hidden rounded-[2.25rem] bg-cham-primary px-7 py-16 text-center text-white shadow-[0_28px_80px_rgb(235_55_97_/_0.22)] sm:px-12 sm:py-20 lg:px-20 lg:py-24">
            <div class="pointer-events-none absolute -top-20 -left-20 size-56 rounded-full border-[2.5rem] border-white/10" aria-hidden="true"></div>
            <div class="pointer-events-none absolute -right-16 -bottom-20 size-64 rounded-full bg-cham-blue-950/12" aria-hidden="true"></div>
            <span class="pointer-events-none absolute top-10 right-[12%] size-3 rounded-full bg-cham-blue-950" aria-hidden="true"></span>
            <span class="pointer-events-none absolute bottom-12 left-[15%] size-2 rounded-full bg-white" aria-hidden="true"></span>

            <div class="relative mx-auto max-w-4xl">
                <p class="text-sm font-extrabold tracking-[0.12em] text-white/72 uppercase">The promise we keep</p>
                <h2 id="promise-heading" class="font-hero mt-5 text-4xl leading-[1.04] font-semibold tracking-[-0.04em] sm:text-6xl">
                    Every child deserves the support, care, and opportunity needed to <span class="font-handwriting inline-block font-normal tracking-normal text-cham-blue-950">survive and thrive.</span>
                </h2>
                <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-white/78">
                    We go beyond awareness to help children and families receive real, structured, and consistent support.
                </p>

                <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">
                    <x-marketing.button-link :href="route('home').'#support-a-child'" class="bg-cham-blue-950 text-white hover:bg-cham-ink">
                        Support a child
                    </x-marketing.button-link>
                    <x-marketing.button-link :href="route('home').'#partner-with-us'" variant="light">
                        Partner with Project Cham
                    </x-marketing.button-link>
                </div>
            </div>
        </div>
    </x-marketing.container>
</section>
