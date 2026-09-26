@props([
    'date',
    'readTime',
    'title',
    'excerpt',
    'image',
    'alt',
    'href',
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

<article class="overflow-hidden rounded-[1.25rem] border border-cham-blue-200 bg-white">
    <a href="{{ $href }}" class="marketing-focus-ring block overflow-hidden rounded-t-[1.2rem]">
        <img
            class="h-64 w-full object-cover transition duration-500 hover:scale-[1.025]"
            src="{{ $resolvedImage }}"
            alt="{{ $alt }}"
            width="720"
            height="500"
            loading="lazy"
        >
    </a>

    <div class="flex min-h-60 flex-col p-5">
        <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs text-cham-stone">
            <span class="inline-flex items-center gap-2">
                <svg class="size-4 text-cham-secondary" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M5 3v3M15 3v3M3.5 7.5h13M4 5h12v11H4V5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ $date }}
            </span>

            <span class="inline-flex items-center gap-2">
                <svg class="size-4 text-cham-secondary" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <circle cx="10" cy="10" r="6.5" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M10 6.5V10l2.4 1.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ $readTime }}
            </span>
        </div>

        <h3 class="font-hero mt-4 text-xl leading-7 font-semibold text-cham-ink">
            <a href="{{ $href }}" class="marketing-focus-ring rounded-sm hover:text-cham-secondary">{{ $title }}</a>
        </h3>

        <p class="mt-3 text-sm leading-6 text-cham-stone">{{ $excerpt }}</p>

        <div class="mt-auto flex items-center justify-between gap-4 border-t border-cham-line pt-4">
            <span class="inline-flex items-center gap-2 text-xs font-bold text-cham-stone">
                <span class="grid size-8 place-items-center rounded-full bg-cham-pink-50 text-cham-primary" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                    </svg>
                </span>
                Project Cham
            </span>

            <a href="{{ $href }}" class="marketing-focus-ring rounded-sm text-sm font-bold text-cham-secondary underline decoration-1 underline-offset-4 hover:text-cham-primary">
                Read story
            </a>
        </div>
    </div>
</article>
