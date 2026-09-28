@props([
    'title' => 'Project Cham',
    'description' => 'Structured support, advocacy, and access to care for children battling cancer and their families.',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $description }}">
        <meta name="theme-color" content="#0d1c15">

        <title>{{ $title }}</title>

        <!-- Open Graph / Facebook / WhatsApp -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:image" content="{{ asset('og-image.png') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Project CHAM - Care · Hope · Impact">

        <!-- Twitter / X -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $title }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ asset('og-image.png') }}">

        <!-- Favicon & App Icons (Cache-busted) -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=20260928">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v=20260928">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}?v=20260928">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=20260928">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=20260928">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}?v=20260928">
        <meta name="theme-color" content="#0D1C15">

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-w-80 overflow-x-clip bg-cham-paper font-sans text-cham-ink antialiased selection:bg-cham-gold selection:text-cham-ink">
        <x-marketing.header />

        <main>
            {{ $slot }}
        </main>

        <x-marketing.footer />
    </body>
</html>
