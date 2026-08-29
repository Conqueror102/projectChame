@php
    $homeIsActive = request()->routeIs('home');
    $aboutIsActive = request()->routeIs('about');
    $programsIsActive = request()->routeIs('programs');
@endphp

<header class="relative z-50 bg-cham-ink text-white">
    <x-marketing.container class="flex min-h-18 items-center justify-between gap-6">
        <x-marketing.brand :href="route('home')" />

        <nav class="hidden items-center gap-7 text-sm font-semibold text-white/75 lg:flex" aria-label="Primary navigation">
            <a @class([
                'marketing-focus-ring relative rounded-full px-1 py-2.5 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $homeIsActive,
                'text-white/75' => ! $homeIsActive,
            ]) href="{{ route('home') }}">Home</a>
            <a @class([
                'marketing-focus-ring relative rounded-full px-1 py-2.5 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $aboutIsActive,
                'text-white/75' => ! $aboutIsActive,
            ]) href="{{ route('about') }}">About</a>
            <a @class([
                'marketing-focus-ring relative rounded-full px-1 py-2.5 transition hover:text-white',
                'text-cham-primary after:absolute after:bottom-0.5 after:left-1 after:h-0.5 after:w-[calc(100%-0.5rem)] after:bg-cham-primary' => $programsIsActive,
                'text-white/75' => ! $programsIsActive,
            ]) href="{{ route('programs') }}">Programs</a>
            <a class="marketing-focus-ring rounded-full px-1 py-2.5 transition hover:text-white" href="{{ route('home') }}#impact">Impact</a>
            <a class="marketing-focus-ring rounded-full px-1 py-2.5 transition hover:text-white" href="{{ route('home') }}#get-involved">Get involved</a>
        </nav>

        <div class="hidden items-center gap-3 sm:flex">
            @if (Route::has('login'))
                <a class="marketing-focus-ring rounded-full px-3 py-2.5 text-sm font-semibold text-white/70 transition hover:bg-white/5 hover:text-white" href="{{ route('login') }}">Sign in</a>
            @endif

            <x-marketing.button-link :href="route('home').'#get-involved'">
                Support a child
            </x-marketing.button-link>
        </div>

        <details class="group relative sm:hidden">
            <summary class="marketing-focus-ring grid size-10 cursor-pointer list-none place-items-center rounded-full border border-white/20 text-white marker:hidden">
                <span class="sr-only">Open navigation</span>
                <svg class="size-5 group-open:hidden" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <svg class="hidden size-5 group-open:block" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </summary>

            <nav class="absolute top-12 right-0 grid w-64 gap-1 rounded-2xl border border-white/15 bg-cham-ink p-3 shadow-2xl" aria-label="Mobile navigation">
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $homeIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $homeIsActive]) href="{{ route('home') }}">Home</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $aboutIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $aboutIsActive]) href="{{ route('about') }}">About</a>
                <a @class(['rounded-full px-4 py-3 text-sm font-semibold', 'bg-white/5 text-cham-primary' => $programsIsActive, 'text-white/75 hover:bg-white/5 hover:text-white' => ! $programsIsActive]) href="{{ route('programs') }}">Programs</a>
                <a class="rounded-full px-4 py-3 text-sm font-semibold text-white/75 hover:bg-white/5 hover:text-white" href="{{ route('home') }}#impact">Impact</a>
                <x-marketing.button-link class="mt-2" :href="route('home').'#get-involved'">Support a child</x-marketing.button-link>
            </nav>
        </details>
    </x-marketing.container>
</header>
