<x-app>
    <section class="relative overflow-hidden pb-16 pt-32">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,_rgba(203,50,35,0.14),_transparent_40%)] dark:bg-[radial-gradient(circle_at_top,_rgba(244,109,98,0.16),_transparent_42%)]"></div>
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
                        <a href="#donation-form" class="inline-flex w-full items-center justify-center rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition sm:w-fit">{{ __('Go to donation form') }}</a>
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

                                <a
                                    href="{{ route('donation-cases', ['target' => $target->id, 'type' => $target->type?->value]) }}#donation-form"
                                    class="inline-flex items-center justify-center rounded-full bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition sm:shrink-0"
                                >
                                    {{ __('Donate now') }}
                                </a>
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

                        @livewire('landing.donation-form', ['targets' => $allTargets, 'defaultType' => $defaultType, 'defaultTargetId' => $defaultTargetId], key('donation-form-'.$defaultTargetId.'-'.$defaultType))
                    </div>
                </div>
            </div>

            <div class="mt-10">
                {{ $targets->links() }}
            </div>
        </div>
    </section>
</x-app>
