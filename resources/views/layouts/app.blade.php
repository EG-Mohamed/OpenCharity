<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}" class="scroll-smooth antialiased">
<head>
    @php
        $systemName = setting('general.system_name') ?: __('Masaa Foundation');
        $description = setting('general.description') ?: __('Masaa Foundation supports families and humanitarian cases to create sustainable impact in the community.');
        $favicon = setting('branding.favicon');
        $faviconUrl = filled($favicon) ? \Illuminate\Support\Facades\Storage::url($favicon) : null;
    @endphp
    <meta charset="utf-8">

    <meta name="application-name" content="{{ $systemName }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $systemName }}</title>
    <meta name="description" content="{{ $description }}">
    @if ($faviconUrl)
        <link rel="icon" href="{{ $faviconUrl }}">
    @endif
    <script>
        (() => {
            const theme = localStorage.getItem('masaa-theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (theme === 'dark' || (! theme && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite(['resources/css/app.css', 'resources/js/landing.js'])
    @yield('head')
</head>

<body class="bg-white text-gray-900 selection:bg-primary-200 selection:text-primary-950 dark:bg-gray-950 dark:text-gray-100">
<div class="relative overflow-x-clip">
    <div class="pointer-events-none absolute inset-x-0 top-0 -z-10 h-[42rem] bg-[radial-gradient(circle_at_top,_rgba(203,50,35,0.18),_transparent_52%)] dark:bg-[radial-gradient(circle_at_top,_rgba(244,109,98,0.18),_transparent_48%)]"></div>
    <x-landing.navbar />
    <main>{{ $slot }}</main>
    <x-landing.footer />
</div>
@yield('scripts')
@livewire('notifications')

@filamentScripts
</body>
</html>
