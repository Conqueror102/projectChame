<x-marketing.layout
    title="Our Team & Leadership — Project Cham"
    description="Meet the paediatric oncology advisors, family support specialists, and community advocates delivering structured care and hope to children battling cancer."
>
    <!-- Hero Section -->
    <section class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute -top-24 -right-28 size-72 rounded-full border-[2.5rem] border-cham-pink-100/70" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-28 -left-24 size-72 rounded-full bg-cham-blue-100/55" aria-hidden="true"></div>

        <x-marketing.container class="relative">
            <div class="mx-auto max-w-3xl text-center">
                <p class="inline-flex items-center gap-2 rounded-full border border-cham-blue-200 bg-white/90 px-3.5 py-1.5 text-xs font-bold tracking-[0.12em] text-cham-ink uppercase shadow-xs">
                    <span class="grid size-6 place-items-center rounded-full bg-cham-secondary text-white" aria-hidden="true">
                        <svg class="size-3.5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                    </span>
                    Leadership &amp; Community Team
                </p>

                <h1 class="font-hero mt-5 text-4xl leading-[1.06] font-semibold tracking-[-0.035em] text-cham-ink sm:text-5xl lg:text-6xl">
                    The people behind <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">every act of care.</span>
                </h1>

                <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-cham-stone sm:text-lg sm:leading-8">
                    Project CHAM is driven by dedicated founders, healthcare advocates, and grassroots coordinators working directly with paediatric oncology units and vulnerable families so that no child in Nigeria faces cancer alone.
                </p>

                <!-- Search Form -->
                <form action="{{ route('team') }}" method="GET" class="mx-auto mt-8 flex max-w-md items-center gap-2">
                    <div class="relative flex-1">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-cham-stone/60">
                            <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                <path d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="search"
                            value="{{ $search ?? '' }}"
                            placeholder="Search by name, role, or specialty..."
                            class="marketing-focus-ring w-full rounded-full border border-cham-forest/15 bg-white py-2.5 pr-4 pl-10 text-sm text-cham-ink shadow-xs placeholder:text-cham-stone/50 focus:border-cham-primary"
                        >
                    </div>
                    <button type="submit" class="marketing-focus-ring inline-flex items-center justify-center rounded-full bg-cham-primary px-5 py-2.5 text-sm font-bold text-white shadow-xs transition hover:bg-cham-primary-hover">
                        Search
                    </button>
                    @if (filled($search ?? null))
                        <a href="{{ route('team') }}" class="marketing-focus-ring text-xs font-semibold text-cham-stone hover:text-cham-ink">
                            Clear
                        </a>
                    @endif
                </form>
            </div>

            <!-- Pillars Counter Bar -->
            <div class="mt-12 grid grid-cols-2 gap-4 rounded-2xl bg-white p-6 shadow-[0_10px_30px_rgb(13_28_21_/_0.04)] ring-1 ring-cham-forest/8 sm:grid-cols-4 sm:divide-x sm:divide-cham-forest/10">
                <div class="text-center px-4">
                    <p class="font-hero text-3xl font-bold text-cham-primary">100%</p>
                    <p class="mt-1 text-xs font-semibold text-cham-stone uppercase tracking-wider">Child-Centered</p>
                </div>
                <div class="text-center px-4">
                    <p class="font-hero text-3xl font-bold text-cham-secondary">Clinical</p>
                    <p class="mt-1 text-xs font-semibold text-cham-stone uppercase tracking-wider">Medical Guidance</p>
                </div>
                <div class="text-center px-4">
                    <p class="font-hero text-3xl font-bold text-cham-gold-dark">Family</p>
                    <p class="mt-1 text-xs font-semibold text-cham-stone uppercase tracking-wider">Direct Navigation</p>
                </div>
                <div class="text-center px-4">
                    <p class="font-hero text-3xl font-bold text-cham-ink">Lagos &amp; Beyond</p>
                    <p class="mt-1 text-xs font-semibold text-cham-stone uppercase tracking-wider">Hospital Outreach</p>
                </div>
            </div>

            <!-- Team Members Directory Grid -->
            <div class="mt-16">
                @if ($team->isNotEmpty())
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($team as $member)
                            @php
                                $profileUrl = route('team.show', $member->slug);
                            @endphp
                            <article class="group flex flex-col overflow-hidden rounded-2xl bg-white shadow-[0_14px_40px_rgb(13_28_21_/_0.06)] ring-1 ring-cham-forest/8 transition duration-300 hover:-translate-y-2 hover:shadow-[0_22px_52px_rgb(13_28_21_/_0.12)]">
                                <!-- Member Photo / Avatar with Hover Socials -->
                                <div class="relative aspect-[1.05/1] overflow-hidden bg-cham-forest/5">
                                    <a href="{{ $profileUrl }}" class="block h-full w-full">
                                        @if ($member->image_url)
                                            <img
                                                src="{{ $member->image_url }}"
                                                alt="Portrait of {{ $member->name }}, {{ $member->role }}"
                                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                            />
                                        @elseif ($member->image_position && in_array($member->image_position, ['0%', '33.333%', '66.667%', '100%']))
                                            <div
                                                class="h-full w-full bg-cover bg-no-repeat transition duration-500 group-hover:scale-105"
                                                style="background-image: url('{{ Vite::asset('resources/images/marketing/project-cham-team-portraits.png') }}'); background-size: 400% auto; background-position: {{ $member->image_position }} 17%;"
                                                role="img"
                                                aria-label="Portrait of {{ $member->name }}, {{ $member->role }}"
                                            ></div>
                                        @else
                                            <div class="flex h-full w-full flex-col items-center justify-center bg-gradient-to-br from-[#0D1C15] to-[#162e23] p-6 text-center text-white">
                                                <div class="grid size-16 place-items-center rounded-2xl bg-white/10 ring-1 ring-white/15 text-cham-primary font-hero text-2xl font-bold">
                                                    {{ $member->initials }}
                                                </div>
                                                <span class="mt-2 text-xs font-semibold text-white/70">Care Lead</span>
                                            </div>
                                        @endif
                                    </a>

                                    <!-- Category Badge -->
                                    <div class="absolute bottom-3 left-3">
                                        <span class="inline-flex items-center gap-1 rounded-full bg-[#0D1C15]/85 px-3 py-1 text-[0.68rem] font-bold text-white shadow-sm backdrop-blur-xs">
                                            <span class="size-1.5 rounded-full bg-cham-primary" aria-hidden="true"></span>
                                            Champion
                                        </span>
                                    </div>

                                    <!-- Frosted Glass Social Overlay on Hover -->
                                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-[#0D1C15]/80 p-4 opacity-0 backdrop-blur-xs transition duration-300 group-hover:opacity-100">
                                        <p class="text-[0.68rem] font-extrabold tracking-wider text-cham-pink-200 uppercase mb-3">Connect &amp; Socials</p>
                                        <div class="flex items-center gap-2.5">
                                            @if ($member->linkedin_url)
                                                <a
                                                    href="{{ $member->linkedin_url }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-secondary shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                                                    aria-label="{{ $member->name }} on LinkedIn"
                                                >
                                                    <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M5.4 6.7H2.7V17h2.7V6.7ZM4.05 2A1.58 1.58 0 1 0 4 5.16 1.58 1.58 0 0 0 4.05 2ZM17.3 11.1c0-3.1-1.65-4.55-3.86-4.55a3.34 3.34 0 0 0-3.02 1.66V6.7H7.7V17h2.72v-5.1c0-1.35.26-2.66 1.93-2.66 1.65 0 1.67 1.54 1.67 2.75V17h2.73l.55-5.9Z"/>
                                                    </svg>
                                                </a>
                                            @endif

                                            @if ($member->twitter_url)
                                                <a
                                                    href="{{ $member->twitter_url }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-ink shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                                                    aria-label="{{ $member->name }} on X / Twitter"
                                                >
                                                    <svg class="size-4" viewBox="0 0 24 24" fill="currentColor">
                                                        <path d="M18.7 3H22l-7.2 8.2L23.3 21h-6.6l-5.2-6.8L5.6 21H2.3l7.7-8.8L1.8 3h6.8l4.7 6.2L18.7 3Zm-1.2 16h1.8L7.6 4.9h-2L17.5 19Z"/>
                                                    </svg>
                                                </a>
                                            @endif

                                            @if ($member->email)
                                                <a
                                                    href="mailto:{{ $member->email }}"
                                                    class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-primary shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                                                    aria-label="Email {{ $member->name }}"
                                                >
                                                    <svg class="size-4" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                                                        <rect x="2.8" y="4.5" width="14.4" height="11" rx="2" stroke-width="1.7"/>
                                                        <path d="m4 6 6 4.5L16 6" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                            @endif
                                        </div>

                                        <a
                                            href="{{ $profileUrl }}"
                                            class="mt-4 inline-flex items-center gap-1.5 rounded-full bg-cham-primary px-4 py-1.5 text-xs font-bold text-white shadow-sm transition hover:bg-cham-primary-hover"
                                        >
                                            <span>Full Profile</span>
                                            <svg class="size-3" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                                                <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <!-- Member Information -->
                                <div class="flex flex-1 flex-col p-6">
                                    <h2 class="font-hero text-xl font-bold tracking-tight text-cham-ink group-hover:text-cham-primary transition-colors">
                                        <a href="{{ $profileUrl }}">
                                            {{ $member->name }}
                                        </a>
                                    </h2>

                                    <p class="mt-1 text-xs font-bold tracking-wide text-cham-secondary uppercase">
                                        {{ $member->role }}
                                    </p>

                                    @if ($member->bio)
                                        <p class="mt-3.5 flex-1 text-sm leading-6 text-cham-stone line-clamp-3">
                                            {{ $member->bio }}
                                        </p>
                                    @else
                                        <p class="mt-3.5 flex-1 text-sm leading-6 text-cham-stone italic">
                                            Dedicated team champion contributing to care pathways and advocacy at Project Cham.
                                        </p>
                                    @endif

                                    <div class="mt-5 border-t border-cham-forest/8 pt-4 flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            @if ($member->linkedin_url)
                                                <a href="{{ $member->linkedin_url }}" target="_blank" rel="noopener noreferrer" class="text-cham-stone/60 hover:text-cham-secondary transition-colors" aria-label="LinkedIn">
                                                    <svg class="size-4" viewBox="0 0 20 20" fill="currentColor"><path d="M5.4 6.7H2.7V17h2.7V6.7ZM4.05 2A1.58 1.58 0 1 0 4 5.16 1.58 1.58 0 0 0 4.05 2ZM17.3 11.1c0-3.1-1.65-4.55-3.86-4.55a3.34 3.34 0 0 0-3.02 1.66V6.7H7.7V17h2.72v-5.1c0-1.35.26-2.66 1.93-2.66 1.65 0 1.67 1.54 1.67 2.75V17h2.73l.55-5.9Z"/></svg>
                                                </a>
                                            @endif
                                            @if ($member->twitter_url)
                                                <a href="{{ $member->twitter_url }}" target="_blank" rel="noopener noreferrer" class="text-cham-stone/60 hover:text-cham-ink transition-colors" aria-label="X">
                                                    <svg class="size-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.7 3H22l-7.2 8.2L23.3 21h-6.6l-5.2-6.8L5.6 21H2.3l7.7-8.8L1.8 3h6.8l4.7 6.2L18.7 3Zm-1.2 16h1.8L7.6 4.9h-2L17.5 19Z"/></svg>
                                                </a>
                                            @endif
                                            @if ($member->email)
                                                <a href="mailto:{{ $member->email }}" class="text-cham-stone/60 hover:text-cham-primary transition-colors" aria-label="Email">
                                                    <svg class="size-4" viewBox="0 0 20 20" fill="none" stroke="currentColor"><rect x="2.8" y="4.5" width="14.4" height="11" rx="2" stroke-width="1.7"/><path d="m4 6 6 4.5L16 6" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                                </a>
                                            @endif
                                        </div>
                                        <a href="{{ $profileUrl }}" class="text-xs font-bold text-cham-primary hover:text-cham-primary-hover inline-flex items-center gap-1">
                                            Profile &rarr;
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="rounded-3xl border border-dashed border-cham-forest/20 bg-white/70 p-12 text-center">
                        <div class="mx-auto grid size-12 place-items-center rounded-full bg-cham-pink-50 text-cham-primary">
                            <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-hero mt-4 text-xl font-bold text-cham-ink">No team members match your search</h3>
                        <p class="mt-2 text-sm text-cham-stone">Try clearing your search query to view the full team roster.</p>
                        <div class="mt-5">
                            <a href="{{ route('team') }}" class="marketing-focus-ring inline-flex items-center justify-center rounded-full bg-cham-primary px-5 py-2 text-sm font-bold text-white">
                                View all team members
                            </a>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Get Involved / Volunteer CTA Banner -->
            <div class="mt-20 overflow-hidden rounded-[2.25rem] bg-cham-ink p-8 text-white shadow-2xl sm:p-12 lg:p-16">
                <div class="grid gap-8 lg:grid-cols-[1.4fr_1fr] lg:items-center">
                    <div>
                        <span class="inline-block text-xs font-extrabold tracking-[0.16em] text-cham-pink-300 uppercase">Join Our Multidisciplinary Mission</span>
                        <h2 class="font-hero mt-3 text-3xl font-bold leading-tight tracking-tight sm:text-4xl">
                            Passionate about pediatric oncology advocacy and care?
                        </h2>
                        <p class="mt-4 max-w-xl text-sm leading-6 text-white/70 sm:text-base sm:leading-7">
                            Whether you are an oncology clinician, psychologist, social worker, or passionate volunteer, we welcome dedicated champions who want to stand beside children battling cancer.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3.5 sm:flex-row lg:flex-col lg:items-end">
                        <x-marketing.button-link :href="route('donate')" class="text-center">
                            Partner with Our Network
                        </x-marketing.button-link>
                        <x-marketing.button-link :href="route('about')" variant="light" class="text-center">
                            Learn About Our Philosophy
                        </x-marketing.button-link>
                    </div>
                </div>
            </div>
        </x-marketing.container>
    </section>
</x-marketing.layout>
