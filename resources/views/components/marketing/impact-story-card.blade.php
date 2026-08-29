@props([
    'category',
    'title',
    'image',
    'alt',
    'focus',
    'href',
    'imagePosition' => 'center',
])

<article {{ $attributes->class(['group flex h-full flex-col gap-3 transition duration-300 hover:-translate-y-1']) }}>
    <div class="relative aspect-[16/10] overflow-hidden rounded-[1.5rem] bg-cham-paper shadow-[0_16px_40px_rgb(13_28_21_/_0.08)]">
        <img
            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]"
            style="object-position: {{ $imagePosition }}"
            src="{{ Vite::asset($image) }}"
            alt="{{ $alt }}"
            width="1456"
            height="1092"
            loading="lazy"
        >

        <span class="absolute top-0 left-0 inline-flex items-center gap-2 rounded-br-[1.75rem] bg-cham-ink/92 px-5 py-3 text-xs font-bold tracking-wide text-white shadow-md backdrop-blur-sm">
            <svg class="size-4 text-cham-gold" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.6"/>
                <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{ $category }}
        </span>
    </div>

    <div class="flex min-h-[12.5rem] flex-1 flex-col rounded-[1.5rem] border border-[#abd4c4] bg-white p-5 shadow-[0_12px_35px_rgb(13_28_21_/_0.06)]">
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs font-semibold text-cham-stone">
            <span class="inline-flex items-center gap-2">
                <svg class="size-4 text-cham-secondary" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M10 17s5-4.6 5-9A5 5 0 0 0 5 8c0 4.4 5 9 5 9Z" stroke="currentColor" stroke-width="1.7"/>
                    <circle cx="10" cy="8" r="1.7" fill="currentColor"/>
                </svg>
                {{ $focus }}
            </span>

            <span class="inline-flex items-center gap-2">
                <svg class="size-4 text-cham-secondary" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M5 10.5 8.2 14 15 6.5" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Outcome-led
            </span>
        </div>

        <h3 class="font-hero mt-4 text-[1.35rem] leading-tight font-semibold tracking-[-0.025em] text-cham-ink">{{ $title }}</h3>

        <div class="mt-auto flex items-center justify-between gap-4 border-t border-cham-line pt-4">
            <span class="inline-flex items-center gap-2.5 text-xs font-bold text-cham-stone">
                <span class="grid size-8 place-items-center rounded-full bg-cham-gold text-cham-ink" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                    </svg>
                </span>
                Project Cham
            </span>

            <a class="marketing-focus-ring inline-flex items-center gap-2 text-sm font-extrabold text-cham-secondary underline decoration-cham-secondary/30 underline-offset-4 transition hover:text-cham-ink" href="{{ $href }}">
                View impact
                <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</article>
