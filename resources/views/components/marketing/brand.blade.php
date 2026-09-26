@props([
    'href',
])

<a
    href="{{ $href }}"
    aria-label="Project Cham home"
    {{ $attributes->class(['marketing-focus-ring inline-flex items-center gap-3 rounded-sm text-white']) }}
>
    <svg class="size-9 shrink-0" viewBox="0 0 48 48" fill="none" aria-hidden="true">
        <path class="fill-cham-primary" d="M24 42C18.2 36.5 10 30.3 10 20.6 10 13.8 15.2 9 21 9c3 0 5.8 1.4 7.5 3.8C30.2 10.4 33 9 36 9c1 0 2 .1 2.9.4-1.5 14.8-7.2 25-14.9 32.6Z"/>
        <path class="fill-white" d="M25.4 40.5C20.4 35.6 14 30.2 14 22.4c0-5.1 3.7-8.8 8.3-8.8 2.6 0 5 1.3 6.4 3.6 1.5-2.3 3.8-3.6 6.5-3.6 1.2 0 2.4.3 3.4.8-2.1 11.6-6.8 20.1-13.2 26.1Z"/>
        <circle class="fill-cham-secondary" cx="37.5" cy="7.5" r="3.5"/>
    </svg>

    <span class="grid leading-none">
        <span class="font-display text-lg font-bold tracking-tight">Project Cham</span>
        <span class="mt-1 text-[0.52rem] font-semibold tracking-[0.2em] text-white/60 uppercase">Care · Hope · Impact</span>
    </span>
</a>
