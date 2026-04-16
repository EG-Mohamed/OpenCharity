@props(['caseTypes', 'assistanceTypes'])

<section id="services" class="landing-section bg-gradient-to-b from-transparent to-primary-50/40 dark:to-primary-950/10">
    <div class="landing-container">
        <div class="mx-auto max-w-3xl text-center">
            <span class="landing-section-label">{{ __('خدماتنا') }}</span>
            <h2 class="mt-6 text-3xl font-black text-gray-900 sm:text-4xl dark:text-white">{{ __('حلول إنسانية مرنة تبدأ من فهم الاحتياج') }}</h2>
            <p class="mt-5 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('نقدّم دعماً متنوعاً يتكيّف مع نوع الحالة ودرجة الأولوية، مع مسارات واضحة لتقديم المساعدة ومتابعة أثرها.') }}</p>
        </div>

        <div class="mt-14 grid gap-10 xl:grid-cols-2">
            <div>
                <div class="mb-6 flex items-center justify-between gap-4">
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white">{{ __('أنواع الحالات') }}</h3>
                    <span class="rounded-full bg-primary-50 px-3 py-1 text-sm font-semibold text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $caseTypes->count() }} {{ __('فئة') }}</span>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    @foreach ($caseTypes as $caseType)
                        <div class="landing-card border-s-4 border-s-primary-500 p-6 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-primary-950/10">
                            <div class="text-xl font-bold text-gray-900 dark:text-white">{{ $caseType->name }}</div>
                            <p class="mt-3 text-sm leading-7 text-gray-600 dark:text-gray-300">{{ $caseType->description ?: __('تصنيف متخصص لتحديد مسار الدعم المناسب وتوجيه العناية للحالة بالشكل الأمثل.') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div>
                <div class="mb-6 flex items-center justify-between gap-4">
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white">{{ __('أنواع المساعدات') }}</h3>
                    <span class="rounded-full bg-primary-50 px-3 py-1 text-sm font-semibold text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $assistanceTypes->count() }} {{ __('خدمة') }}</span>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    @foreach ($assistanceTypes as $assistanceType)
                        <div class="landing-card border-t-4 border-t-primary-500 p-6 transition hover:-translate-y-1 hover:shadow-lg hover:shadow-primary-950/10">
                            <div class="flex items-start justify-between gap-3">
                                <div class="text-xl font-bold text-gray-900 dark:text-white">{{ $assistanceType->name }}</div>
                                <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-600 dark:bg-gray-800 dark:text-gray-300">{{ $assistanceType->unit_type?->value }}</span>
                            </div>
                            <p class="mt-3 text-sm leading-7 text-gray-600 dark:text-gray-300">{{ $assistanceType->description ?: __('دعم مصمم لتلبية الاحتياج الفعلي سواء كان مالياً أو عينياً أو خدمياً حسب طبيعة الحالة.') }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
