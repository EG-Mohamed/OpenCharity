@php
    $systemName = setting('general.system_name') ?: __('Masaa Foundation');
    $logoSetting = setting('branding.logo');
    $logo = filled($logoSetting) ? \Illuminate\Support\Facades\Storage::url($logoSetting) : asset('images/logo.jpg');
@endphp

<nav
    x-data="{ open: false }"
    data-landing-navbar
    class="fixed inset-x-0 top-0 z-50 transition-all duration-300"
>
    <div class="landing-container pt-4">
        <div class="flex items-center justify-between rounded-full border border-white/60 bg-white/80 px-4 py-3 shadow-lg shadow-primary-950/5 backdrop-blur-lg transition-all duration-300 dark:border-white/10 dark:bg-gray-950/80 md:px-6 data-[scrolled=true]:shadow-xl data-[scrolled=true]:shadow-primary-950/10">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                @if ($logo)
                    <span class="flex items-center justify-center rounded-xl bg-white p-1 shadow-sm dark:bg-white">
                        <img src="{{ $logo }}" alt="{{ $systemName }}" class="h-9 w-auto object-contain">
                    </span>
                @else
                    <span class="flex h-11 w-11 items-center justify-center rounded-full bg-primary-500 text-lg font-black text-white shadow-lg shadow-primary-500/30">م</span>
                @endif
                <span class="hidden sm:block">
                    <span class="block text-sm font-medium text-primary-600 dark:text-primary-300">Masaa Foundation</span>
                    <span class="block text-lg font-black leading-tight tracking-tight">{{ $systemName }}</span>
                </span>
            </a>

            <div class="hidden items-center gap-8 lg:flex">
                <a href="{{ route('home') }}#about" class="text-sm font-medium text-gray-600 transition hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-300">{{ __('About us') }}</a>
                <a href="{{ route('home') }}#statistics" class="text-sm font-medium text-gray-600 transition hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-300">{{ __('Impact') }}</a>
                <a href="{{ route('donation-cases') }}" class="text-sm font-medium text-gray-600 transition hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-300">{{ __('Cases') }}</a>
                <a href="{{ route('home') }}#contact" class="text-sm font-medium text-gray-600 transition hover:text-primary-600 dark:text-gray-300 dark:hover:text-primary-300">{{ __('Contact') }}</a>
            </div>

            <div class="hidden items-center gap-3 lg:flex">
                <x-theme-switch/>
                <a href="{{ route('home') }}#donation" class="rounded-full bg-primary-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-primary-500/30 transition hover:bg-primary-600">{{ __('Donate now') }}</a>
            </div>

            <div class="flex items-center gap-2 lg:hidden">
                <x-theme-switch/>
                <button type="button" @click="open = true" class="flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-700 dark:border-white/10 dark:bg-gray-900 dark:text-gray-200" aria-label="{{ __('Open menu') }}">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16M4 12h16M4 17h16" /></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-cloak x-show="open" x-transition.opacity.duration.200ms class="fixed inset-0 z-40 bg-gray-950/50 lg:hidden" @click="open = false"></div>

    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="translate-x-6 opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-6 opacity-0" class="fixed inset-y-0 end-0 z-50 flex w-full max-w-xs flex-col border-s border-white/10 bg-white p-6 shadow-2xl dark:bg-gray-950 lg:hidden">
        <div class="mb-8 flex items-center justify-between">
            <div class="flex items-center gap-3">
                @if ($logo)
                    <span class="flex items-center justify-center rounded-xl bg-white p-1 shadow-sm dark:bg-white">
                        <img src="{{ $logo }}" alt="{{ $systemName }}" class="h-8 w-auto object-contain">
                    </span>
                @else
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-500 text-base font-black text-white">م</span>
                @endif
                <div>
                    <div class="text-sm font-medium text-primary-600 dark:text-primary-300">Masaa Foundation</div>
                    <div class="text-md font-black leading-tight">{{ $systemName }}</div>
                </div>
            </div>
            <button type="button" @click="open = false" class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 text-gray-700 dark:border-white/10 dark:text-gray-200" aria-label="{{ __('Close') }}">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 6l12 12M18 6 6 18" /></svg>
            </button>
        </div>

        <div class="flex flex-1 flex-col gap-3 text-lg font-semibold">
            <a @click="open = false" href="{{ route('home') }}#about" class="rounded-2xl px-4 py-3 text-gray-700 transition hover:bg-primary-50 hover:text-primary-700 dark:text-gray-200 dark:hover:bg-primary-950/30 dark:hover:text-primary-200">{{ __('About us') }}</a>
            <a @click="open = false" href="{{ route('home') }}#statistics" class="rounded-2xl px-4 py-3 text-gray-700 transition hover:bg-primary-50 hover:text-primary-700 dark:text-gray-200 dark:hover:bg-primary-950/30 dark:hover:text-primary-200">{{ __('Impact') }}</a>
            <a @click="open = false" href="{{ route('donation-cases') }}" class="rounded-2xl px-4 py-3 text-gray-700 transition hover:bg-primary-50 hover:text-primary-700 dark:text-gray-200 dark:hover:bg-primary-950/30 dark:hover:text-primary-200">{{ __('Cases') }}</a>
            <a @click="open = false" href="{{ route('home') }}#contact" class="rounded-2xl px-4 py-3 text-gray-700 transition hover:bg-primary-50 hover:text-primary-700 dark:text-gray-200 dark:hover:bg-primary-950/30 dark:hover:text-primary-200">{{ __('Contact') }}</a>
        </div>

        <a @click="open = false" href="{{ route('home') }}#donation" class="mt-6 rounded-full bg-primary-500 px-5 py-3 text-center text-sm font-bold text-white shadow-lg shadow-primary-500/30">{{ __('Donate now') }}</a>
    </div>
</nav>
