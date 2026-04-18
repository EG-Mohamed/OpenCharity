@props(['targets'])

<section id="donation" class="landing-section">
    <div class="landing-container">
        <div class="mx-auto max-w-3xl space-y-5">
            <div class="max-w-2xl">
                <span class="landing-section-label">{{ __('Donation form') }}</span>
                <h2 class="mt-4 text-[2rem] font-extrabold leading-[1.25] text-gray-900 sm:text-[2.15rem] dark:text-white">{{ __('Start your donation directly') }}</h2>
            </div>

            <div class="relative overflow-hidden rounded-[2rem] bg-linear-to-br from-primary-100 via-white to-primary-50 p-5 shadow-xl shadow-primary-950/8 sm:p-6 dark:border dark:border-white/8 dark:bg-linear-to-br dark:from-gray-950 dark:via-primary-950/35 dark:to-gray-900">
                <div class="pointer-events-none absolute inset-0">
                    <div class="absolute inset-x-12 top-0 h-28 rounded-full bg-primary-300/20 blur-3xl dark:bg-primary-500/12"></div>
                    <div class="absolute bottom-0 start-10 h-24 w-24 rounded-full bg-primary-200/20 blur-3xl dark:bg-primary-600/10"></div>
                    <div class="absolute end-8 top-12 h-28 w-28 rounded-full bg-primary-100/80 blur-3xl dark:bg-white/4"></div>
                </div>

                <div class="relative rounded-[1.8rem] border border-white/70 bg-white/96 p-3 backdrop-blur-sm dark:border-white/10 dark:bg-gray-950/92 dark:shadow-2xl dark:shadow-black/20">
                    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-primary-300/40 to-transparent dark:via-primary-400/25"></div>
                    @if(setting('donations.online_enabled', true))
                        @livewire('landing.donation-form', ['targets' => $targets])
                    @else
                        <div class="flex flex-col items-center gap-4 px-4 py-10 text-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-amber-50 dark:bg-amber-950/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" /></svg>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-gray-900 dark:text-white">{{ __('Online donation is currently unavailable') }}</p>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ __('Online donation is not available at the moment. Please contact us to donate directly.') }}</p>
                            </div>
                            <div class="flex flex-wrap justify-center gap-3">
                                @if(setting('contact.primary_phone'))
                                    <bdi>
                                        <a href="tel:{{ setting('contact.primary_phone') }}" class="inline-flex items-center gap-1.5 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50 dark:border-white/10 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" /></svg>
                                            {{ setting('contact.primary_phone') }}
                                        </a>
                                    </bdi>
                                @endif
                                @if(setting('contact.email'))
                                    <a href="mailto:{{ setting('contact.email') }}" class="inline-flex items-center gap-1.5 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-50 dark:border-white/10 dark:bg-gray-900 dark:text-gray-200 dark:hover:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                                        {{ setting('contact.email') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
