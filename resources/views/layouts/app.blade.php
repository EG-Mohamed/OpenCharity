<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ (app()->getLocale() == 'ar') ? 'rtl' : 'ltr' }}" class="scroll-smooth antialiased">
<head>
    @php
        $systemName = setting('general.system_name') ?: __('Masaa Foundation');
        $favicon = setting('branding.favicon');
        $faviconUrl = filled($favicon) ? \Illuminate\Support\Facades\Storage::url($favicon) : null;
        $primaryColor = setting('branding.primary_color');
        $primaryPalette = filled($primaryColor) ? \Filament\Support\Colors\Color::generateV3Palette($primaryColor) : null;
    @endphp
    <meta charset="utf-8">

    <meta name="application-name" content="{{ $systemName }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="{{ setting('branding.primary_color') ?: '#cb3223' }}">

    {!! \Artesaos\SEOTools\Facades\SEOTools::generate() !!}

    <link rel="alternate" hreflang="ar" href="{{ url()->current() }}">
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
        @if($primaryPalette)
        :root {
            @foreach($primaryPalette as $shade => $value)
            --color-primary-{{ $shade }}: {{ $value }};
            @endforeach
        }
        @endif
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
