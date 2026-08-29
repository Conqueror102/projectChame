@props([
    'initials',
    'supporter',
    'focus',
    'type',
    'timing',
])

<article
    data-scroll-card
    {{ $attributes->class(['flex h-[12.5rem] w-[78vw] max-w-[17rem] shrink-0 snap-start flex-col rounded-[1.15rem] border border-cham-blue-500/35 bg-white/[0.055] p-4 shadow-[0_14px_36px_rgb(0_0_0_/_0.12)] backdrop-blur-sm sm:w-[16.5rem] lg:w-[17rem]']) }}
>
    <div class="grid size-12 place-items-center self-center rounded-full bg-cham-secondary font-hero text-base font-semibold text-white shadow-[0_8px_20px_rgb(10_99_199_/_0.2)]" aria-hidden="true">
        {{ $initials }}
    </div>

    <div class="mt-4 flex items-center justify-between gap-3">
        <h3 class="font-hero text-base font-semibold text-white">{{ $supporter }}</h3>

        <span class="rounded-full bg-white/[0.07] px-2.5 py-1 text-[0.7rem] font-bold text-white/80">
            {{ $focus }}
        </span>
    </div>

    <div class="mt-auto flex items-center justify-between gap-3 border-t border-white/10 pt-3 text-xs">
        <p class="min-w-0 text-white/65">
            Support: <span class="font-bold text-white">{{ $type }}</span>
        </p>

        <p class="shrink-0 text-[0.7rem] font-extrabold text-cham-gold">{{ $timing }}</p>
    </div>
</article>
