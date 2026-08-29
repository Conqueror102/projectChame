<section class="relative isolate overflow-hidden bg-cham-ink py-20 text-white sm:py-24 lg:py-28" aria-labelledby="difference-heading">
    <x-marketing.container class="grid gap-14 lg:grid-cols-12 lg:gap-20">
        <div class="lg:col-span-5">
            <div class="lg:sticky lg:top-28">
                <p class="text-sm font-bold tracking-[0.1em] text-cham-pink-200 uppercase">What makes the work different</p>
                <h2 id="difference-heading" class="font-hero mt-5 text-4xl leading-[1.05] font-semibold tracking-[-0.04em] sm:text-5xl">
                    Awareness is a beginning. <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">Support must go further.</span>
                </h2>
                <p class="mt-6 max-w-lg text-base leading-8 text-white/65">
                    Project Cham focuses on support that translates into practical, sustained impact for children and the people caring for them.
                </p>
            </div>
        </div>

        <div class="lg:col-span-7">
            <ol class="border-t border-white/12">
                @foreach ([
                    ['01', 'Structured, not one-time', 'Support is organised to continue beyond a single intervention or conversation.'],
                    ['02', 'Focused on child and family outcomes', 'Every effort connects back to a better care experience and stronger family stability.'],
                    ['03', 'Driven by community and partnership', 'Healthcare providers, organisations, advocates, and communities extend what is possible.'],
                    ['04', 'Clear about measurable impact', 'Progress is defined through awareness, care access, family support, and children reached.'],
                ] as [$number, $title, $description])
                    <li class="group grid gap-4 border-b border-white/12 py-8 transition sm:grid-cols-[4rem_minmax(0,1fr)_2rem] sm:items-start sm:gap-6 sm:py-10">
                        <span class="font-hero text-3xl font-semibold text-cham-primary">{{ $number }}</span>
                        <div>
                            <h3 class="font-hero text-2xl font-semibold sm:text-3xl">{{ $title }}</h3>
                            <p class="mt-3 max-w-2xl text-sm leading-7 text-white/58 sm:text-base">{{ $description }}</p>
                        </div>
                        <svg class="hidden size-6 text-white/25 transition group-hover:translate-x-1 group-hover:text-cham-primary sm:block" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 12h15m-5-5 5 5-5 5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </li>
                @endforeach
            </ol>

            <div class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-4">
                @foreach (['More awareness', 'Clearer care access', 'Stronger families', 'Visible reach'] as $outcome)
                    <div class="rounded-[1.25rem] bg-white/6 p-4 text-center text-xs font-bold text-white/72 ring-1 ring-inset ring-white/10">
                        {{ $outcome }}
                    </div>
                @endforeach
            </div>
        </div>
    </x-marketing.container>
</section>
