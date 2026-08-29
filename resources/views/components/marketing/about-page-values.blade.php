<section class="relative isolate overflow-hidden bg-cham-blue-50 py-20 sm:py-24 lg:py-28" aria-labelledby="values-heading">
    <div class="pointer-events-none absolute top-16 -left-14 size-40 rounded-full border-[2rem] border-white/75" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="grid gap-8 lg:grid-cols-[minmax(0,0.75fr)_minmax(0,1.25fr)] lg:items-end lg:gap-16">
            <div>
                <p class="text-sm font-bold tracking-[0.1em] text-cham-secondary uppercase">What we stand for</p>
                <h2 id="values-heading" class="font-hero mt-4 text-4xl leading-[1.06] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl">
                    The principles inside <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">every decision.</span>
                </h2>
            </div>
            <p class="max-w-xl text-base leading-8 text-cham-stone lg:justify-self-end">
                How we work matters as much as what we deliver. These values keep Project Cham child-first, organised, accountable, and open to collective strength.
            </p>
        </div>

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
            @foreach ([
                ['01', 'Compassion', 'A child-first approach grounded in dignity and care.', 'bg-cham-primary text-white'],
                ['02', 'Structure', 'Organised, consistent support families can depend on.', 'bg-white text-cham-ink'],
                ['03', 'Impact', 'Outcomes that remain visible, useful, and measurable.', 'bg-cham-blue-950 text-white'],
                ['04', 'Advocacy', 'A strong voice that turns awareness into informed action.', 'bg-white text-cham-ink'],
                ['05', 'Collaboration', 'Healthcare, family, and community partners moving together.', 'bg-cham-secondary text-white'],
            ] as [$number, $value, $description, $classes])
                <article @class([
                    'group flex min-h-[18rem] flex-col rounded-[1.75rem] p-6 shadow-[0_16px_45px_rgb(10_35_68_/_0.08)] transition duration-300 hover:-translate-y-2',
                    $classes,
                    'lg:translate-y-8 lg:hover:translate-y-6' => in_array($number, ['02', '04']),
                ])>
                    <div class="flex items-center justify-between">
                        <span class="font-hero text-4xl font-semibold opacity-30">{{ $number }}</span>
                        <span class="size-3 rounded-full border-2 border-current opacity-45 transition group-hover:scale-150" aria-hidden="true"></span>
                    </div>
                    <h3 class="font-hero mt-auto text-2xl font-semibold">{{ $value }}</h3>
                    <p class="mt-3 text-sm leading-6 opacity-70">{{ $description }}</p>
                </article>
            @endforeach
        </div>
    </x-marketing.container>
</section>
