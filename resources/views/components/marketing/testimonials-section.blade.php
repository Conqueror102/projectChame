@php
    $dbReviews = \App\Models\Review::active()->ordered()->get();
@endphp

<section id="family-voices" class="relative isolate overflow-hidden bg-cham-blue-950 text-white" aria-labelledby="family-voices-heading">
    <img
        class="absolute inset-0 h-full w-full object-cover object-[58%_center]"
        src="{{ Vite::asset('resources/images/marketing/project-cham-family-voices-bg.png') }}"
        alt="A Black mother holding her child close in a family-support setting"
        width="1792"
        height="1024"
        loading="lazy"
    >

    <div class="absolute inset-0 bg-linear-to-r from-cham-blue-950/95 via-cham-blue-950/55 to-cham-blue-950/10" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-linear-to-t from-cham-blue-950/30 via-transparent to-cham-blue-950/10" aria-hidden="true"></div>

    <x-marketing.container class="relative grid gap-8 py-10 sm:py-12 lg:grid-cols-12 lg:items-center lg:gap-6 lg:py-14">
        <div class="lg:col-span-5">
            <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-white/75">
                <span class="grid size-8 place-items-center rounded-full bg-cham-primary text-white" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M5 7.2h4v4H6.8c0 1.7-.8 2.8-2.5 3.5M11 7.2h4v4h-2.2c0 1.7-.8 2.8-2.5 3.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                Family voices
            </p>

            <h2 id="family-voices-heading" class="font-hero mt-3 text-3xl leading-[1.08] font-semibold tracking-[-0.035em] sm:text-[2.35rem]">
                Care families can <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">feel and remember.</span>
            </h2>

            <p class="mt-4 max-w-lg text-sm leading-6 text-white/75 sm:text-[0.95rem]">
                Every family’s journey is different. Consistent guidance, practical care connections, and emotional support can make the next step feel possible.
            </p>
        </div>

        <div class="lg:col-span-6 lg:col-start-7">
            <div class="overflow-hidden rounded-[1.35rem] bg-white text-cham-ink shadow-[0_22px_60px_rgb(0_0_0_/_0.26)] ring-1 ring-white/40">
                <div id="family-voices-rail" data-support-rail class="flex snap-x snap-mandatory overflow-x-auto [scrollbar-width:none] [&::-webkit-scrollbar]:hidden" aria-label="Family reflections">
                    @if ($dbReviews->isNotEmpty())
                        @foreach ($dbReviews as $review)
                            <x-marketing.testimonial-card
                                :quote="$review->content"
                                :source="$review->author_name"
                                :meta="$review->role ? ($review->role . ($review->meta ? ' · ' . $review->meta : '')) : ($review->meta ?? 'Identity protected')"
                                :initials="$review->effective_initials"
                            />
                        @endforeach
                    @else
                        <x-marketing.testimonial-card
                            quote="Having one place to ask questions and understand the next step made the journey feel less overwhelming. Consistent support gave our family room to focus on our child."
                            source="A Project Cham family"
                            meta="Identity protected"
                            initials="PC"
                        />

                        <x-marketing.testimonial-card
                            quote="The support did not end after one conversation. We were guided, checked on, and connected to people who could help when our family needed it most."
                            source="A supported caregiver"
                            meta="Identity protected"
                            initials="SC"
                        />
                    @endif
                </div>
            </div>

            <div class="mt-3 flex justify-end gap-3" aria-label="Family reflection navigation">
                <button
                    type="button"
                    data-scroll-rail="family-voices-rail"
                    data-scroll-direction="previous"
                    class="marketing-focus-ring grid size-10 place-items-center rounded-full bg-cham-primary text-white transition hover:-translate-y-0.5 hover:bg-cham-primary-hover"
                    aria-label="View previous family reflection"
                >
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M16 10H5m4.5-4.5L5 10l4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button
                    type="button"
                    data-scroll-rail="family-voices-rail"
                    data-scroll-direction="next"
                    class="marketing-focus-ring grid size-10 place-items-center rounded-full bg-cham-blue-100 text-cham-secondary transition hover:-translate-y-0.5 hover:bg-white"
                    aria-label="View next family reflection"
                >
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </x-marketing.container>
</section>
