@props(['targets'])

<section id="cases" class="landing-section bg-gray-50 dark:bg-gray-900/50">
    <div class="landing-container">
        <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-2xl">
                <span class="landing-section-label">{{ __('حالات نشطة') }}</span>
                <h2 class="mt-6 text-3xl font-black text-gray-900 sm:text-4xl dark:text-white">{{ __('فرص عطاء مفتوحة الآن') }}</h2>
                <p class="mt-4 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('اختر الحالة أو الحملة الأقرب إلى قلبك، واطّلع على التقدم المحقق ونسبة الإنجاز بكل وضوح.') }}</p>
            </div>
            <a href="#donation" class="inline-flex w-fit items-center justify-center rounded-full border border-primary-200 bg-white px-5 py-3 text-sm font-bold text-primary-700 transition hover:border-primary-300 hover:bg-primary-50 dark:border-primary-900/50 dark:bg-gray-950 dark:text-primary-200 dark:hover:bg-primary-950/30">{{ __('ابدأ التبرع') }}</a>
        </div>

        @php
            $displayTargets = $targets->isNotEmpty()
                ? $targets
                : collect([
                    (object) ['title' => __('كفالة أسرة متعففة'), 'description' => __('دعم الاحتياجات الأساسية لأسرة تمر بظرف معيشي صعب.'), 'type' => null, 'goal_amount' => 25000, 'collected_amount' => 14000],
                    (object) ['title' => __('حالة علاج عاجلة'), 'description' => __('المساهمة في تغطية تكاليف العلاج والفحوصات الضرورية.'), 'type' => null, 'goal_amount' => 18000, 'collected_amount' => 9200],
                    (object) ['title' => __('حملة كسوة ودفء'), 'description' => __('تأمين احتياجات موسمية للأسر الأكثر احتياجاً.'), 'type' => null, 'goal_amount' => 32000, 'collected_amount' => 21500],
                ]);
        @endphp

        <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($displayTargets as $target)
                @php
                    $goalAmount = max((float) $target->goal_amount, 1);
                    $collectedAmount = min((float) $target->collected_amount, $goalAmount);
                    $progress = min(($collectedAmount / $goalAmount) * 100, 100);
                    $typeLabel = $target->type?->getLabel() ?? __('مبادرة إنسانية');
                @endphp

                <article class="landing-card overflow-hidden transition hover:-translate-y-1 hover:shadow-xl hover:shadow-primary-950/10">
                    <div class="h-2 bg-gradient-to-l from-primary-400 via-primary-500 to-primary-700"></div>
                    <div class="p-6">
                        <span class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-xs font-semibold text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $typeLabel }}</span>
                        <h3 class="mt-5 text-xl font-black text-gray-900 dark:text-white">{{ $target->title }}</h3>
                        <p class="mt-3 line-clamp-3 min-h-[5.25rem] text-sm leading-7 text-gray-600 dark:text-gray-300">{{ $target->description ?: __('فرصة تبرع مباشرة لتحقيق أثر واضح وسريع للحالة المستفيدة.') }}</p>

                        <div class="mt-6">
                            <div class="mb-2 flex items-center justify-between text-sm font-semibold text-gray-500 dark:text-gray-400">
                                <span>{{ __('نسبة الإنجاز') }}</span>
                                <span>{{ number_format($progress, 0) }}%</span>
                            </div>
                            <div class="h-3 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                                <div class="h-full rounded-full bg-gradient-to-l from-primary-400 to-primary-600" @style(['width: '.$progress.'%'])></div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-end justify-between gap-4">
                            <div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('تم جمع') }}</div>
                                <div class="mt-1 text-lg font-bold text-gray-900 dark:text-white">{{ number_format($collectedAmount, 0) }} {{ __('ج.م') }}</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">{{ __('من أصل') }} {{ number_format($goalAmount, 0) }} {{ __('ج.م') }}</div>
                            </div>
                            <a href="#donation" class="rounded-full bg-primary-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-primary-500/30 transition hover:bg-primary-600">{{ __('تبرع') }}</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
