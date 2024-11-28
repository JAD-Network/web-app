<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="relative min-h-full dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JAD Network - {{ $title ?? 'Crypto Trading Automated' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans text-indigo-950 h-screen bg-[#21030a]">
<section
    class="relative bg-gradient-to-b from-[#25030c] via-[#21030a] to-[#300310] overflow-x-hidden overflow-y-auto h-full"
    x-data="{ mobileNavOpen: false }">
    <div class="container mx-auto px-4">
        <x-landing.layout.nav/>
        {{ $slot }}
        <x-landing.layout.footer/>
    </div>
</section>

</body>
</html>
