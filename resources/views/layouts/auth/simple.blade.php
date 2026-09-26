<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        <div class="bg-background flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2.5 font-medium group text-center" wire:navigate>
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#0D1C15] p-2 shadow-md ring-1 ring-white/10 transition-transform group-hover:scale-105">
                        <x-app-logo-icon class="size-8" />
                    </span>
                    <span class="font-display text-xl font-bold tracking-tight text-neutral-900 dark:text-white">Project Cham</span>
                    <span class="sr-only">{{ config('app.name', 'Project Cham') }}</span>
                </a>
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
