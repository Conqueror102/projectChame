@props([
    'href',
    'variant' => 'primary',
])

<a
    href="{{ $href }}"
    {{ $attributes->class([
        'marketing-focus-ring inline-flex min-h-12 items-center justify-center gap-2.5 rounded-full px-6 text-sm font-bold transition duration-200 hover:-translate-y-0.5',
        'bg-cham-gold text-cham-ink shadow-[0_8px_20px_rgb(13_28_21_/_0.12)] hover:bg-cham-gold-dark' => $variant === 'primary',
        'bg-cham-secondary text-white shadow-[0_8px_20px_rgb(10_99_199_/_0.2)] hover:bg-cham-secondary-hover' => $variant === 'secondary',
        'border border-cham-line bg-white text-cham-ink shadow-[0_8px_20px_rgb(10_35_68_/_0.1)] hover:bg-cham-blue-50' => $variant === 'light',
        'border border-white/20 bg-white/5 text-white hover:bg-white/10' => $variant === 'outline',
    ]) }}
>
    {{ $slot }}

    <svg class="size-4 shrink-0" viewBox="0 0 20 20" fill="none" aria-hidden="true">
        <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</a>
