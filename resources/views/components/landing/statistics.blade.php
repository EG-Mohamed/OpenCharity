@props(['stats'])

<section id="statistics" class="landing-section">
    <div class="landing-container">
        <div class="overflow-hidden rounded-[2rem] bg-gradient-to-bl from-primary-600 via-primary-500 to-primary-700 px-6 py-12 text-white shadow-2xl shadow-primary-500/20 sm:px-8 lg:px-12">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-semibold tracking-[0.18em] text-white/80">{{ __('أرقام تصنع الفرق') }}</span>
                    <h2 class="mt-5 text-3xl font-black sm:text-4xl ">{{ __('نقيس أثرنا بما نتركه في حياة الناس') }}</h2>
                </div>
                <p class=" text-base leading-8 text-white/80">{{ __('كل رقم هنا يعكس قصة دعم حقيقية، وتعاوناً متواصلاً بين المؤسسة والمتبرعين والمتطوعين لخدمة من هم في أمسّ الحاجة.') }}</p>
            </div>

            <div class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($stats as $stat)
                    <div class="rounded-[1.75rem] border border-white/15 bg-white/10 p-6 backdrop-blur-sm">
                        <div data-counter data-target="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] }}" class="text-4xl font-medium sm:text-5xl">0</div>
                        <div class="mt-4 text-base font-medium text-white/80">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
