<x-marketing.layout
    :title="$member->name.' — '.$member->role.' | Project Cham'"
    :description="$member->bio ?? 'Learn more about '.$member->name.', '.$member->role.' at Project Cham.'"
>
    <!-- Breadcrumb & Top Bar -->
    <div class="border-b border-cham-forest/10 bg-white/70 backdrop-blur-xs py-3.5">
        <x-marketing.container>
            <nav class="flex items-center gap-2 text-xs font-semibold text-cham-stone" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-cham-primary transition-colors">Home</a>
                <span class="text-cham-stone/40">/</span>
                <a href="{{ route('team') }}" class="hover:text-cham-primary transition-colors">Team</a>
                <span class="text-cham-stone/40">/</span>
                <span class="text-cham-ink truncate max-w-xs">{{ $member->name }}</span>
            </nav>
        </x-marketing.container>
    </div>

    <!-- Main Profile Section -->
    <section class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute -top-24 -right-28 size-72 rounded-full border-[2.5rem] border-cham-pink-100/60" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-28 -left-24 size-72 rounded-full bg-cham-blue-100/50" aria-hidden="true"></div>

        <x-marketing.container class="relative">
            <div class="grid gap-12 lg:grid-cols-12 lg:gap-16 items-start">
                
                <!-- Left Column: Portrait & Quick Contacts -->
                <div class="lg:col-span-5">
                    <div class="sticky top-28 space-y-6">
                        <!-- Portrait Card -->
                        <div class="relative overflow-hidden rounded-3xl bg-white p-3 shadow-[0_20px_50px_rgb(13_28_21_/_0.08)] ring-1 ring-cham-forest/10">
                            <div class="relative aspect-[4/5] overflow-hidden rounded-2xl bg-cham-forest/5">
                                @if ($member->image_url)
                                    <img
                                        src="{{ $member->image_url }}"
                                        alt="Portrait of {{ $member->name }}"
                                        class="h-full w-full object-cover"
                                    />
                                @elseif ($member->image_position && in_array($member->image_position, ['0%', '33.333%', '66.667%', '100%']))
                                    <div
                                        class="h-full w-full bg-cover bg-no-repeat"
                                        style="background-image: url('{{ Vite::asset('resources/images/marketing/project-cham-team-portraits.png') }}'); background-size: 400% auto; background-position: {{ $member->image_position }} 17%;"
                                        role="img"
                                        aria-label="Portrait of {{ $member->name }}"
                                    ></div>
                                @else
                                    <div class="flex h-full w-full flex-col items-center justify-center bg-gradient-to-br from-[#0D1C15] to-[#162e23] p-6 text-center text-white">
                                        <div class="grid size-24 place-items-center rounded-3xl bg-white/10 ring-1 ring-white/15 text-cham-primary font-hero text-4xl font-bold">
                                            {{ $member->initials }}
                                        </div>
                                        <span class="mt-4 text-sm font-semibold text-white/80">Project Cham Champion</span>
                                    </div>
                                @endif

                                <div class="absolute top-4 left-4">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#0D1C15]/85 px-3 py-1 text-xs font-bold text-white shadow-sm backdrop-blur-xs">
                                        <span class="size-2 rounded-full bg-cham-primary animate-pulse" aria-hidden="true"></span>
                                        Active Champion
                                    </span>
                                </div>
                            </div>

                            <!-- Social Links & Direct Contacts -->
                            <div class="mt-4 p-3 bg-cham-paper/60 rounded-xl border border-cham-forest/8">
                                <p class="text-xs font-bold tracking-wider text-cham-stone uppercase text-center mb-3">Connect &amp; Socials</p>
                                <div class="flex items-center justify-center gap-3">
                                    @if ($member->linkedin_url)
                                        <a
                                            href="{{ $member->linkedin_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="marketing-focus-ring flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold text-cham-secondary shadow-xs ring-1 ring-cham-forest/10 transition hover:bg-cham-secondary hover:text-white"
                                            aria-label="{{ $member->name }} on LinkedIn"
                                        >
                                            <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M5.4 6.7H2.7V17h2.7V6.7ZM4.05 2A1.58 1.58 0 1 0 4 5.16 1.58 1.58 0 0 0 4.05 2ZM17.3 11.1c0-3.1-1.65-4.55-3.86-4.55a3.34 3.34 0 0 0-3.02 1.66V6.7H7.7V17h2.72v-5.1c0-1.35.26-2.66 1.93-2.66 1.65 0 1.67 1.54 1.67 2.75V17h2.73l.55-5.9Z"/>
                                            </svg>
                                            LinkedIn
                                        </a>
                                    @endif

                                    @if ($member->twitter_url)
                                        <a
                                            href="{{ $member->twitter_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="marketing-focus-ring flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold text-cham-ink shadow-xs ring-1 ring-cham-forest/10 transition hover:bg-cham-ink hover:text-white"
                                            aria-label="{{ $member->name }} on X / Twitter"
                                        >
                                            <svg class="size-4" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M18.7 3H22l-7.2 8.2L23.3 21h-6.6l-5.2-6.8L5.6 21H2.3l7.7-8.8L1.8 3h6.8l4.7 6.2L18.7 3Zm-1.2 16h1.8L7.6 4.9h-2L17.5 19Z"/>
                                            </svg>
                                            X / Twitter
                                        </a>
                                    @endif

                                    @if ($member->email)
                                        <a
                                            href="mailto:{{ $member->email }}"
                                            class="marketing-focus-ring flex items-center gap-2 rounded-full bg-white px-4 py-2 text-xs font-bold text-cham-primary shadow-xs ring-1 ring-cham-forest/10 transition hover:bg-cham-primary hover:text-white"
                                            aria-label="Email {{ $member->name }}"
                                        >
                                            <svg class="size-4" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                                                <rect x="2.8" y="4.5" width="14.4" height="11" rx="2" stroke-width="1.7"/>
                                                <path d="m4 6 6 4.5L16 6" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Email
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Quick Fact / Role Pill -->
                        <div class="rounded-2xl bg-white p-5 shadow-[0_10px_30px_rgb(13_28_21_/_0.04)] ring-1 ring-cham-forest/8 space-y-3">
                            <div class="flex items-center justify-between text-xs font-semibold text-cham-stone">
                                <span>Department</span>
                                <span class="font-bold text-cham-ink">Leadership &amp; Advocacy</span>
                            </div>
                            <div class="border-t border-cham-forest/6 pt-2 flex items-center justify-between text-xs font-semibold text-cham-stone">
                                <span>Location</span>
                                <span class="font-bold text-cham-ink">Lagos, Nigeria</span>
                            </div>
                            @if ($member->specialty)
                                <div class="border-t border-cham-forest/6 pt-2 flex items-center justify-between text-xs font-semibold text-cham-stone">
                                    <span>Specialty</span>
                                    <span class="font-bold text-cham-secondary truncate max-w-[12rem]">{{ $member->specialty }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Column: Biography, Philosophy & Responsibilities -->
                <div class="lg:col-span-7 space-y-10">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full border border-cham-blue-200 bg-cham-blue-50 px-3.5 py-1 text-xs font-bold tracking-wider text-cham-secondary uppercase">
                            {{ $member->role }}
                        </div>

                        <h1 class="font-hero mt-4 text-4xl font-bold tracking-tight text-cham-ink sm:text-5xl lg:text-6xl">
                            {{ $member->name }}
                        </h1>

                        @if ($member->specialty)
                            <p class="mt-2 text-base font-semibold text-cham-stone">
                                Focus: <span class="text-cham-ink">{{ $member->specialty }}</span>
                            </p>
                        @endif
                    </div>

                    <!-- Quote Banner -->
                    @if ($member->quote)
                        <blockquote class="relative rounded-3xl bg-cham-ink p-8 text-white shadow-xl sm:p-10">
                            <svg class="absolute top-6 left-6 size-10 text-white/10" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                            <p class="relative font-hero text-lg sm:text-xl font-medium leading-relaxed italic text-white/95">
                                &ldquo;{{ $member->quote }}&rdquo;
                            </p>
                            <footer class="mt-4 flex items-center gap-3">
                                <span class="h-0.5 w-8 bg-cham-primary rounded-full"></span>
                                <span class="text-xs font-bold uppercase tracking-wider text-cham-pink-200">{{ $member->name }}</span>
                            </footer>
                        </blockquote>
                    @endif

                    <!-- Detailed Bio -->
                    <div class="rounded-3xl bg-white p-8 sm:p-10 shadow-[0_12px_40px_rgb(13_28_21_/_0.05)] ring-1 ring-cham-forest/8 space-y-5 text-cham-stone leading-relaxed text-base sm:text-lg">
                        <h2 class="font-hero text-2xl font-bold text-cham-ink">About {{ $member->name }}</h2>
                        
                        <p>
                            {{ $member->bio }}
                        </p>

                        <p>
                            At Project Cham, {{ $member->name }} helps bridge the critical divide between clinical paediatric oncology and everyday family reality. By ensuring that every diagnosis is met with clear pathways, dedicated guidance, and financial or emotional stability, {{ $member->name }} embodies the core motto of Project Cham: <em>Care, Structure, and Impact</em>.
                        </p>
                    </div>

                    <!-- Core Responsibilities / Pillars -->
                    <div class="grid gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-cham-forest/8">
                            <div class="grid size-9 place-items-center rounded-xl bg-cham-pink-50 text-cham-primary font-bold">01</div>
                            <h3 class="font-hero mt-3 text-base font-bold text-cham-ink">Child-First Care</h3>
                            <p class="mt-1 text-xs leading-5 text-cham-stone">Prioritizing the dignity, comfort, and direct emotional recovery of the child.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-cham-forest/8">
                            <div class="grid size-9 place-items-center rounded-xl bg-cham-blue-50 text-cham-secondary font-bold">02</div>
                            <h3 class="font-hero mt-3 text-base font-bold text-cham-ink">Clinical Bridge</h3>
                            <p class="mt-1 text-xs leading-5 text-cham-stone">Connecting diagnostics, doctors, oncology centers, and treatment timelines.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-cham-forest/8">
                            <div class="grid size-9 place-items-center rounded-xl bg-cham-gold/15 text-cham-gold-dark font-bold">03</div>
                            <h3 class="font-hero mt-3 text-base font-bold text-cham-ink">Family Support</h3>
                            <p class="mt-1 text-xs leading-5 text-cham-stone">Guiding caregivers through practical logistics, counseling, and peer resilience.</p>
                        </div>
                    </div>

                    <!-- Call To Action -->
                    <div class="rounded-3xl bg-gradient-to-r from-cham-secondary to-cham-blue-900 p-8 sm:p-10 text-white shadow-xl flex flex-col sm:flex-row items-center justify-between gap-6">
                        <div>
                            <h3 class="font-hero text-2xl font-bold">Support Our Work</h3>
                            <p class="mt-1 text-sm text-white/80 max-w-md">Partner with {{ $member->name }} and Project Cham to fund treatment subsidies and support circles.</p>
                        </div>
                        <x-marketing.button-link :href="route('donate')" class="bg-cham-primary hover:bg-cham-primary-hover shrink-0">
                            Support a Child &rarr;
                        </x-marketing.button-link>
                    </div>

                </div>
            </div>

            <!-- Other Care Champions -->
            @if ($otherMembers->isNotEmpty())
                <div class="mt-24 border-t border-cham-forest/10 pt-16">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <p class="text-xs font-bold tracking-wider text-cham-secondary uppercase">Project Cham Multidisciplinary Team</p>
                            <h2 class="font-hero text-2xl sm:text-3xl font-bold text-cham-ink mt-1">Other Care Champions</h2>
                        </div>
                        <a href="{{ route('team') }}" class="text-sm font-bold text-cham-primary hover:text-cham-primary-hover inline-flex items-center gap-1">
                            View All Team Members &rarr;
                        </a>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-3">
                        @foreach ($otherMembers as $other)
                            <a href="{{ route('team.show', $other->slug) }}" class="group rounded-2xl bg-white p-4 shadow-sm ring-1 ring-cham-forest/8 transition duration-300 hover:-translate-y-1 hover:shadow-md flex items-center gap-4">
                                <div class="size-16 shrink-0 overflow-hidden rounded-xl bg-cham-forest/5">
                                    @if ($other->image_url)
                                        <img src="{{ $other->image_url }}" alt="{{ $other->name }}" class="h-full w-full object-cover group-hover:scale-105 transition duration-300" />
                                    @elseif ($other->image_position && in_array($other->image_position, ['0%', '33.333%', '66.667%', '100%']))
                                        <div
                                            class="h-full w-full bg-cover bg-no-repeat group-hover:scale-105 transition duration-300"
                                            style="background-image: url('{{ Vite::asset('resources/images/marketing/project-cham-team-portraits.png') }}'); background-size: 400% auto; background-position: {{ $other->image_position }} 17%;"
                                        ></div>
                                    @else
                                        <div class="flex h-full w-full items-center justify-center bg-[#0D1C15] text-cham-primary font-bold">
                                            {{ $other->initials }}
                                        </div>
                                    @endif
                                </div>
                                <div class="min-w-0 flex-1">
                                    <h3 class="font-hero text-base font-bold text-cham-ink truncate group-hover:text-cham-primary transition-colors">{{ $other->name }}</h3>
                                    <p class="text-xs font-semibold text-cham-secondary uppercase truncate">{{ $other->role }}</p>
                                    <span class="mt-1 text-xs text-cham-primary font-bold inline-block">View Profile &rarr;</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

        </x-marketing.container>
    </section>
</x-marketing.layout>
