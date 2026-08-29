@props([
    'compact' => false,
])

<div {{ $attributes->class([
    'mx-auto w-full max-w-[1320px]',
    'px-5 sm:px-8 lg:px-10' => $compact,
    'px-7 sm:px-10 lg:px-14 xl:px-16' => ! $compact,
]) }}>
    {{ $slot }}
</div>
