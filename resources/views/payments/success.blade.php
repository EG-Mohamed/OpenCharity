<x-app>
    <section class="relative overflow-hidden pb-16 pt-32">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,_rgba(203,50,35,0.12),_transparent_40%)] dark:bg-[radial-gradient(circle_at_top,_rgba(244,109,98,0.14),_transparent_42%)]"></div>
        <div class="landing-container">
            <div class="mx-auto max-w-4xl overflow-hidden rounded-[2.25rem] border border-gray-200/70 bg-white shadow-2xl shadow-primary-950/8 dark:border-white/8 dark:bg-gray-950">
                <div class="relative overflow-hidden bg-linear-to-br from-primary-600 via-primary-500 to-primary-700 px-6 py-8 text-white sm:px-8 sm:py-10">
                    <div class="pointer-events-none absolute inset-0">
                        <div class="absolute -top-12 start-12 h-28 w-28 rounded-full bg-white/10 blur-3xl"></div>
                        <div class="absolute bottom-0 end-0 h-36 w-36 translate-x-1/4 translate-y-1/4 rounded-full bg-primary-200/20 blur-3xl"></div>
                    </div>

                    <div class="relative flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">
                        <div class="max-w-2xl">
                            <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3.5 py-1.5 text-[11px] font-medium tracking-[0.12em] text-white/80 backdrop-blur-sm">
                                <span class="h-1.5 w-1.5 rounded-full bg-primary-100"></span>
                                {{ __('Payment successful') }}
                            </span>
                            <h1 class="mt-4 text-[2rem] font-extrabold leading-[1.15] sm:text-[2.5rem]">{{ __('Thank you for your donation') }}</h1>
                            <p class="mt-3 max-w-xl text-sm leading-7 text-white/80 sm:text-[15px]">{{ __('Your payment has been completed successfully and your support has been recorded.') }}</p>
                        </div>

                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-white/15 bg-white/10 text-white backdrop-blur-sm">
                            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6 px-6 py-6 sm:px-8 sm:py-8 lg:grid-cols-[minmax(0,1.15fr)_minmax(18rem,0.85fr)]">
                    <div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-[1.5rem] bg-gray-50 p-5 dark:bg-white/4">
                                <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Payment reference') }}</div>
                                <div class="mt-2 break-all text-sm font-semibold leading-7 text-gray-900 dark:text-white">{{ $donation->uuid }}</div>
                            </div>
                            <div class="rounded-[1.5rem] bg-gray-50 p-5 dark:bg-white/4">
                                <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Amount paid') }}</div>
                                <div class="mt-2 text-lg font-semibold text-gray-900 dark:text-white">{{ money($donation->amount)->formatPrecise() }}</div>
                            </div>
                            <div class="rounded-[1.5rem] bg-gray-50 p-5 dark:bg-white/4 sm:col-span-2">
                                <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Donation target') }}</div>
                                <div class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $donation->donationTarget?->title ?: __('General donation') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-[1.75rem] border border-gray-200/70 bg-gray-50 p-5 dark:border-white/8 dark:bg-white/4">
                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('What happens next') }}</div>
                        <div class="mt-4 space-y-3">
                            <div class="rounded-[1.25rem] bg-white p-4 dark:bg-gray-950/60">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Your donation was recorded') }}</div>
                                <div class="mt-1 text-[13px] leading-6 text-gray-500 dark:text-gray-400">{{ __('The payment is linked to your donation record and stored successfully.') }}</div>
                            </div>
                            <div class="rounded-[1.25rem] bg-white p-4 dark:bg-gray-950/60">
                                <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('You can keep this reference') }}</div>
                                <div class="mt-1 text-[13px] leading-6 text-gray-500 dark:text-gray-400">{{ __('Use the payment reference if you need to follow up on this contribution later.') }}</div>
                            </div>
                        </div>

                        <div class="mt-5 flex flex-col gap-3">
                            <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-600">{{ __('Back to home') }}</a>
                            <a href="{{ route('donation-cases') }}" class="inline-flex items-center justify-center rounded-full border border-primary-200 bg-white px-5 py-3 text-sm font-medium text-primary-700 transition hover:border-primary-300 hover:bg-primary-50 dark:border-primary-900/50 dark:bg-gray-950 dark:text-primary-200 dark:hover:bg-primary-950/30">{{ __('Browse more cases') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
