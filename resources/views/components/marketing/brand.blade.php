@props([
    'href',
])

<a
    href="{{ $href }}"
    aria-label="Project Cham home"
    {{ $attributes->class(['marketing-focus-ring inline-flex items-center gap-3 rounded-sm text-white group']) }}
>
    <img
        src="{{ asset('images/project-cham-logo.png') }}"
        alt="Project Cham"
        class="h-9 sm:h-10.5 w-auto object-contain transition duration-200 group-hover:scale-[1.03]"
        width="132"
        height="45"
        loading="eager"
    >

    <span class="hidden sm:grid leading-none border-l border-white/20 pl-3">
        <span class="text-[0.54rem] font-bold tracking-[0.22em] text-cham-gold uppercase">Care · Hope · Impact</span>
        <span class="mt-1 text-[0.62rem] font-medium tracking-wide text-white/60">Childhood Cancer Support</span>
    </span>

    <span class="sr-only">Project Cham - Care · Hope · Impact</span>
</a>
