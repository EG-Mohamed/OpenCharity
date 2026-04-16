@php
    $systemName = setting('general.system_name') ?: __('Masaa Foundation');
    $description = setting('general.description') ?: __('We create real humanitarian impact through careful case management and complete transparency at every step.');
    $address = setting('contact.address') ?: __('Cairo, Arab Republic of Egypt');
    $primaryPhone = setting('contact.primary_phone') ?: '+20 100 000 0000';
    $secondaryPhone = setting('contact.secondary_phone');
    $email = setting('contact.email') ?: 'support@masaa.test';
    $latitude = setting('contact.latitude');
    $longitude = setting('contact.longitude');
    $locationUrl = filled($latitude) && filled($longitude) ? 'https://www.google.com/maps?q=' . $latitude . ',' . $longitude : null;
    $socialLinks = collect(setting('contact.social_links') ?: []);
@endphp

<footer id="contact" class="bg-gray-950 text-gray-400">
    <div class="landing-container py-16">
        <div class="grid gap-10 md:grid-cols-3">

            <div class="md:col-span-1">
                <div class="text-xl font-black text-white">{{ $systemName }}</div>
                <p class="mt-3 text-sm leading-7">{{ $description }}</p>

                @if ($socialLinks->isNotEmpty())
                    <div class="mt-6 flex items-center gap-3">
                        @foreach ($socialLinks as $socialLink)
                            @if (filled(data_get($socialLink, 'url')) && filled(data_get($socialLink, 'icon')))
                                <a href="{{ data_get($socialLink, 'url') }}" target="_blank" rel="noopener noreferrer" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/10 bg-white/5 transition hover:border-primary-500/50 hover:bg-primary-500/10 hover:text-primary-400">
                                    <x-icon name="{{ data_get($socialLink, 'icon') }}" class="h-4 w-4"/>
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <div class="text-sm font-black tracking-widest text-white">{{ __('Quick links') }}</div>
                <div class="mt-5 flex flex-col gap-3 text-sm">
                    <a href="#about" class="transition hover:text-white">{{ __('About us') }}</a>
                    <a href="#services" class="transition hover:text-white">{{ __('Services') }}</a>
                    <a href="#cases" class="transition hover:text-white">{{ __('Cases') }}</a>
                    <a href="#donation" class="transition hover:text-white">{{ __('Donation') }}</a>
                </div>
            </div>

            <div>
                <div class="text-sm font-black tracking-widest text-white">{{ __('Contact us') }}</div>
                <div class="mt-5 flex flex-col gap-4 text-sm">
                    <div class="flex items-start gap-3">
                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
                        </svg>
                        @if ($locationUrl)
                            <a href="{{ $locationUrl }}" target="_blank" rel="noopener noreferrer" class="leading-6 transition hover:text-white">{{ $address }}</a>
                        @else
                            <span class="leading-6">{{ $address }}</span>
                        @endif
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="h-4 w-4 shrink-0 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z"/>
                        </svg>
                        <bdi class="flex flex-col gap-1">
                            <a href="tel:{{ $primaryPhone }}">{{ $primaryPhone }}</a>
                        </bdi>
                    </div>
                    @if (filled($secondaryPhone))
                        <div class="flex items-center gap-3">
                            <svg class="h-4 w-4 shrink-0 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z"/>
                            </svg>
                            <bdi class="flex flex-col gap-1">
                                <a href="tel:{{ $secondaryPhone }}">{{ $secondaryPhone }}</a>
                            </bdi>
                        </div>
                    @endif

                    <div class="flex items-center gap-3">
                        <svg class="h-4 w-4 shrink-0 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
                        </svg>
                        <a href="mailto:{{ $email }}" dir="ltr">{{ $email }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="border-t border-white/8">
        <div class="landing-container flex flex-col items-center justify-between gap-3 py-5 text-xs sm:flex-row">
            <span>© {{ now()->year }} {{ $systemName }} - {{ __('All rights reserved') }}</span>
            <span>
                {{ __('Designed and developed by') }}
                <a href="https://msaied.com" target="_blank" class="font-semibold text-primary-400 transition hover:text-primary-300">Mohamed Said</a>
            </span>
        </div>
    </div>
</footer>
