<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('مؤسسة مسعي') }}</title>
        <meta name="description" content="{{ __('مؤسسة مسعي لدعم الأسر والحالات الإنسانية وصناعة أثر مستدام في المجتمع.') }}">
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
            <main>@yield('content')</main>
            <x-landing.footer />
        </div>
        @yield('scripts')
        @livewire('notifications')

        @filamentScripts
    </body>
</html>
