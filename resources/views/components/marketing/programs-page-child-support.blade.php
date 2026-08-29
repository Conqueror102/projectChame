<section id="child-support" class="relative isolate overflow-hidden bg-white py-20 sm:py-24 lg:py-28" aria-labelledby="child-support-heading">
    <x-marketing.container class="grid items-center gap-14 lg:grid-cols-12 lg:gap-20">
        <div class="relative lg:col-span-7">
            <div class="overflow-hidden rounded-[2.25rem] bg-cham-blue-100 shadow-[0_28px_80px_rgb(10_35_68_/_0.16)]">
                <img
                    class="h-[32rem] w-full object-cover object-center sm:h-[40rem]"
                    src="{{ Vite::asset('resources/images/marketing/project-cham-impact-family-support.png') }}"
                    alt="A Nigerian child receiving attentive support during a creative care activity"
                    width="1456"
                    height="1092"
                    loading="lazy"
                >
            </div>
            <div class="absolute -right-3 -bottom-7 max-w-xs rounded-[1.5rem] bg-cham-primary p-5 text-white shadow-2xl sm:right-8 sm:p-6">
                <p class="text-xs font-extrabold tracking-[0.1em] text-white/70 uppercase">The aim</p>
                <p class="font-hero mt-2 text-xl leading-snug font-semibold">Help the child experience care—not only treatment.</p>
            </div>
        </div>

        <div class="lg:col-span-5">
            <p class="font-hero text-sm font-semibold tracking-[0.12em] text-cham-secondary uppercase">Program 01</p>
            <h2 id="child-support-heading" class="font-hero mt-4 text-4xl leading-[1.04] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                Child Support <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">Program</span>
            </h2>
            <p class="mt-6 text-base leading-8 text-cham-stone">
                Structured support for children undergoing cancer treatment, shaped around practical needs, continuity of care, and a less overwhelming treatment experience.
            </p>

            <div class="mt-8 border-t border-cham-line pt-7">
                <p class="text-xs font-extrabold tracking-[0.12em] text-cham-stone uppercase">Program outcomes</p>
                <ul class="mt-5 grid gap-4">
                    @foreach (['Improved treatment support', 'Reduced burden on families', 'A better care experience for the child'] as $outcome)
                        <li class="flex items-center gap-3 text-sm font-bold text-cham-ink">
                            <span class="grid size-8 shrink-0 place-items-center rounded-full bg-cham-blue-100 text-cham-secondary" aria-hidden="true">
                                <svg class="size-4" viewBox="0 0 20 20" fill="none"><path d="m5 10 3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            {{ $outcome }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </x-marketing.container>
</section>
