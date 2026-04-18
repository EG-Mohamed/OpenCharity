<x-app>
    <section class="relative overflow-hidden pb-16 pt-32">
        <div class="absolute inset-0 -z-10"
             x-data
             x-bind:style="$el.closest('html').classList.contains('dark')
                ? 'background: radial-gradient(circle at top, color-mix(in srgb, var(--color-primary-400) 16%, transparent), transparent 42%)'
                : 'background: radial-gradient(circle at top, color-mix(in srgb, var(--color-primary-600) 14%, transparent), transparent 40%)'">
        </div>

        <div class="landing-container">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-2xl">
                    <span class="landing-section-label">{{ __('Donation cases') }}</span>
                    <h1 class="mt-4 text-[2.4rem] font-extrabold leading-[1.2] text-gray-900 sm:text-[3rem] dark:text-white">{{ __('Browse all active donation opportunities') }}</h1>
                    <p class="mt-3 text-sm leading-7 text-gray-600 sm:text-[15px] dark:text-gray-300">{{ __('Choose a case to view full details and donate directly to it.') }}</p>
                </div>
                <div class="flex shrink-0 flex-wrap gap-3">
                    <div class="rounded-[1.25rem] border border-gray-200/70 bg-white px-5 py-3 shadow-sm dark:border-white/8 dark:bg-gray-950">
                        <div class="text-[11px] text-gray-500 dark:text-gray-400">{{ __('Active opportunities') }}</div>
                        <div class="mt-1 text-xl font-bold text-gray-900 dark:text-white">{{ $targets->total() }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($targets as $target)
                    @php
                        $goalAmount = max((float) $target->goal_amount, 1);
                        $collectedAmount = min((float) $target->paid_donations_sum, $goalAmount);
                        $progress = min(($collectedAmount / $goalAmount) * 100, 100);
                        $targetType = $target->type?->getLabel() ?? __('Giving opportunity');
                        $targetContext = $target->charityCase?->code ?: $target->family?->code;
                    @endphp

                    <article class="flex flex-col overflow-hidden rounded-[1.7rem] border border-gray-200/70 bg-white shadow-sm shadow-primary-950/5 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-primary-950/8 dark:border-white/8 dark:bg-gray-950">
                        <div class="flex flex-1 flex-col p-5">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <span class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-[11px] font-medium text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $targetType }}</span>
                                @if ($targetContext)
                                    <bdi class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-[11px] font-medium text-gray-600 dark:bg-white/8 dark:text-gray-300"># {{ $targetContext }}</bdi>
                                @endif
                            </div>

                            <h2 class="mt-4 text-base font-bold leading-6 text-gray-900 dark:text-white">{{ $target->title }}</h2>

                            @if ($target->description)
                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500 dark:text-gray-400">{{ $target->description }}</p>
                            @endif

                            <div class="mt-5 flex-1"></div>

                            <div class="mt-4">
                                <div class="mb-2 flex items-center justify-between text-[12px] text-gray-500 dark:text-gray-400">
                                    <span>{{ money($collectedAmount)->formatPrecise() }} {{ __('of') }} {{ money($goalAmount)->formatPrecise() }}</span>
                                    <span class="font-semibold text-primary-600 dark:text-primary-400">{{ number_format($progress, 0) }}%</span>
                                </div>
                                <div class="h-1.5 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                    <div class="h-full rounded-full bg-linear-to-l from-primary-400 to-primary-600" @style(['width: '.$progress.'%'])></div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 p-4 dark:border-white/8">
                            <a href="{{ route('donation-target', $target) }}" class="inline-flex w-full items-center justify-center rounded-full bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-600">
                                {{ __('View case & donate') }}
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $targets->links() }}
            </div>
        </div>
    </section>
</x-app>
