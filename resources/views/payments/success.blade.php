<x-app>
    <section class="relative overflow-hidden pb-16 pt-32">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,_rgba(203,50,35,0.12),_transparent_40%)] dark:bg-[radial-gradient(circle_at_top,_rgba(244,109,98,0.14),_transparent_42%)]"></div>
        <div class="landing-container">
            <div class="mx-auto max-w-3xl rounded-[2rem] border border-gray-200/70 bg-white p-6 shadow-xl shadow-primary-950/8 sm:p-8 dark:border-white/8 dark:bg-gray-950">
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary-50 text-primary-600 dark:bg-primary-950/30 dark:text-primary-300">
                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                </div>

                <div class="mt-5">
                    <span class="landing-section-label">{{ __('Payment successful') }}</span>
                    <h1 class="mt-4 text-[2rem] font-extrabold leading-[1.2] text-gray-900 sm:text-[2.4rem] dark:text-white">{{ __('Thank you for your donation') }}</h1>
                    <p class="mt-3 text-sm leading-7 text-gray-600 sm:text-[15px] dark:text-gray-300">{{ __('Your payment has been completed successfully and your support has been recorded.') }}</p>
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-[1.5rem] bg-gray-50 p-5 dark:bg-white/4">
                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Payment ID') }}</div>
                        <div class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $donation->id }}</div>
                    </div>
                    <div class="rounded-[1.5rem] bg-gray-50 p-5 dark:bg-white/4">
                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Amount paid') }}</div>
                        <div class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ money($donation->amount)->formatPrecise() }}</div>
                    </div>
                    <div class="rounded-[1.5rem] bg-gray-50 p-5 dark:bg-white/4 sm:col-span-2">
                        <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Donation target') }}</div>
                        <div class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $donation->donationTarget?->title ?: __('General donation') }}</div>
                    </div>
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-600">{{ __('Back to home') }}</a>
                    <a href="{{ route('donation-cases') }}" class="inline-flex items-center justify-center rounded-full border border-primary-200 bg-white px-5 py-3 text-sm font-medium text-primary-700 transition hover:border-primary-300 hover:bg-primary-50 dark:border-primary-900/50 dark:bg-gray-950 dark:text-primary-200 dark:hover:bg-primary-950/30">{{ __('Browse more cases') }}</a>
                </div>
            </div>
        </div>
    </section>
</x-app>
