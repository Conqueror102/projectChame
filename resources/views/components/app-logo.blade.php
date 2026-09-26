@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand :name="config('app.name', 'Project Cham')" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-lg bg-[#0D1C15] p-1 shadow-xs ring-1 ring-white/10">
            <x-app-logo-icon class="size-6" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand :name="config('app.name', 'Project Cham')" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-8 items-center justify-center rounded-lg bg-[#0D1C15] p-1 shadow-xs ring-1 ring-white/10">
            <x-app-logo-icon class="size-6" />
        </x-slot>
    </flux:brand>
@endif
