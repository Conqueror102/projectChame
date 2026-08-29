@props([
    'id',
    'label',
    'title',
    'description',
    'detail',
    'image',
    'alt',
    'href',
    'action',
    'imagePosition' => 'center',
])

<article
    id="{{ $id }}"
    data-involvement-card
    data-scroll-card
    {{ $attributes->class(['group flex w-[82vw] max-w-[22rem] shrink-0 snap-start flex-col overflow-hidden rounded-[1.5rem] border border-[#abd4c4] bg-white shadow-[0_18px_50px_rgb(13_28_21_/_0.08)] sm:w-[21rem] lg:w-[22rem]']) }}
>
    <div class="relative aspect-[4/3] overflow-hidden bg-cham-paper">
        <img
            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]"
            style="object-position: {{ $imagePosition }}"
            src="{{ Vite::asset($image) }}"
            alt="{{ $alt }}"
            width="1536"
            height="1024"
            loading="lazy"
        >

        <span class="absolute top-4 right-4 inline-flex rounded-full bg-cham-gold px-4 py-2 text-xs font-extrabold text-cham-ink shadow-sm">
            {{ $label }}
        </span>
    </div>

    <div class="flex min-h-[15.5rem] flex-1 flex-col p-5">
        <h3 class="font-hero text-xl leading-tight font-semibold tracking-[-0.025em] text-cham-ink">
            {{ $title }}
        </h3>

        <p class="mt-3 text-sm leading-6 text-cham-stone">
            {{ $description }}
        </p>

        <div class="mt-5 flex items-center gap-2 border-y border-cham-line py-3 text-xs font-bold text-cham-forest">
            <span class="grid size-7 shrink-0 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                <svg class="size-3.5" viewBox="0 0 20 20" fill="none">
                    <path d="M5 10.5 8.2 14 15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            {{ $detail }}
        </div>

        <div class="mt-auto flex items-center justify-between gap-4 pt-4">
            <a class="marketing-focus-ring inline-flex items-center gap-2 text-sm font-extrabold text-cham-secondary underline decoration-cham-secondary/30 underline-offset-4 transition hover:text-cham-ink" href="{{ $href }}">
                {{ $action }}
                <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <span class="inline-flex items-center gap-2 text-xs font-bold text-cham-stone">
                <span class="grid size-8 place-items-center rounded-full bg-cham-ink text-cham-gold" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                    </svg>
                </span>
                Project Cham
            </span>
        </div>
    </div>
</article>
