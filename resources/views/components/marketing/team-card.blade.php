@props([
    'name',
    'role',
    'imagePosition',
])

<div class="group relative">
    <div
        class="absolute top-7 right-0 z-0 flex w-12 -translate-x-1 flex-col items-center gap-2 rounded-r-2xl bg-cham-secondary px-2 py-3 text-white opacity-0 shadow-[0_14px_30px_rgb(13_28_21_/_0.2)] transition duration-300 ease-out group-hover:translate-x-9 group-hover:opacity-100 group-focus-within:translate-x-9 group-focus-within:opacity-100"
        aria-label="{{ $name }} social links"
    >
        <a class="marketing-focus-ring grid size-7 place-items-center rounded-full bg-white text-cham-secondary transition hover:bg-cham-primary hover:text-white" href="#team" aria-label="{{ $name }} on LinkedIn">
            <svg class="size-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M5.4 6.7H2.7V17h2.7V6.7ZM4.05 2A1.58 1.58 0 1 0 4 5.16 1.58 1.58 0 0 0 4.05 2ZM17.3 11.1c0-3.1-1.65-4.55-3.86-4.55a3.34 3.34 0 0 0-3.02 1.66V6.7H7.7V17h2.72v-5.1c0-1.35.26-2.66 1.93-2.66 1.65 0 1.67 1.54 1.67 2.75V17h2.73l.55-5.9Z"/>
            </svg>
        </a>

        <a class="marketing-focus-ring grid size-7 place-items-center rounded-full bg-white text-cham-secondary transition hover:bg-cham-primary hover:text-white" href="#team" aria-label="{{ $name }} on Instagram">
            <svg class="size-3.5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <rect x="3" y="3" width="14" height="14" rx="4" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="10" cy="10" r="3.2" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="14.4" cy="5.7" r="1" fill="currentColor"/>
            </svg>
        </a>

        <a class="marketing-focus-ring grid size-7 place-items-center rounded-full bg-white text-cham-secondary transition hover:bg-cham-primary hover:text-white" href="#team" aria-label="Email {{ $name }}">
            <svg class="size-3.5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <rect x="2.8" y="4.5" width="14.4" height="11" rx="2" stroke="currentColor" stroke-width="1.7"/>
                <path d="m4 6 6 4.5L16 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>

    <article class="relative z-10">
        <div
            class="aspect-[1.08/1] rounded-[1.15rem] bg-cham-forest bg-no-repeat shadow-[0_16px_40px_rgb(13_28_21_/_0.1)] ring-1 ring-cham-forest/12 transition duration-300 group-hover:-translate-y-1 group-hover:shadow-[0_22px_50px_rgb(13_28_21_/_0.16)]"
            style="background-image: url('{{ Vite::asset('resources/images/marketing/project-cham-team-portraits.png') }}'); background-size: 400% auto; background-position: {{ $imagePosition }} 17%;"
            role="img"
            aria-label="Portrait of {{ $name }}, {{ $role }}"
        ></div>

        <div class="mt-3 rounded-[1rem] bg-white px-4 py-3.5 shadow-[0_10px_28px_rgb(13_28_21_/_0.06)] ring-1 ring-cham-secondary/28">
            <h3 class="font-hero text-base leading-tight font-semibold text-cham-ink">{{ $name }}</h3>
            <p class="mt-1.5 text-[0.82rem] leading-5 text-cham-stone">{{ $role }}</p>
        </div>
    </article>
</div>
