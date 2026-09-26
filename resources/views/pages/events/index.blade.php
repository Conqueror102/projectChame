<x-marketing.layout
    title="Upcoming Events & Outreaches — Project Cham"
    description="Join awareness sessions, family support circles, care-access partner clinics, and community advocacy workshops across Lagos and Nigeria."
>
    <!-- Hero & Upcoming Section -->
    <section class="relative isolate overflow-hidden bg-cham-ink py-20 text-white sm:py-24 lg:py-28" aria-labelledby="events-page-heading">
        <img
            class="pointer-events-none absolute inset-0 h-full w-full object-cover opacity-60"
            src="{{ Vite::asset('resources/images/marketing/project-cham-events-brush-texture.png') }}"
            alt=""
            aria-hidden="true"
        >
        <div class="pointer-events-none absolute inset-0 bg-cham-blue-950/75" aria-hidden="true"></div>

        <x-marketing.container class="relative max-w-[1180px]">
            <div class="max-w-2xl">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-white/70">
                    <span class="grid size-8 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="none">
                            <path d="M4 6.5h12M6.5 3v3.5M13.5 3v3.5M5 5h10a1 1 0 0 1 1 1v9H4V6a1 1 0 0 1 1-1Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                        </svg>
                    </span>
                    Events &amp; Outreaches
                </p>

                <h1 id="events-page-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] sm:text-[3rem]">
                    Gather, learn, and help move <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold">care forward.</span>
                </h1>

                <p class="mt-4 text-base leading-7 text-white/75 sm:text-lg">
                    Join awareness sessions, family support circles, care-access outreaches, and community conversations built around practical action for children.
                </p>
            </div>

            <!-- Upcoming Events Grid -->
            <div class="mt-12">
                <h2 class="text-xs font-bold uppercase tracking-wider text-white/60 mb-6">Upcoming Scheduled Sessions</h2>

                @if ($upcomingEvents->isNotEmpty())
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($upcomingEvents as $item)
                            <x-marketing.event-card
                                :time="$item->formatted_time"
                                :date="$item->formatted_date"
                                :location="$item->location"
                                :title="$item->title"
                                :image="$item->image"
                                :alt="$item->title"
                                :href="route('events.show', $item->slug)"
                                :action-label="$item->action_label"
                                :image-position="$item->image_position ?? 'center'"
                            />
                        @endforeach
                    </div>
                @else
                    <div class="rounded-3xl bg-white/5 p-8 text-center border border-white/10">
                        <p class="text-white/80">Check back soon for newly scheduled awareness circles and partner clinic dates.</p>
                    </div>
                @endif
            </div>
        </x-marketing.container>
    </section>

    <!-- Past Events Section -->
    @if ($pastEvents->isNotEmpty())
        <section class="marketing-paper py-16 sm:py-20">
            <x-marketing.container class="max-w-[1180px]">
                <h2 class="font-hero text-2xl font-bold text-cham-ink mb-6">Past Outreaches &amp; Sessions</h2>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($pastEvents as $past)
                        <div class="rounded-2xl bg-white p-5 border border-cham-line/70 shadow-xs flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs text-cham-stone">
                                    <span>{{ $past->formatted_date }}</span>
                                    <span>{{ $past->location }}</span>
                                </div>
                                <h3 class="font-hero text-lg font-bold text-cham-ink mt-2">{{ $past->title }}</h3>
                                @if ($past->description)
                                    <p class="text-sm text-cham-stone mt-1.5 line-clamp-2">{{ $past->description }}</p>
                                @endif
                            </div>
                            <div class="pt-4 mt-4 border-t border-cham-line/50">
                                <a href="{{ route('events.show', $past->slug) }}" class="text-xs font-bold text-cham-secondary hover:text-cham-primary transition">
                                    View recap &rarr;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-marketing.container>
        </section>
    @endif
</x-marketing.layout>
