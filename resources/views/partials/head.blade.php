<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Project Cham') : config('app.name', 'Project Cham') }}
</title>

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ filled($title ?? null) ? $title.' - '.config('app.name', 'Project Cham') : config('app.name', 'Project Cham') }}">
<meta property="og:description" content="Supporting children living with cancer and their families across Nigeria with awareness, clinical access, psychosocial care, and advocacy.">
<meta property="og:image" content="{{ asset('og-image.png') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Project CHAM - Care · Hope · Impact">

<!-- Twitter / X -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ filled($title ?? null) ? $title.' - '.config('app.name', 'Project Cham') : config('app.name', 'Project Cham') }}">
<meta name="twitter:description" content="Supporting children living with cancer and their families across Nigeria with awareness, clinical access, psychosocial care, and advocacy.">
<meta name="twitter:image" content="{{ asset('og-image.png') }}">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

@fonts

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
