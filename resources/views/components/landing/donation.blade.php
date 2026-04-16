@props(['targets'])

<section id="donation" class="landing-section">
    <div class="landing-container">
        <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr] lg:gap-12">
            <div class="rounded-[2rem] bg-gradient-to-br from-primary-950 via-primary-900 to-primary-700 p-8 text-white shadow-2xl shadow-primary-950/20 sm:p-10">
                <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-semibold tracking-[0.18em] text-white/80">{{ __('مساحة العطاء') }}</span>
                <h2 class="mt-6 text-3xl font-black sm:text-4xl">{{ __('تبرع أنيق، سريع، وموجّه إلى حيث يصنع الفرق') }}</h2>
                <p class="mt-5 text-lg leading-8 text-white/80">{{ __('صممنا تجربة التبرع لتكون واضحة ومطمئنة، مع خيارات متنوعة تناسب نيتك في الدعم، سواء كان عاماً أو موجهاً إلى أسرة أو حالة أو حملة.') }}</p>

                <div class="mt-10 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm">
                        <div class="text-lg font-bold">{{ __('ثقة ووضوح') }}</div>
                        <p class="mt-2 text-sm leading-7 text-white/75">{{ __('كل اختيار داخل النموذج مبني ليقرّبك من الاحتياج الحقيقي بواجهة بسيطة ومباشرة.') }}</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/10 p-5 backdrop-blur-sm">
                        <div class="text-lg font-bold">{{ __('مرونة كاملة') }}</div>
                        <p class="mt-2 text-sm leading-7 text-white/75">{{ __('اختر مبلغاً سريعاً أو اكتب ما يناسبك، وحدد طريقة التبرع التي تفضّلها.') }}</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                @livewire('landing.donation-form', ['targets' => $targets])

                <a href="{{ route('donation-cases') }}" class="inline-flex w-full items-center justify-center rounded-full border border-primary-200 bg-white px-5 py-3 text-sm font-bold text-primary-700 transition hover:border-primary-300 hover:bg-primary-50 dark:border-primary-900/50 dark:bg-gray-950 dark:text-primary-200 dark:hover:bg-primary-950/30">
                    {{ __('استعرض صفحة حالات التبرع') }}
                </a>
            </div>
        </div>
    </div>
</section>
