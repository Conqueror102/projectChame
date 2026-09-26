@props([
    'time',
    'date',
    'location',
    'title',
    'image',
    'alt',
    'href',
    'action' => 'View event',
    'imagePosition' => 'center',
])

@php
    $resolvedImage = $image ?? '';
    if (empty($resolvedImage)) {
        $resolvedImage = Vite::asset('resources/images/marketing/project-cham-impact-awareness.png');
    } elseif (str_starts_with($resolvedImage, 'resources/')) {
        $resolvedImage = Vite::asset($resolvedImage);
    } elseif (str_starts_with($resolvedImage, 'http://') || str_starts_with($resolvedImage, 'https://')) {
        // Keep as is
    } else {
        $resolvedImage = asset(ltrim($resolvedImage, '/'));
    }
@endphp

<article
    {{ $attributes->class(['group w-[82vw] max-w-[18rem] shrink-0 snap-start overflow-hidden rounded-[1.15rem] bg-cham-blue-950 shadow-[0_18px_45px_rgb(0_0_0_/_0.18)] sm:w-[17rem] lg:w-auto lg:max-w-none']) }}
>
    <div class="relative aspect-[5/4] overflow-hidden bg-cham-forest">
        <img
            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]"
            style="object-position: {{ $imagePosition }}"
            src="{{ $resolvedImage }}"
            alt="{{ $alt }}"
            width="1536"
            height="1229"
            loading="lazy"
        >

        <span
            class="pointer-events-none absolute -top-4 -left-5 h-[5.6rem] w-[10.5rem] -rotate-2 bg-cham-ink/90"
            style="clip-path: polygon(0 0, 100% 0, 87% 18%, 96% 31%, 83% 43%, 91% 57%, 73% 67%, 82% 82%, 61% 92%, 68% 100%, 0 89%);"
            aria-hidden="true"
        ></span>

        <span class="absolute top-4 left-4 inline-flex items-center gap-2 text-[0.7rem] font-semibold text-white">
            <svg class="size-3.5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5"/>
                <path d="M10 6v4l2.5 1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            {{ $time }}
        </span>
    </div>

    <div class="flex min-h-[9rem] flex-col bg-cham-blue-950 px-4 pt-3 pb-3.5">
        <div class="flex items-center justify-between gap-3 text-[0.68rem] font-medium text-white/60">
            <span class="inline-flex min-w-0 items-center gap-1.5">
                <svg class="size-3.5 shrink-0" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 6.5h12M6.5 3v3.5M13.5 3v3.5M5 5h10a1 1 0 0 1 1 1v9H4V6a1 1 0 0 1 1-1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                {{ $date }}
            </span>

            <span class="inline-flex min-w-0 items-center gap-1.5 text-right">
                <svg class="size-3.5 shrink-0" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M10 17s5-4.6 5-9A5 5 0 0 0 5 8c0 4.4 5 9 5 9Z" stroke="currentColor" stroke-width="1.5"/>
                    <circle cx="10" cy="8" r="1.6" fill="currentColor"/>
                </svg>
                {{ $location }}
            </span>
        </div>

        <h3 class="font-hero mt-3 text-base leading-snug font-semibold text-white">
            {{ $title }}
        </h3>

        <a class="marketing-focus-ring mt-3 inline-flex w-fit items-center text-sm font-extrabold text-cham-gold underline decoration-cham-gold/45 underline-offset-4 transition hover:text-white" href="{{ $href }}">
            {{ $action }}
        </a>
    </div>
</article>
