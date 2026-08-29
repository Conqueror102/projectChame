<section class="relative isolate overflow-hidden bg-white py-20 sm:py-24 lg:py-28" aria-labelledby="mission-vision-heading">
    <x-marketing.container>
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-bold tracking-[0.1em] text-cham-secondary uppercase">The direction we hold</p>
            <h2 id="mission-vision-heading" class="font-hero mt-4 text-4xl leading-[1.06] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                One mission for today. <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">One vision for every child.</span>
            </h2>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-12 lg:items-stretch">
            <article class="relative overflow-hidden rounded-[2rem] bg-cham-pink-100 p-7 text-cham-ink sm:p-10 lg:col-span-7 lg:min-h-[32rem]">
                <span class="font-hero absolute top-3 right-7 text-[8rem] leading-none font-semibold text-cham-primary/10" aria-hidden="true">M</span>
                <div class="relative flex h-full flex-col">
                    <span class="grid size-12 place-items-center rounded-full bg-cham-primary text-white" aria-hidden="true">
                        <svg class="size-6" viewBox="0 0 24 24" fill="none"><path d="M12 20c-3.4-3.1-8-6.4-8-11.2A4.8 4.8 0 0 1 12 5a4.8 4.8 0 0 1 8 3.8C20 13.6 15.4 16.9 12 20Z" fill="currentColor"/></svg>
                    </span>
                    <p class="mt-8 text-xs font-extrabold tracking-[0.12em] text-cham-primary uppercase">Our mission</p>
                    <h3 class="font-hero mt-4 max-w-2xl text-3xl leading-tight font-semibold sm:text-4xl">
                        Improve outcomes for children battling cancer through structured support, awareness, and access to care.
                    </h3>
                    <p class="mt-auto max-w-xl pt-12 text-base leading-7 text-cham-stone">
                        The work is immediate: help families understand the next step, reduce practical barriers, and connect children to the support around treatment.
                    </p>
                </div>
            </article>

            <article class="relative isolate overflow-hidden rounded-[2rem] bg-cham-blue-950 text-white lg:col-span-5 lg:min-h-[32rem]">
                <img
                    class="absolute inset-0 h-full w-full object-cover opacity-32"
                    src="{{ Vite::asset('resources/images/marketing/project-cham-impact-care-access.png') }}"
                    alt=""
                    width="1456"
                    height="1092"
                    loading="lazy"
                    aria-hidden="true"
                >
                <div class="absolute inset-0 bg-linear-to-t from-cham-blue-950 via-cham-blue-950/78 to-cham-blue-950/35" aria-hidden="true"></div>

                <div class="relative flex h-full min-h-[32rem] flex-col p-7 sm:p-10">
                    <span class="grid size-12 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-6" viewBox="0 0 24 24" fill="none"><path d="M4 12c2.3-4 5-6 8-6s5.7 2 8 6c-2.3 4-5 6-8 6s-5.7-2-8-6Z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="2.6" fill="currentColor"/></svg>
                    </span>
                    <p class="mt-8 text-xs font-extrabold tracking-[0.12em] text-cham-blue-200 uppercase">Our vision</p>
                    <h3 class="font-hero mt-4 text-3xl leading-tight font-semibold sm:text-4xl">
                        A system where every child can reach the care and resources needed to survive and live fully.
                    </h3>
                    <p class="mt-auto pt-10 text-sm leading-7 text-white/65">
                        Not support by chance. A dependable pathway built around every child.
                    </p>
                </div>
            </article>
        </div>
    </x-marketing.container>
</section>
