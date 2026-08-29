@props([
    'image',
    'alt',
    'eyebrow',
    'title',
    'number',
    'imagePosition' => 'center',
])

<figure
    {{ $attributes->class(['group relative isolate min-h-0 overflow-hidden rounded-[1.5rem] bg-cham-blue-950 shadow-[0_18px_50px_rgb(10_35_68_/_0.14)]']) }}
>
    <img
        class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-[1.045]"
        style="object-position: {{ $imagePosition }}"
        src="{{ Vite::asset($image) }}"
        alt="{{ $alt }}"
        width="1536"
        height="1024"
        loading="lazy"
    >

    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-cham-blue-950 via-cham-blue-950/8 to-transparent" aria-hidden="true"></div>
    <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-white/15" aria-hidden="true"></div>

    <div class="absolute inset-x-0 top-0 flex items-center justify-between p-4 sm:p-5">
        <span class="grid size-9 place-items-center rounded-full border border-white/20 bg-cham-ink/35 text-[0.68rem] font-extrabold tracking-[0.08em] text-white backdrop-blur-md">
            {{ $number }}
        </span>

        <span class="grid size-9 translate-y-1 place-items-center rounded-full bg-white text-cham-secondary opacity-0 shadow-lg transition duration-300 group-hover:translate-y-0 group-hover:opacity-100" aria-hidden="true">
            <svg class="size-4" viewBox="0 0 20 20" fill="none">
                <path d="M6 14 14 6m-6 0h6v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
    </div>

    <figcaption class="absolute inset-x-0 bottom-0 p-4 text-white sm:p-5">
        <p class="text-[0.65rem] font-extrabold tracking-[0.12em] text-cham-pink-300 uppercase">
            {{ $eyebrow }}
        </p>
        <h3 class="font-hero mt-1.5 max-w-sm text-base leading-tight font-semibold tracking-[-0.02em] sm:text-xl">
            {{ $title }}
        </h3>
    </figcaption>
</figure>
