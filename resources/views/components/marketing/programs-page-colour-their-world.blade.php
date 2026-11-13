@php
    /*
     * Stand-in images until the Colour Their World photos arrive.
     * Replace each 'image' with the real photo under resources/images/marketing/, then run `npm run build`.
     * The first moment is the large feature tile.
     */
    $colourTheirWorldMoments = [
        ['caption' => 'Hospital visit moments at the paediatric oncology ward', 'image' => 'resources/images/marketing/project-cham-impact-care-access.png', 'span' => 'md:col-span-2 md:row-span-2'],
        ['caption' => 'Orphanage visit celebrations', 'image' => 'resources/images/marketing/project-cham-get-involved-support-child.png', 'span' => 'md:row-span-2'],
        ['caption' => 'The Project CHAM team in branded t-shirts', 'image' => 'resources/images/marketing/project-cham-about-support.png', 'span' => ''],
        ['caption' => 'Gift handovers, games, and birthday celebrations', 'image' => 'resources/images/marketing/project-cham-impact-family-support.png', 'span' => ''],
    ];
@endphp

<section id="colour-their-world" class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="colour-their-world-heading">
    <x-marketing.container class="relative">
        <div class="max-w-3xl">
            <p class="font-hero text-sm font-semibold tracking-[0.12em] text-cham-primary uppercase">Signature initiative</p>
            <h2 id="colour-their-world-heading" class="font-hero mt-4 text-4xl leading-[1.04] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                Colour Their <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">World</span>
            </h2>
            <p class="mt-5 text-base leading-8 text-cham-stone">
                Colour Their World is Project CHAM's signature initiative, held two times a year: at Christmas, for birthday celebrations. We visit orphanages and the paediatric oncology ward with gifts, games, and celebration, because every child deserves to feel seen, loved, and celebrated. For many children facing cancer, one joyful day can change the whole season.
            </p>
        </div>

        <ul class="mt-12 grid auto-rows-[15rem] gap-4 md:grid-cols-4" aria-label="Colour Their World moments">
            @foreach ($colourTheirWorldMoments as $moment)
                <li class="group relative overflow-hidden rounded-[1.75rem] bg-cham-blue-100 {{ $moment['span'] }}">
                    <img
                        class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        src="{{ Vite::asset($moment['image']) }}"
                        alt="{{ $moment['caption'] }}"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-linear-to-t from-cham-ink/80 via-cham-ink/10 to-transparent" aria-hidden="true"></div>
                    <p class="absolute inset-x-0 bottom-0 p-5 text-sm font-semibold text-white sm:p-6 sm:text-base">{{ $moment['caption'] }}</p>
                </li>
            @endforeach
        </ul>
    </x-marketing.container>
</section>
