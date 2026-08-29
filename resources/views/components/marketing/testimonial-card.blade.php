@props([
    'quote',
    'source',
    'meta',
    'initials',
])

<article data-scroll-card class="relative flex w-full shrink-0 snap-start flex-col px-6 pt-6 pb-5 sm:px-7 sm:pt-7 sm:pb-5">
    <span class="font-hero absolute top-0 right-6 text-[4.25rem] leading-none font-bold text-cham-primary sm:right-7" aria-hidden="true">“</span>

    <div class="flex items-center gap-1 text-cham-secondary" aria-label="Five out of five stars">
        @for ($star = 0; $star < 5; $star++)
            <svg class="size-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="m10 2.4 2.2 4.5 5 .7-3.6 3.5.9 5-4.5-2.4-4.5 2.4.9-5-3.6-3.5 5-.7L10 2.4Z"/>
            </svg>
        @endfor
    </div>

    <blockquote class="mt-4 max-w-xl text-sm leading-6 text-cham-ink/80">
        “{{ $quote }}”
    </blockquote>

    <footer class="mt-4 flex items-center gap-3 border-t border-cham-line pt-4">
        <span class="grid size-9 shrink-0 place-items-center rounded-full bg-cham-blue-100 font-hero text-xs font-semibold text-cham-secondary" aria-hidden="true">
            {{ $initials }}
        </span>

        <span>
            <cite class="font-hero block text-sm font-semibold not-italic text-cham-ink">{{ $source }}</cite>
            <span class="mt-0.5 block text-xs text-cham-stone">{{ $meta }}</span>
        </span>
    </footer>
</article>
