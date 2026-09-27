@php
    $homeIsActive = request()->routeIs('home');
    $aboutIsActive = request()->routeIs('about');
    $teamIsActive = request()->routeIs('team');
    $programsIsActive = request()->routeIs('programs');
    $storiesIsActive = request()->routeIs('stories.*');
    $eventsIsActive = request()->routeIs('events.*');
    $galleryIsActive = request()->routeIs('gallery');
    $donateIsActive = request()->routeIs('donate');
@endphp

<header class="relative z-50 bg-cham-ink text-white">
    <x-marketing.container class="flex min-h-18 items-center justify-between gap-3 xl:gap-6">
        <x-marketing.brand :href="route('home')" />

        <nav class="hidden items-center gap-3 lg:gap-3.5 xl:gap-5.5 text-xs xl:text-sm font-semibold text-white/75 lg:flex shrink-0" aria-label="Primary navigation">
            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $homeIsActive,
                'text-white/75' => ! $homeIsActive,
            ]) href="{{ route('home') }}">Home</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $aboutIsActive,
                'text-white/75' => ! $aboutIsActive,
            ]) href="{{ route('about') }}">About</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $teamIsActive,
                'text-white/75' => ! $teamIsActive,
            ]) href="{{ route('team') }}">Team</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $programsIsActive,
                'text-white/75' => ! $programsIsActive,
            ]) href="{{ route('programs') }}">Programs</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $storiesIsActive,
                'text-white/75' => ! $storiesIsActive,
            ]) href="{{ route('stories.index') }}">Learn &amp; Understand</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $eventsIsActive,
                'text-white/75' => ! $eventsIsActive,
            ]) href="{{ route('events.index') }}">Events</a>

            <a @class([
                'marketing-focus-ring relative whitespace-nowrap rounded-full px-1.5 py-2 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $galleryIsActive,
                'text-white/75' => ! $galleryIsActive,
            ]) href="{{ route('gallery') }}">Gallery</a>
        </nav>

        <div class="hidden items-center gap-2 xl:gap-3 lg:flex shrink-0">
            @auth
                @if (auth()->user()->isAdmin())
                    <a class="marketing-focus-ring whitespace-nowrap rounded-full px-2.5 py-1.5 text-xs font-bold text-cham-primary bg-cham-pink-950/60 border border-cham-pink-800 transition hover:bg-cham-pink-900" href="{{ route('dashboard') }}">
                        Admin Panel
                    </a>
                @else
                    <a class="marketing-focus-ring whitespace-nowrap rounded-full px-2.5 py-2 text-xs xl:text-sm font-semibold text-white/70 transition hover:bg-white/5 hover:text-white" href="{{ route('dashboard') }}">Dashboard</a>
                @endif
            @else
                @if (Route::has('login'))
                    <a class="marketing-focus-ring whitespace-nowrap rounded-full px-2.5 py-2 text-xs xl:text-sm font-semibold text-white/70 transition hover:bg-white/5 hover:text-white" href="{{ route('login') }}">Sign in</a>
                @endif
            @endauth

            <x-marketing.button-link :href="route('donate')" class="whitespace-nowrap px-3.5 py-2 text-xs xl:px-4 xl:py-2.5 xl:text-sm">
                <span class="hidden xl:inline">Donate / Support a Child</span>
                <span class="xl:hidden">Donate</span>
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
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $aboutIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $aboutIsActive]) href="{{ route('about') }}">About</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $teamIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $teamIsActive]) href="{{ route('team') }}">Team</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $programsIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $programsIsActive]) href="{{ route('programs') }}">Programs</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $storiesIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $storiesIsActive]) href="{{ route('stories.index') }}">Learn &amp; Understand</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $eventsIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $eventsIsActive]) href="{{ route('events.index') }}">Events</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $galleryIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $galleryIsActive]) href="{{ route('gallery') }}">Gallery</a>
                <div class="mt-2 border-t border-white/10 pt-2">
                    <x-marketing.button-link class="w-full justify-center" :href="route('donate')">Donate / Support a Child</x-marketing.button-link>
                </div>
            </nav>
        </details>
    </x-marketing.container>
</header>
