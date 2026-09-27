@props([
    'href',
])

<a
    href="{{ $href }}"
    aria-label="Project Cham home"
    {{ $attributes->class(['marketing-focus-ring inline-flex items-center gap-3 rounded-sm text-white group shrink-0']) }}
>
    <img
        src="{{ asset('images/project-cham-logo.png') }}"
        alt="Project Cham"
        class="h-8 sm:h-9 lg:h-9.5 w-auto object-contain transition duration-200 group-hover:scale-[1.03]"
        width="128"
        height="44"
        loading="eager"
    >

    <span class="hidden xl:grid leading-none border-l border-white/20 pl-3">
        <span class="text-[0.52rem] font-bold tracking-[0.2em] text-cham-gold uppercase whitespace-nowrap">Care · Hope · Impact</span>
        <span class="mt-0.5 text-[0.6rem] font-medium tracking-wide text-white/60 whitespace-nowrap">Childhood Cancer Support</span>
    </span>

    <span class="sr-only">Project Cham - Care · Hope · Impact</span>
</a>
