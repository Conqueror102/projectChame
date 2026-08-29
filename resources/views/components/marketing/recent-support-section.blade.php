<section id="recent-support" class="relative isolate overflow-hidden bg-cham-ink py-14 text-white sm:py-16 lg:flex lg:h-[calc(100svh-9rem)] lg:min-h-[34rem] lg:max-h-[40rem] lg:items-center lg:py-7" aria-labelledby="recent-support-heading">
    <div class="pointer-events-none absolute inset-0 opacity-30" aria-hidden="true" style="background-image: radial-gradient(circle at 8% 15%, color-mix(in srgb, var(--color-cham-primary) 12%, transparent), transparent 24rem), radial-gradient(circle at 92% 88%, color-mix(in srgb, var(--color-cham-secondary) 16%, transparent), transparent 28rem);"></div>
    <div class="pointer-events-none absolute top-[18%] left-[9%] size-2 rounded-full bg-cham-gold" aria-hidden="true"></div>
    <div class="pointer-events-none absolute right-[11%] bottom-[15%] size-3 rounded-full border-2 border-cham-secondary" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="mx-auto max-w-2xl text-center">
            <p class="inline-flex items-center gap-2 text-xs font-bold tracking-[0.08em] text-white/75">
                <span class="grid size-8 place-items-center rounded-full bg-cham-gold text-cham-ink" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                    </svg>
                </span>
                Community giving
            </p>

            <h2 id="recent-support-heading" class="font-hero mt-3 text-3xl leading-[1.08] font-semibold tracking-[-0.035em] sm:text-[2.25rem]">
                Recent support. <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold">Shared purpose.</span>
            </h2>

            <p class="mx-auto mt-3 max-w-xl text-sm leading-6 text-white/65">
                A snapshot of community contributions strengthening child support, family stability, and access to care.
            </p>
        </div>

        <div
            id="recent-support-rail"
            data-support-rail
            class="mt-7 flex snap-x snap-mandatory gap-4 overflow-x-auto pb-3 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:mt-8 lg:gap-5"
            tabindex="0"
            aria-label="Recent community support for Project Cham"
        >
            <x-marketing.recent-support-card initials="PS" supporter="Private supporter" focus="Child care" type="One-time gift" timing="Recently" />
            <x-marketing.recent-support-card initials="CC" supporter="Community circle" focus="Families" type="Monthly gift" timing="This month" />
            <x-marketing.recent-support-card initials="HP" supporter="Healthcare partner" focus="Care access" type="Partner gift" timing="Recently" />
            <x-marketing.recent-support-card initials="AF" supporter="Advocacy friend" focus="Awareness" type="Campaign gift" timing="This month" />
            <x-marketing.recent-support-card initials="TS" supporter="Transport sponsor" focus="Access" type="Practical support" timing="Recently" />
            <x-marketing.recent-support-card initials="OA" supporter="Outreach ally" focus="Community" type="Outreach gift" timing="This month" />
        </div>

        <div class="mt-2 flex items-center justify-center gap-3" aria-label="Recent support card navigation">
            <button
                type="button"
                data-scroll-rail="recent-support-rail"
                data-scroll-direction="previous"
                class="marketing-focus-ring grid size-10 place-items-center rounded-full bg-cham-gold text-cham-ink transition hover:-translate-y-0.5 hover:bg-cham-gold-dark"
                aria-label="View previous recent support"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M16 10H5m4.5-4.5L5 10l4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <button
                type="button"
                data-scroll-rail="recent-support-rail"
                data-scroll-direction="next"
                class="marketing-focus-ring grid size-10 place-items-center rounded-full bg-white text-cham-secondary transition hover:-translate-y-0.5 hover:bg-cham-blue-50"
                aria-label="View next recent support"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </x-marketing.container>
</section>
