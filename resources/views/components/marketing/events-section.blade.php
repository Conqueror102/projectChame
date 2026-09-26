@php
    $dbEvents = \App\Models\Event::active()->upcoming()->take(4)->get();
@endphp

<section id="events" class="relative isolate overflow-hidden bg-cham-ink py-20 text-white sm:py-24 lg:py-24" aria-labelledby="events-heading">
    <img
        class="pointer-events-none absolute inset-0 h-full w-full object-cover"
        src="{{ Vite::asset('resources/images/marketing/project-cham-events-brush-texture.png') }}"
        alt=""
        width="1792"
        height="1024"
        loading="lazy"
        aria-hidden="true"
    >

    <div class="pointer-events-none absolute inset-0 bg-cham-blue-950/72" aria-hidden="true"></div>

    <x-marketing.container class="relative max-w-[1180px]">
        <div class="grid items-end gap-6 md:grid-cols-[1fr_auto]">
            <div class="max-w-2xl">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-white/70">
                    <span class="grid size-8 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="none">
                            <path d="M4 6.5h12M6.5 3v3.5M13.5 3v3.5M5 5h10a1 1 0 0 1 1 1v9H4V6a1 1 0 0 1 1-1Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                        </svg>
                    </span>
                    Upcoming events
                </p>

                <h2 id="events-heading" class="font-hero mt-3 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] sm:text-[2.45rem]">
                    Gather, learn, and help move <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold">care forward.</span>
                </h2>

                <p class="mt-3 max-w-xl text-sm leading-6 text-white/65 sm:text-[0.95rem] sm:leading-6">
                    Join awareness sessions, family support circles, care-access outreaches, and community conversations built around practical action.
                </p>
            </div>

            <x-marketing.button-link :href="route('events.index')" variant="primary">
                Explore all events
            </x-marketing.button-link>
        </div>

        <div class="mt-7 flex snap-x snap-mandatory gap-5 overflow-x-auto pb-4 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden lg:grid lg:grid-cols-4 lg:gap-5 lg:overflow-visible lg:pb-0">
            @if ($dbEvents->isNotEmpty())
                @foreach ($dbEvents as $item)
                    <x-marketing.event-card
                        :time="$item->formatted_time"
                        :date="$item->formatted_date"
                        :location="$item->location"
                        :title="$item->title"
                        :image="$item->image ?? 'resources/images/marketing/project-cham-impact-awareness.png'"
                        :alt="$item->title"
                        :href="route('events.show', $item->slug)"
                        :action-label="$item->action_label"
                        :image-position="$item->image_position ?? 'center'"
                    />
                @endforeach
            @else
                <x-marketing.event-card
                    time="10:00 AM"
                    date="14 Sep, 2026"
                    location="Lagos, Nigeria"
                    title="Childhood Cancer Awareness Session"
                    image="resources/images/marketing/project-cham-impact-awareness.png"
                    alt="A Black childhood-health educator speaking with families"
                    :href="route('events.index')"
                />

                <x-marketing.event-card
                    time="12:30 PM"
                    date="19 Sep, 2026"
                    location="Ikeja, Lagos"
                    title="Family Support Circle"
                    image="resources/images/marketing/project-cham-get-involved-support-child.png"
                    alt="A Black child and mother sharing a creative activity with a support volunteer"
                    :href="route('events.index')"
                />

                <x-marketing.event-card
                    time="9:00 AM"
                    date="26 Sep, 2026"
                    location="Surulere, Lagos"
                    title="Care Access Partner Clinic"
                    image="resources/images/marketing/project-cham-impact-care-access.png"
                    alt="A Black mother and child welcomed by a patient navigator"
                    :href="route('events.index')"
                />

                <x-marketing.event-card
                    time="2:00 PM"
                    date="03 Oct, 2026"
                    location="Lagos, Nigeria"
                    title="Community Advocacy Workshop"
                    image="resources/images/marketing/project-cham-get-involved-advocate.png"
                    alt="A young Black woman leading a community awareness conversation"
                    :href="route('events.index')"
                    image-position="center 42%"
                />
            @endif
        </div>
    </x-marketing.container>
</section>
