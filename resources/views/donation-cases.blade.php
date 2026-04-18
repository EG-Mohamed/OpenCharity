<x-app>
    <section class="relative overflow-hidden pb-16 pt-32">
        <div class="absolute inset-0 -z-10"
     x-data
     x-bind:style="$el.closest('html').classList.contains('dark')
        ? 'background: radial-gradient(circle at top, color-mix(in srgb, var(--color-primary-400) 16%, transparent), transparent 42%)'
        : 'background: radial-gradient(circle at top, color-mix(in srgb, var(--color-primary-600) 14%, transparent), transparent 40%)'">
</div>
        <div class="landing-container">
            <div class="max-w-3xl">
                <span class="landing-section-label">{{ __('Donation cases') }}</span>
                <h1 class="mt-4 text-[2.4rem] font-extrabold leading-[1.2] text-gray-900 sm:text-[3rem] dark:text-white">{{ __('Browse all active donation opportunities') }}</h1>
                <p class="mt-3 text-sm leading-7 text-gray-600 sm:text-[15px] dark:text-gray-300">{{ __('Select the case that fits your intention, then move directly to the donation form with the correct target already selected.') }}</p>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-3 xl:grid-cols-4">
                <div class="rounded-[1.5rem] border border-gray-200/70 bg-white p-5 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Visible cases') }}</div>
                    <div class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">{{ $targets->count() }}</div>
                </div>
                <div class="rounded-[1.5rem] border border-gray-200/70 bg-white p-5 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('All active opportunities') }}</div>
                    <div class="mt-2 text-2xl font-bold text-gray-900 dark:text-white">{{ $allTargets->count() }}</div>
                </div>
                <div class="rounded-[1.5rem] border border-gray-200/70 bg-white p-5 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950 sm:col-span-1 xl:col-span-2">
                    <div class="flex h-full flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Selected target') }}</div>
                            <div class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $selectedTarget?->title ?: __('General donation') }}</div>
                        </div>
                        @if(setting('donations.online_enabled', true))
                            <a href="#donation-form" class="inline-flex w-full items-center justify-center rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition sm:w-fit">{{ __('Go to donation form') }}</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mt-8 grid gap-6 xl:grid-cols-[1.35fr_0.65fr]">
                <div class="space-y-3.5">
                    @foreach ($targets as $target)

                        @php
                            $goalAmount = max((float) $target->goal_amount, 1);
                            $collectedAmount = min((float) $target->paid_donations_sum, $goalAmount);
                            $progress = min(($collectedAmount / $goalAmount) * 100, 100);
                            $targetType = $target->type?->getLabel() ?? __('Giving opportunity');
                            $targetContext = $target->charityCase?->code ?: $target->family?->code;
                        @endphp

                        <article class="overflow-hidden rounded-[1.7rem] border border-gray-200/70 bg-white p-4 shadow-sm shadow-primary-950/5 sm:p-5 dark:border-white/8 dark:bg-gray-950">
                            <div class="grid gap-4 lg:grid-cols-[minmax(0,1fr)_auto] lg:items-center">
                                <div class="min-w-0">
                                    <div class="flex flex-wrap items-center gap-2.5 justify-between">
                                        <span class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-[11px] font-medium text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $targetType }}</span>
                                        @if ($targetContext)
                                            <bdi class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-[11px] font-medium text-primary-700 dark:bg-primary-950/30 dark:text-primary-200"># {{ $targetContext }}</bdi>
                                        @endif
                                    </div>

                                    <h2 class="mt-3 text-lg font-bold leading-7 text-gray-900 dark:text-white">{{ $target->title }}</h2>

                                    @if ($target->description)
                                        <p class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-300">{{ $target->description }}</p>
                                    @endif
                                </div>

                                <div class="rounded-[1.25rem] bg-gray-50 p-4 dark:bg-white/4 lg:min-w-[13.5rem]">
                                    <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Collected') }}</div>
                                    <div class="mt-1 text-base font-semibold text-gray-900 dark:text-white">{{ money($collectedAmount)->formatPrecise() }}</div>
                                    <div class="mt-1 text-[13px] text-gray-500 dark:text-gray-400">{{ __('Out of') }} {{ money($goalAmount)->formatPrecise() }}</div>
                                </div>
                            </div>

                            <div class="mt-4 flex flex-col gap-3 border-t border-gray-100 pt-4 dark:border-white/8 sm:flex-row sm:items-center sm:justify-between">
                                <div class="min-w-0 flex-1">
                                    <div class="mb-2 flex items-center justify-between text-[13px] font-medium text-gray-500 dark:text-gray-400">
                                        <span>{{ __('Progress') }}</span>
                                        <span>{{ number_format($progress, 0) }}%</span>
                                    </div>
                                    <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                        <div class="h-full rounded-full bg-linear-to-l from-primary-400 to-primary-600" @style(['width: '.$progress.'%'])></div>
                                    </div>
                                </div>

                                @if(setting('donations.online_enabled', true))
                                    <a
                                        href="{{ route('donation-cases', ['target' => $target->id, 'type' => $target->type?->value]) }}#donation-form"
                                        class="inline-flex items-center justify-center rounded-full bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition sm:shrink-0"
                                    >
                                        {{ __('Donate now') }}
                                    </a>
                                @else
                                    <span class="inline-flex items-center rounded-full border border-amber-200 bg-amber-50 px-3 py-2 text-xs font-medium text-amber-700 dark:border-amber-900/40 dark:bg-amber-950/20 dark:text-amber-400 sm:shrink-0">{{ __('Contact us to donate') }}</span>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>

                <div id="donation-form" class="xl:sticky xl:top-28 xl:max-h-[calc(100vh-8rem)] xl:self-start xl:overflow-y-auto">
                    <div class="rounded-[1.75rem] border border-gray-200/70 bg-white p-5 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                        <div class="mb-4">
                            <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Donation form') }}</div>
                            <div class="mt-2 text-lg font-bold text-gray-900 dark:text-white">{{ $selectedTarget?->title ?: __('Complete your donation') }}</div>
                        </div>

                        @if(setting('donations.online_enabled', true))
                            @livewire('landing.donation-form', ['targets' => $allTargets, 'defaultType' => $defaultType, 'defaultTargetId' => $defaultTargetId], key('donation-form-'.$defaultTargetId.'-'.$defaultType))
                        @else
                            <div class="flex flex-col items-center gap-4 py-8 text-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-amber-50 dark:bg-amber-950/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" /></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Online donation is currently unavailable') }}</p>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ __('Online donation is not available at the moment. Please contact us to donate directly.') }}</p>
                                </div>
                                <div class="flex flex-col gap-2 w-full">
                                    @if(setting('contact.primary_phone'))
                                        <a href="tel:{{ setting('contact.primary_phone') }}" class="inline-flex items-center justify-center gap-1.5 rounded-full border border-gray-200 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100 dark:border-white/10 dark:bg-white/5 dark:text-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" /></svg>
                                            {{ setting('contact.primary_phone') }}
                                        </a>
                                    @endif
                                    @if(setting('contact.email'))
                                        <a href="mailto:{{ setting('contact.email') }}" class="inline-flex items-center justify-center gap-1.5 rounded-full border border-gray-200 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100 dark:border-white/10 dark:bg-white/5 dark:text-gray-200">
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

            <div class="mt-10">
                {{ $targets->links() }}
            </div>
        </div>
    </section>
</x-app>
