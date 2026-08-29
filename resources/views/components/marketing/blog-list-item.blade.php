@props([
    'date',
    'readTime',
    'title',
    'image',
    'alt',
    'href',
])

<article class="grid grid-cols-[7.5rem_minmax(0,1fr)] items-center gap-4">
    <a href="{{ $href }}" class="marketing-focus-ring block overflow-hidden rounded-xl">
        <img
            class="h-24 w-full object-cover transition duration-500 hover:scale-[1.04]"
            src="{{ Vite::asset($image) }}"
            alt="{{ $alt }}"
            width="300"
            height="220"
            loading="lazy"
        >
    </a>

    <div class="min-w-0">
        <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-[0.7rem] text-cham-stone">
            <span>{{ $date }}</span>
            <span aria-hidden="true">•</span>
            <span>{{ $readTime }}</span>
        </div>

        <h3 class="font-hero mt-2 text-[0.95rem] leading-5 font-semibold text-cham-ink">
            <a href="{{ $href }}" class="marketing-focus-ring rounded-sm hover:text-cham-secondary">{{ $title }}</a>
        </h3>
    </div>
</article>
