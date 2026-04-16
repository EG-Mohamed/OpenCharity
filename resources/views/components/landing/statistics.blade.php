@props(['stats'])

<section id="statistics" class="landing-section">
    <div class="landing-container">
        <div class="relative overflow-hidden rounded-[2.1rem] bg-linear-to-bl from-primary-700 via-primary-600 to-primary-800 px-5 py-10 text-white shadow-2xl shadow-primary-950/20 sm:px-7 lg:px-10 lg:py-11">
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -top-16 start-8 h-40 w-40 rounded-full bg-white/10 blur-3xl"></div>
                <div class="absolute bottom-0 end-0 h-56 w-56 translate-x-1/4 translate-y-1/4 rounded-full bg-primary-300/20 blur-3xl"></div>
                <div class="absolute inset-x-0 top-0 h-px bg-white/20"></div>
            </div>

            <div class="relative grid gap-6 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)] lg:items-end">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3.5 py-1.5 text-[11px] font-medium tracking-[0.12em] text-white/80 backdrop-blur-sm">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary-200"></span>
                        {{ __('أرقام تصنع الفرق') }}
                    </span>
                    <h2 class="mt-4 text-[2rem] font-extrabold leading-[1.25] sm:text-[2.15rem] lg:text-[2.35rem]">{{ __('نقيس أثرنا بما نتركه في حياة الناس') }}</h2>
                </div>

                <div class="rounded-[1.5rem] border border-white/12 bg-white/8 p-4 backdrop-blur-sm sm:p-5">
                    <p class="text-sm font-normal leading-7 text-white/80 sm:text-[15px]">{{ __('كل رقم هنا يعكس قصة دعم حقيقية، وتعاوناً متواصلاً بين المؤسسة والمتبرعين والمتطوعين لخدمة من هم في أمسّ الحاجة.') }}</p>
                    <div class="mt-4 flex items-center gap-2.5 text-[13px] text-white/65">
                        <span class="h-2 w-2 rounded-full bg-primary-200"></span>
                        <span>{{ __('نتائج واضحة، وأثر يصل بكرامة وشفافية.') }}</span>
                    </div>
                </div>
            </div>

            <div class="relative mt-7 grid gap-3.5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($stats as $stat)
                    <div class="group relative overflow-hidden rounded-[1.5rem] border border-white/12 bg-white/10 p-5 shadow-lg shadow-primary-950/10 backdrop-blur-md transition duration-300 hover:-translate-y-1 hover:bg-white/14">
                        <div class="absolute inset-x-0 top-0 h-px bg-white/20"></div>
                        <div class="absolute -end-8 -top-8 h-24 w-24 rounded-full bg-white/10 blur-2xl transition duration-300 group-hover:bg-white/15"></div>

                        <div class="relative flex h-full flex-col justify-between gap-5">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/12 bg-white/10 text-xs font-semibold text-white/80">
                                {{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <div>
                                <div data-counter data-target="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] }}" class="text-[2rem] font-bold tracking-tight text-white sm:text-[2.4rem]">0</div>
                                <div class="mt-2.5 max-w-[13rem] text-sm font-normal leading-6 text-white/78 sm:text-[15px]">{{ $stat['label'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
