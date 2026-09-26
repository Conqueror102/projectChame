<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">
        <div class="relative grid h-dvh flex-col items-center justify-center px-8 sm:px-0 lg:max-w-none lg:grid-cols-2 lg:px-0">
            <div class="bg-muted relative hidden h-full flex-col p-10 text-white lg:flex dark:border-e dark:border-neutral-800">
                <div class="absolute inset-0 bg-neutral-900"></div>
                <a href="{{ route('home') }}" class="relative z-20 flex items-center gap-3 text-lg font-medium group" wire:navigate>
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#0D1C15] p-2 ring-1 ring-white/10 transition-transform group-hover:scale-105">
                        <x-app-logo-icon class="size-7" />
                    </span>
                    <span class="font-display text-xl font-bold tracking-tight text-white">{{ config('app.name', 'Project Cham') }}</span>
                </a>

                @php
                    [$message, $author] = str(Illuminate\Foundation\Inspiring::quotes()->random())->explode('-');
                @endphp

                <div class="relative z-20 mt-auto">
                    <blockquote class="space-y-2">
                        <flux:heading size="lg">&ldquo;{{ trim($message) }}&rdquo;</flux:heading>
                        <footer><flux:heading>{{ trim($author) }}</flux:heading></footer>
                    </blockquote>
                </div>
            </div>
            <div class="w-full lg:p-8">
                <div class="mx-auto flex w-full flex-col justify-center space-y-6 sm:w-[350px]">
                    <a href="{{ route('home') }}" class="z-20 flex flex-col items-center gap-2.5 font-medium group lg:hidden text-center" wire:navigate>
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#0D1C15] p-2 shadow-md ring-1 ring-white/10 transition-transform group-hover:scale-105">
                            <x-app-logo-icon class="size-8" />
                        </span>

                        <span class="font-display text-xl font-bold tracking-tight text-neutral-900 dark:text-white">Project Cham</span>
                        <span class="sr-only">{{ config('app.name', 'Project Cham') }}</span>
                    </a>
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
