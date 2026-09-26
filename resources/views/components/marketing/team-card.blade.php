@props([
    'name',
    'role',
    'slug' => null,
    'imagePosition' => 'center',
    'imageUrl' => null,
    'linkedinUrl' => null,
    'twitterUrl' => null,
    'email' => null,
])

@php
    $profileUrl = $slug ? route('team.show', $slug) : route('team');
@endphp

<div class="group relative flex flex-col">
    <article class="relative flex flex-1 flex-col">
        <!-- Photo Container with Hover Social Overlay -->
        <div class="relative aspect-[1.08/1] overflow-hidden rounded-[1.25rem] bg-cham-forest shadow-[0_16px_40px_rgb(13_28_21_/_0.1)] ring-1 ring-cham-forest/12 transition duration-300 group-hover:-translate-y-1.5 group-hover:shadow-[0_22px_50px_rgb(13_28_21_/_0.18)]">
            <!-- Background / Image -->
            <a href="{{ $profileUrl }}" class="block h-full w-full" aria-label="View {{ $name }} profile">
                @if ($imageUrl)
                    <img src="{{ $imageUrl }}" alt="Portrait of {{ $name }}, {{ $role }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
                @elseif (in_array($imagePosition, ['0%', '33.333%', '66.667%', '100%']))
                    <div
                        class="h-full w-full bg-cover bg-no-repeat transition duration-500 group-hover:scale-105"
                        style="background-image: url('{{ Vite::asset('resources/images/marketing/project-cham-team-portraits.png') }}'); background-size: 400% auto; background-position: {{ $imagePosition }} 17%;"
                        role="img"
                        aria-label="Portrait of {{ $name }}, {{ $role }}"
                    ></div>
                @else
                    <div class="flex h-full w-full flex-col items-center justify-center bg-gradient-to-br from-[#0D1C15] to-[#162e23] text-white p-4">
                        <div class="grid size-12 place-items-center rounded-2xl bg-white/10 text-cham-primary font-hero text-lg font-bold ring-1 ring-white/15">
                            {{ collect(explode(' ', $name))->map(fn($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}
                        </div>
                        <span class="mt-2 text-[0.7rem] font-medium text-white/70">Project Cham Lead</span>
                    </div>
                @endif
            </a>

            <!-- Frosted Glass Social Overlay on Hover (INSIDE container so it NEVER clips!) -->
            <div class="absolute inset-0 flex flex-col items-center justify-center bg-[#0D1C15]/80 p-4 opacity-0 backdrop-blur-xs transition duration-300 group-hover:opacity-100">
                <p class="text-[0.68rem] font-extrabold tracking-wider text-cham-pink-200 uppercase mb-3">Connect with {{ explode(' ', $name)[0] }}</p>
                <div class="flex items-center gap-2.5">
                    @if ($linkedinUrl)
                        <a
                            href="{{ $linkedinUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-secondary shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                            aria-label="{{ $name }} on LinkedIn"
                        >
                            <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5.4 6.7H2.7V17h2.7V6.7ZM4.05 2A1.58 1.58 0 1 0 4 5.16 1.58 1.58 0 0 0 4.05 2ZM17.3 11.1c0-3.1-1.65-4.55-3.86-4.55a3.34 3.34 0 0 0-3.02 1.66V6.7H7.7V17h2.72v-5.1c0-1.35.26-2.66 1.93-2.66 1.65 0 1.67 1.54 1.67 2.75V17h2.73l.55-5.9Z"/>
                            </svg>
                        </a>
                    @else
                        <a
                            href="https://linkedin.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-secondary shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                            aria-label="{{ $name }} on LinkedIn"
                        >
                            <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M5.4 6.7H2.7V17h2.7V6.7ZM4.05 2A1.58 1.58 0 1 0 4 5.16 1.58 1.58 0 0 0 4.05 2ZM17.3 11.1c0-3.1-1.65-4.55-3.86-4.55a3.34 3.34 0 0 0-3.02 1.66V6.7H7.7V17h2.72v-5.1c0-1.35.26-2.66 1.93-2.66 1.65 0 1.67 1.54 1.67 2.75V17h2.73l.55-5.9Z"/>
                            </svg>
                        </a>
                    @endif

                    @if ($twitterUrl)
                        <a
                            href="{{ $twitterUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-ink shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                            aria-label="{{ $name }} on X / Twitter"
                        >
                            <svg class="size-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.7 3H22l-7.2 8.2L23.3 21h-6.6l-5.2-6.8L5.6 21H2.3l7.7-8.8L1.8 3h6.8l4.7 6.2L18.7 3Zm-1.2 16h1.8L7.6 4.9h-2L17.5 19Z"/>
                            </svg>
                        </a>
                    @else
                        <a
                            href="https://x.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-ink shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                            aria-label="{{ $name }} on X"
                        >
                            <svg class="size-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.7 3H22l-7.2 8.2L23.3 21h-6.6l-5.2-6.8L5.6 21H2.3l7.7-8.8L1.8 3h6.8l4.7 6.2L18.7 3Zm-1.2 16h1.8L7.6 4.9h-2L17.5 19Z"/>
                            </svg>
                        </a>
                    @endif

                    @if ($email)
                        <a
                            href="mailto:{{ $email }}"
                            class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-primary shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                            aria-label="Email {{ $name }}"
                        >
                            <svg class="size-4" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                                <rect x="2.8" y="4.5" width="14.4" height="11" rx="2" stroke-width="1.7"/>
                                <path d="m4 6 6 4.5L16 6" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    @else
                        <a
                            href="mailto:contact@projectcham.org"
                            class="marketing-focus-ring grid size-9 place-items-center rounded-full bg-white text-cham-primary shadow-md transition hover:scale-110 hover:bg-cham-primary hover:text-white"
                            aria-label="Email {{ $name }}"
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
                    class="mt-4 inline-flex items-center gap-1.5 rounded-full bg-cham-primary px-3.5 py-1.5 text-xs font-bold text-white shadow-sm transition hover:bg-cham-primary-hover"
                >
                    <span>View Dedicated Page</span>
                    <svg class="size-3" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                        <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Name, Role & Link -->
        <div class="mt-3 rounded-[1rem] bg-white px-4 py-3.5 shadow-[0_10px_28px_rgb(13_28_21_/_0.06)] ring-1 ring-cham-secondary/28 flex items-center justify-between">
            <div class="min-w-0 flex-1 pr-2">
                <h3 class="font-hero text-base leading-tight font-semibold text-cham-ink truncate">
                    <a href="{{ $profileUrl }}" class="hover:text-cham-primary transition-colors">
                        {{ $name }}
                    </a>
                </h3>
                <p class="mt-1 text-[0.82rem] leading-5 text-cham-stone truncate">{{ $role }}</p>
            </div>
            <a
                href="{{ $profileUrl }}"
                class="marketing-focus-ring grid size-8 shrink-0 place-items-center rounded-full bg-cham-paper text-cham-primary transition hover:bg-cham-primary hover:text-white"
                aria-label="View {{ $name }} profile"
            >
                <svg class="size-4" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                    <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </article>
</div>
