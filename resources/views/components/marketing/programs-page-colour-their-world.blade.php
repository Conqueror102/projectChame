@php
    /*
     * Gift tags hanging from the garland. Images are stand-ins until the Colour Their World photos arrive:
     * replace each 'image' with the real photo under resources/images/marketing/, then run `npm run build`.
     */
    $colourTheirWorldTags = [
        ['label' => 'Oncology ward visit', 'note' => 'to the bravest kids on the ward', 'caption' => 'Hospital visit moments at the paediatric oncology ward', 'image' => 'resources/images/marketing/project-cham-impact-care-access.png', 'tilt' => '-4deg', 'thread' => 'h-20'],
        ['label' => 'Orphanage celebration', 'note' => 'a whole room singing happy birthday', 'caption' => 'Orphanage visit celebrations', 'image' => 'resources/images/marketing/project-cham-get-involved-support-child.png', 'tilt' => '3deg', 'thread' => 'h-20 lg:h-44'],
        ['label' => 'The CHAM team', 'note' => 'team pink, reporting for fun', 'caption' => 'The Project CHAM team in branded t-shirts', 'image' => 'resources/images/marketing/project-cham-about-support.png', 'tilt' => '-2deg', 'thread' => 'h-20 lg:h-12'],
        ['label' => 'Gift handovers', 'note' => 'gifts, games &amp; too much cake', 'caption' => 'Gift handovers, games, and birthday celebrations', 'image' => 'resources/images/marketing/project-cham-impact-family-support.png', 'tilt' => '4deg', 'thread' => 'h-20 lg:h-32'],
    ];
@endphp

<section id="colour-their-world" class="relative isolate overflow-hidden bg-cham-blue-950 py-20 text-white sm:py-24 lg:py-28" aria-labelledby="colour-their-world-heading">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(60rem_32rem_at_75%_10%,var(--color-cham-blue-900),transparent)]" aria-hidden="true"></div>

    <x-marketing.container class="relative grid gap-14 lg:grid-cols-12 lg:gap-10">
        <div class="min-w-0 lg:col-span-4 lg:pt-6">
            <p class="font-hero text-sm font-semibold tracking-[0.12em] text-cham-pink-300 uppercase">Signature initiative</p>
            <h2 id="colour-their-world-heading" class="font-hero mt-4 text-5xl leading-[0.95] font-semibold tracking-[-0.045em] sm:text-6xl">
                Colour Their
                <span class="font-handwriting mt-1 block text-6xl font-normal tracking-normal text-cham-primary sm:text-7xl">World</span>
            </h2>
            <p class="mt-6 text-base leading-8 text-white/75">
                Colour Their World is Project CHAM's signature initiative, held two times a year: at Christmas, for birthday celebrations. We visit orphanages and the paediatric oncology ward with gifts, games, and celebration, because every child deserves to feel seen, loved, and celebrated. For many children facing cancer, one joyful day can change the whole season.
            </p>
            <p class="font-handwriting mt-8 text-2xl text-white/60">every tag is a day a child got to just be a child</p>
        </div>

        <div class="relative min-w-0 lg:col-span-8">
            <svg class="pointer-events-none absolute top-2 left-0 h-16 w-[64rem] max-w-none lg:w-full" viewBox="0 0 800 90" preserveAspectRatio="none" fill="none" aria-hidden="true">
                <path d="M0 18 C120 70 230 78 360 48 S620 6 800 44" stroke="currentColor" stroke-width="2" class="text-cham-paper/80" vector-effect="non-scaling-stroke"/>
                <g class="text-cham-primary" fill="currentColor"><circle cx="70" cy="44" r="4"/><circle cx="190" cy="64" r="4"/><circle cx="310" cy="58" r="4"/></g>
                <g class="text-cham-blue-400" fill="currentColor"><circle cx="450" cy="34" r="4"/><circle cx="580" cy="22" r="4"/><circle cx="720" cy="30" r="4"/></g>
            </svg>

            <ul class="relative -mx-7 flex snap-x snap-mandatory gap-6 overflow-x-auto px-7 pt-0 pb-10 sm:-mx-10 sm:px-10 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-9 lg:overflow-visible lg:px-0 lg:pt-0" aria-label="Colour Their World moments">
                @foreach ($colourTheirWorldTags as $tag)
                    <li class="w-60 shrink-0 snap-center lg:w-auto">
                        <figure class="marketing-gift-tag-sway relative drop-shadow-[0_22px_30px_rgb(0_0_0_/_0.35)]" style="--tag-tilt: {{ $tag['tilt'] }}; animation-delay: -{{ $loop->index * 1.4 }}s">
                            <span class="mx-auto block w-0.5 bg-cham-paper/80 {{ $tag['thread'] }}" aria-hidden="true"></span>
                            <div class="marketing-gift-tag relative bg-cham-paper px-3.5 pt-10 pb-5 text-cham-ink">
                                <span class="absolute top-3.5 left-1/2 size-4 -translate-x-1/2 rounded-full bg-cham-blue-950 ring-[3px] ring-cham-line" aria-hidden="true"></span>
                                <img
                                    class="aspect-[4/5] w-full rounded-md object-cover"
                                    src="{{ Vite::asset($tag['image']) }}"
                                    alt="{{ $tag['caption'] }}"
                                    loading="lazy"
                                >
                                <figcaption>
                                    <p class="font-handwriting mt-3 text-2xl leading-7">{!! $tag['note'] !!}</p>
                                    <p class="mt-2 text-[0.68rem] font-bold tracking-[0.14em] text-cham-primary uppercase">{{ $tag['label'] }}</p>
                                </figcaption>
                            </div>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-marketing.container>
</section>
