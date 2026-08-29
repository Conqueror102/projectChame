@props([
    'title',
    'description',
    'image',
    'alt',
    'imagePosition' => 'center',
])

<article {{ $attributes->class(['group relative isolate aspect-[5/6] overflow-hidden rounded-[2rem] bg-cham-ink shadow-[0_22px_55px_rgb(13_28_21_/_0.14)] lg:h-[29rem] lg:aspect-auto xl:h-[31rem]']) }}>
    <img
        class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]"
        style="object-position: {{ $imagePosition }}"
        src="{{ Vite::asset($image) }}"
        alt="{{ $alt }}"
        width="1092"
        height="1456"
        loading="lazy"
    >

    <div class="absolute inset-0 bg-gradient-to-t from-cham-ink/55 via-transparent to-transparent" aria-hidden="true"></div>

    <div class="absolute inset-x-4 bottom-4 overflow-visible rounded-[1.6rem] border border-white/25 bg-cham-ink/70 px-5 pt-9 pb-5 text-center text-white shadow-[0_18px_45px_rgb(13_28_21_/_0.28),inset_0_1px_0_rgb(255_255_255_/_0.24)] ring-1 ring-white/10 backdrop-blur-xl backdrop-saturate-150 sm:inset-x-5 sm:bottom-5 sm:px-6">
        <span class="pointer-events-none absolute inset-x-8 top-0 h-px bg-gradient-to-r from-transparent via-white/70 to-transparent" aria-hidden="true"></span>
        <span class="pointer-events-none absolute -top-12 -right-6 size-24 rounded-full bg-white/10 blur-2xl" aria-hidden="true"></span>

        <span class="absolute top-0 left-1/2 z-10 grid size-12 -translate-x-1/2 -translate-y-1/2 place-items-center rounded-full border-4 border-cham-pink-50 bg-cham-gold text-white shadow-md" aria-hidden="true">
            {{ $icon }}
        </span>

        <h3 class="font-hero relative z-10 text-xl font-semibold tracking-[-0.02em]">{{ $title }}</h3>
        <p class="relative z-10 mt-2 text-sm leading-6 text-white/80">{{ $description }}</p>
    </div>
</article>
