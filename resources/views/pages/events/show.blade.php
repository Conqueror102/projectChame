<x-marketing.layout
    :title="$event->title . ' — Project Cham Events'"
    :description="$event->description ?? 'Join this Project Cham event.'"
>
    <article class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <x-marketing.container class="relative max-w-[900px]">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-xs font-semibold text-cham-stone mb-6">
                <a href="{{ route('home') }}" class="hover:text-cham-ink">Home</a>
                <span>/</span>
                <a href="{{ route('events.index') }}" class="hover:text-cham-ink">Events</a>
                <span>/</span>
                <span class="text-cham-primary truncate max-w-xs">{{ $event->title }}</span>
            </nav>

            <header class="space-y-4">
                <div class="inline-flex items-center gap-2 rounded-full border border-cham-blue-200 bg-white px-3.5 py-1 text-xs font-bold text-cham-secondary">
                    {{ $event->category ?? 'Community Outreach' }}
                </div>

                <h1 class="font-hero text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight text-cham-ink">
                    {{ $event->title }}
                </h1>

                <!-- Key Details Bar -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 rounded-2xl bg-white p-5 border border-cham-line/70 shadow-xs">
                    <div class="flex items-center gap-3">
                        <div class="grid size-10 place-items-center rounded-xl bg-cham-pink-50 text-cham-primary">
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-cham-stone font-semibold uppercase">Date &amp; Time</p>
                            <p class="text-sm font-bold text-cham-ink">{{ $event->formatted_date }} at {{ $event->formatted_time }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="grid size-10 place-items-center rounded-xl bg-cham-blue-50 text-cham-secondary">
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-cham-stone font-semibold uppercase">Location</p>
                            <p class="text-sm font-bold text-cham-ink">{{ $event->location }}</p>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Event Cover Image -->
            @if ($event->image)
                <div class="my-8 rounded-3xl overflow-hidden border border-cham-line/70 shadow-md">
                    <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full max-h-[460px] object-cover" />
                </div>
            @endif

            <!-- Description -->
            <div class="space-y-4 text-base leading-relaxed text-cham-stone sm:text-lg">
                @if ($event->description)
                    <p class="whitespace-pre-wrap">{{ $event->description }}</p>
                @else
                    <p>Join Project Cham and healthcare partners for this dedicated awareness and family support session. We will share practical guidance, answer questions, and connect caregivers with accredited clinical resources.</p>
                @endif
            </div>

            <!-- Action / Participation Card -->
            <div class="mt-12 rounded-3xl bg-cham-ink text-white p-8 sm:p-10 shadow-xl flex flex-col sm:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="font-hero text-2xl font-bold text-white">Attend or Support This Session</h3>
                    <p class="text-sm text-white/70 mt-1 max-w-md">
                        Whether you are a family seeking support or a community member wanting to help, we welcome your presence.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                    @if ($event->action_url)
                        <a
                            href="{{ $event->action_url }}"
                            target="_blank"
                            class="rounded-full bg-cham-primary px-6 py-3.5 text-center text-sm font-bold text-white hover:bg-cham-primary-hover transition"
                        >
                            {{ $event->action_label ?: 'Register for Event' }}
                        </a>
                    @endif
                    <x-marketing.button-link :href="route('donate')" variant="secondary">
                        Pledge Support
                    </x-marketing.button-link>
                </div>
            </div>

            <!-- Other Events -->
            @if ($otherEvents->isNotEmpty())
                <div class="mt-16 border-t border-cham-line pt-10">
                    <h3 class="font-hero text-2xl font-bold text-cham-ink mb-6">More Upcoming Events</h3>
                    <div class="grid gap-6 sm:grid-cols-3">
                        @foreach ($otherEvents as $other)
                            <a href="{{ route('events.show', $other->slug) }}" class="group block rounded-2xl bg-white p-4 border border-cham-line/70 hover:shadow-md transition">
                                <p class="text-xs font-semibold text-cham-primary">{{ $other->formatted_date }}</p>
                                <h4 class="font-hero text-base font-bold text-cham-ink group-hover:text-cham-secondary transition mt-1 line-clamp-2">
                                    {{ $other->title }}
                                </h4>
                                <p class="text-xs text-cham-stone mt-1">{{ $other->location }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </x-marketing.container>
    </article>
</x-marketing.layout>
