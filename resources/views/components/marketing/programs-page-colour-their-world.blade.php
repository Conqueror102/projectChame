@php
    /*
     * Placeholder frames until the Colour Their World photos arrive.
     * To add a photo, set 'image' to a path under resources/images/marketing/.
     */
    $colourTheirWorldMoments = [
        ['caption' => 'Hospital visit moments at the paediatric oncology ward', 'image' => null, 'tone' => 'bg-cham-pink-100 text-cham-primary'],
        ['caption' => 'Orphanage visit celebrations', 'image' => null, 'tone' => 'bg-cham-blue-100 text-cham-secondary'],
        ['caption' => 'The Project CHAM team in branded t-shirts', 'image' => null, 'tone' => 'bg-cham-blue-100 text-cham-secondary'],
        ['caption' => 'Gift handovers, games, and birthday celebrations', 'image' => null, 'tone' => 'bg-cham-pink-100 text-cham-primary'],
    ];
@endphp

<section id="colour-their-world" class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="colour-their-world-heading">
    <div class="pointer-events-none absolute -top-16 -right-20 size-64 rounded-full bg-cham-pink-100/70" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-6">
                <p class="font-hero text-sm font-semibold tracking-[0.12em] text-cham-primary uppercase">Signature initiative</p>
                <h2 id="colour-their-world-heading" class="font-hero mt-4 text-4xl leading-[1.04] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                    Colour Their <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">World</span>
                </h2>
            </div>

            <div class="lg:col-span-6">
                <p class="text-base leading-8 text-cham-stone">
                    Colour Their World is Project CHAM's signature initiative, held two times a year: at Christmas, for birthday celebrations. We visit orphanages and the paediatric oncology ward with gifts, games, and celebration, because every child deserves to feel seen, loved, and celebrated. For many children facing cancer, one joyful day can change the whole season.
                </p>
            </div>
        </div>

        <ul class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4" aria-label="Colour Their World moments">
            @foreach ($colourTheirWorldMoments as $moment)
                <li class="overflow-hidden rounded-[1.75rem] bg-white shadow-[0_18px_50px_rgb(10_35_68_/_0.1)] {{ $loop->even ? 'lg:translate-y-8' : '' }}">
                    @if ($moment['image'])
                        <img
                            class="aspect-[4/5] w-full object-cover"
                            src="{{ Vite::asset($moment['image']) }}"
                            alt="{{ $moment['caption'] }}"
                            loading="lazy"
                        >
                    @else
                        <div class="grid aspect-[4/5] place-items-center {{ $moment['tone'] }}" aria-hidden="true">
                            <svg class="size-12 opacity-70" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="5" width="18" height="14" rx="3" stroke="currentColor" stroke-width="1.6"/>
                                <circle cx="9" cy="10" r="1.8" stroke="currentColor" stroke-width="1.6"/>
                                <path d="m4 17 5-4.5 3.5 3 3-2.5L20 17" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    @endif
                    <p class="p-5 text-sm leading-6 font-semibold text-cham-ink">{{ $moment['caption'] }}</p>
                </li>
            @endforeach
        </ul>
    </x-marketing.container>
</section>
