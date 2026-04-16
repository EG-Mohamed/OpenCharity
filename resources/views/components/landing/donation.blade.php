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
                    @livewire('landing.donation-form', ['targets' => $targets])
                </div>
            </div>
        </div>
    </div>
</section>
