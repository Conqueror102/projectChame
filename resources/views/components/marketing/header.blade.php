@php
    $homeIsActive = request()->routeIs('home');
    $aboutIsActive = request()->routeIs('about') || request()->routeIs('team');
    $programsIsActive = request()->routeIs('programs');
    $storiesIsActive = request()->routeIs('stories.*');
    $communityIsActive = request()->routeIs('events.*') || request()->routeIs('gallery');
    $donateIsActive = request()->routeIs('donate');
@endphp

<header class="relative z-50 bg-cham-ink text-white">
    <x-marketing.container :compact="true" class="flex min-h-18 items-center justify-between gap-4">
        <x-marketing.brand :href="route('home')" />

        <nav class="hidden items-center gap-1.5 lg:gap-2 xl:gap-3 text-sm font-semibold text-white/80 lg:flex shrink-0" aria-label="Primary navigation">
            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-3 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0 after:left-3 after:h-0.5 after:w-[calc(100%-1.5rem)] after:bg-cham-primary' => $homeIsActive,
                'text-white/75' => ! $homeIsActive,
            ]) href="{{ route('home') }}">Home</a>

            {{-- About Dropdown --}}
            <div class="relative group">
                <button type="button" @class([
                    'marketing-focus-ring relative inline-flex items-center gap-1 whitespace-nowrap rounded-full px-3 py-2 transition hover:text-white cursor-pointer',
                    'text-cham-primary after:absolute after:bottom-0 after:left-3 after:h-0.5 after:w-[calc(100%-1.5rem)] after:bg-cham-primary' => $aboutIsActive,
                    'text-white/75' => ! $aboutIsActive,
                ])>
                    <span>About</span>
                    <svg class="size-3.5 opacity-70 transition duration-150 group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                    </svg>
                </button>

                <div class="absolute left-0 top-full hidden pt-2 group-hover:block transition duration-150 z-50">
                    <div class="w-48 rounded-2xl border border-white/15 bg-cham-ink p-2 shadow-2xl backdrop-blur-xl">
                        <a href="{{ route('about') }}" @class([
                            'block rounded-xl px-3.5 py-2.5 text-xs font-semibold transition',
                            'bg-white/10 text-cham-primary' => request()->routeIs('about'),
                            'text-white/75 hover:bg-white/10 hover:text-white' => ! request()->routeIs('about'),
                        ])>Who We Are</a>
                        <a href="{{ route('team') }}" @class([
                            'block rounded-xl px-3.5 py-2.5 text-xs font-semibold transition',
                            'bg-white/10 text-cham-primary' => request()->routeIs('team'),
                            'text-white/75 hover:bg-white/10 hover:text-white' => ! request()->routeIs('team'),
                        ])>Our Team &amp; Leadership</a>
                    </div>
                </div>
            </div>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-3 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0 after:left-3 after:h-0.5 after:w-[calc(100%-1.5rem)] after:bg-cham-primary' => $programsIsActive,
                'text-white/75' => ! $programsIsActive,
            ]) href="{{ route('programs') }}">Programs</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-3 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0 after:left-3 after:h-0.5 after:w-[calc(100%-1.5rem)] after:bg-cham-primary' => $storiesIsActive,
                'text-white/75' => ! $storiesIsActive,
            ]) href="{{ route('stories.index') }}">Stories &amp; Guides</a>

            {{-- Community Dropdown --}}
            <div class="relative group">
                <button type="button" @class([
                    'marketing-focus-ring relative inline-flex items-center gap-1 whitespace-nowrap rounded-full px-3 py-2 transition hover:text-white cursor-pointer',
                    'text-cham-primary after:absolute after:bottom-0 after:left-3 after:h-0.5 after:w-[calc(100%-1.5rem)] after:bg-cham-primary' => $communityIsActive,
                    'text-white/75' => ! $communityIsActive,
                ])>
                    <span>Community</span>
                    <svg class="size-3.5 opacity-70 transition duration-150 group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                    </svg>
                </button>

                <div class="absolute left-0 top-full hidden pt-2 group-hover:block transition duration-150 z-50">
                    <div class="w-48 rounded-2xl border border-white/15 bg-cham-ink p-2 shadow-2xl backdrop-blur-xl">
                        <a href="{{ route('events.index') }}" @class([
                            'block rounded-xl px-3.5 py-2.5 text-xs font-semibold transition',
                            'bg-white/10 text-cham-primary' => request()->routeIs('events.*'),
                            'text-white/75 hover:bg-white/10 hover:text-white' => ! request()->routeIs('events.*'),
                        ])>Upcoming Events</a>
                        <a href="{{ route('gallery') }}" @class([
                            'block rounded-xl px-3.5 py-2.5 text-xs font-semibold transition',
                            'bg-white/10 text-cham-primary' => request()->routeIs('gallery'),
                            'text-white/75 hover:bg-white/10 hover:text-white' => ! request()->routeIs('gallery'),
                        ])>Photo Gallery</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="hidden items-center gap-2 xl:gap-3 lg:flex shrink-0">
            @auth
                @if (auth()->user()->isAdmin())
                    <a class="marketing-focus-ring whitespace-nowrap rounded-full px-3 py-1.5 text-xs font-bold text-cham-primary bg-cham-pink-950/60 border border-cham-pink-800 transition hover:bg-cham-pink-900" href="{{ route('dashboard') }}">
                        Admin Panel
                    </a>
                @else
                    <a class="marketing-focus-ring whitespace-nowrap rounded-full px-3 py-2 text-xs xl:text-sm font-semibold text-white/70 transition hover:bg-white/5 hover:text-white" href="{{ route('dashboard') }}">Dashboard</a>
                @endif
            @else
                @if (Route::has('login'))
                    <a class="marketing-focus-ring whitespace-nowrap rounded-full px-2.5 py-2 text-xs xl:text-sm font-semibold text-white/70 transition hover:bg-white/5 hover:text-white" href="{{ route('login') }}">Sign in</a>
                @endif
            @endauth

            <x-marketing.button-link :href="route('donate')" class="whitespace-nowrap px-4 py-2 text-xs xl:text-sm">
                Support a Child
            </x-marketing.button-link>
        </div>

        <details class="group relative lg:hidden">
            <summary class="marketing-focus-ring grid size-10 cursor-pointer list-none place-items-center rounded-full border border-white/20 text-white marker:hidden">
                <span class="sr-only">Open navigation</span>
                <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </summary>

            <nav class="absolute top-12 right-0 z-50 grid w-64 gap-1 rounded-2xl border border-white/15 bg-cham-ink p-3 shadow-2xl" aria-label="Mobile navigation">
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $homeIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $homeIsActive]) href="{{ route('home') }}">Home</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => request()->routeIs('about'), 'text-white/75 hover:bg-white/5 hover:text-white' => ! request()->routeIs('about')]) href="{{ route('about') }}">About Us</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => request()->routeIs('team'), 'text-white/75 hover:bg-white/5 hover:text-white' => ! request()->routeIs('team')]) href="{{ route('team') }}">Our Team</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $programsIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $programsIsActive]) href="{{ route('programs') }}">Programs</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $storiesIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $storiesIsActive]) href="{{ route('stories.index') }}">Stories &amp; Guides</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => request()->routeIs('events.*'), 'text-white/75 hover:bg-white/5 hover:text-white' => ! request()->routeIs('events.*')]) href="{{ route('events.index') }}">Upcoming Events</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => request()->routeIs('gallery'), 'text-white/75 hover:bg-white/5 hover:text-white' => ! request()->routeIs('gallery')]) href="{{ route('gallery') }}">Photo Gallery</a>
                <div class="mt-2 border-t border-white/10 pt-2">
                    <x-marketing.button-link class="w-full justify-center" :href="route('donate')">Support a Child</x-marketing.button-link>
                </div>
            </nav>
        </details>
    </x-marketing.container>
</header>
