@props(['targets'])

<section id="cases" class="landing-section bg-gray-50 dark:bg-gray-900/50">
    <div class="landing-container">
        <div class="flex flex-col gap-5 lg:flex-row  lg:justify-between items-center">
            <div class="max-w-3xl">
                <span class="landing-section-label">{{ __('Active cases') }}</span>
                <h2 class="mt-4 text-[2rem] font-extrabold leading-[1.25] text-gray-900 sm:text-[2.15rem] dark:text-white">{{ __('Open giving opportunities') }}</h2>
                <p class="mt-3 text-sm leading-7 text-gray-600 sm:text-[15px] dark:text-gray-300">{{ __('Choose a case or campaign and see the progress clearly. You can also browse the full cases for more details and donation options.') }}</p>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('donation-cases') }}" class="inline-flex w-fit items-center justify-center rounded-full bg-primary-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-600">{{ __('View all cases') }}</a>
                <a href="#donation" class="inline-flex w-fit items-center justify-center rounded-full border border-primary-200 bg-white px-5 py-3 text-sm font-medium text-primary-700 transition hover:border-primary-300 hover:bg-primary-50 dark:border-primary-900/50 dark:bg-gray-950 dark:text-primary-200 dark:hover:bg-primary-950/30">{{ __('Start donating') }}</a>
            </div>
        </div>

        @php
            $displayTargets = $targets->isNotEmpty()
                ? $targets
                : collect([
                    (object) ['title' => __('Family support sponsorship'), 'description' => __('Support the essential needs of a family facing difficult living conditions.'), 'type' => null, 'goal_amount' => 25000, 'collected_amount' => 14000],
                    (object) ['title' => __('Urgent medical case'), 'description' => __('Help cover treatment costs and necessary medical tests.'), 'type' => null, 'goal_amount' => 18000, 'collected_amount' => 9200],
                    (object) ['title' => __('Warmth and clothing campaign'), 'description' => __('Provide seasonal essentials for families with the greatest need.'), 'type' => null, 'goal_amount' => 32000, 'collected_amount' => 21500],
                ]);
        @endphp

        <div class="mt-8 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($displayTargets as $target)
                @php
                    $goalAmount = max((float) $target->goal_amount, 1);
                    $collectedAmount = min((float) $target->paid_donations_sum, $goalAmount);
                    $progress = min(($collectedAmount / $goalAmount) * 100, 100);
                    $typeLabel = $target->type?->getLabel() ?? __('Giving opportunity');
                @endphp

                <article class="overflow-hidden rounded-[1.6rem] border border-gray-200/70 bg-white p-5 shadow-sm shadow-primary-950/5 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-primary-950/8 dark:border-white/8 dark:bg-gray-950">
                    <div class="flex items-start justify-between gap-3">
                        <span class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-[11px] font-medium text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $typeLabel }}</span>
                    </div>

                    <h3 class="mt-4 text-lg font-bold leading-7 text-gray-900 dark:text-white">{{ $target->title }}</h3>
                    <p class="mt-2 line-clamp-3 min-h-[4.5rem] text-sm leading-6 text-gray-600 dark:text-gray-300">{{ $target->description ?: __('A direct donation opportunity with clear and timely impact for the beneficiary.') }}</p>

                    <div class="mt-5">
                        <div class="mb-2 flex items-center justify-between text-[13px] font-medium text-gray-500 dark:text-gray-400">
                            <span>{{ __('Progress') }}</span>
                            <span>{{ number_format($progress, 0) }}%</span>
                        </div>
                        <div class="h-2 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                            <div class="h-full rounded-full bg-linear-to-l from-primary-400 to-primary-600" @style(['width: '.$progress.'%'])></div>
                        </div>
                    </div>

                    <div class="mt-5 flex items-end justify-between gap-4">
                        <div>
                            <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Collected') }}</div>
                            <div class="mt-1 text-base font-semibold text-gray-900 dark:text-white">{{ money($collectedAmount)->formatPrecise() }}</div>
                            <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Out of') }} {{ money($goalAmount)->formatPrecise() }}</div>
                        </div>
                        <a href="{{ route('donation-cases', ['target' => $target->id, 'type' => $target->type?->value]) }}#donation-form" class="rounded-full bg-primary-500 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-600">{{ __('Donate') }}</a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-6 flex justify-center">
            <a href="{{ route('donation-cases') }}" class="inline-flex items-center justify-center rounded-full border border-primary-200 bg-white px-5 py-3 text-sm font-medium text-primary-700 transition hover:border-primary-300 hover:bg-primary-50 dark:border-primary-900/50 dark:bg-gray-950 dark:text-primary-200 dark:hover:bg-primary-950/30">{{ __('Browse the full cases') }}</a>
        </div>
    </div>
</section>
