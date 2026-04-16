<section id="about" class="landing-section">
    <div class="landing-container">
        <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">

            <div class="relative">
                <div class="overflow-hidden rounded-[2.5rem]"
                     style="background-image: url('{{ asset('images/landing/about.jpg') }}'); background-size: cover; background-position: center; min-height: 30rem;">
                    <div class="absolute inset-0 rounded-[2.5rem] bg-linear-to-t from-primary-950/80 via-primary-950/10 to-transparent"></div>
                </div>

                <div class="absolute bottom-6 start-6 end-6 rounded-2xl border border-white/15 bg-white/10 p-5 shadow-xl backdrop-blur-md">
                    <div class="flex items-center gap-4">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary-500">
                            <x-heroicon-o-shield-check class="h-5 w-5 text-white"/>
                        </div>
                        <div>
                            <div class="font-bold text-white">{{ __('موثوق ومعتمد') }}</div>
                            <div class="text-sm text-white/75">{{ __('إدارة احترافية وشفافية كاملة في كل خطوة') }}</div>
                        </div>
                    </div>
                </div>

                <div class="absolute -top-4 -end-4 hidden h-16 w-16 items-center justify-center rounded-2xl bg-primary-700 shadow-xl shadow-primary-950/30 lg:flex">
                    <x-heroicon-c-heart class="h-8 w-8 text-white"/>
                </div>
            </div>

            <div>
                <span class="landing-section-label">{{ __('من نحن') }}</span>
                <h2 class="mt-5 text-3xl font-black leading-snug tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    {{ __('عطاء منظم يصنع') }}
                    <span class="text-primary-500">{{ __('أثراً حقيقياً') }}</span>
                </h2>
                <p class="mt-5 text-base leading-8 text-gray-500 dark:text-gray-400">
                    {{ __('نربط الخير بمن يستحقه من خلال إدارة دقيقة للحالات، وزيارات ميدانية، وبرامج دعم مدروسة تُراعي الأولوية والكرامة.') }}
                </p>

                <div class="mt-10 flex flex-col gap-6">
                    <div class="flex items-start gap-5">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary-500">
                            <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-base font-bold text-gray-900 dark:text-white">{{ __('رسالتنا') }}</div>
                            <p class="mt-1.5 text-sm leading-7 text-gray-500 dark:text-gray-400">{{ __('تمكين الأسر من تجاوز ظروفها عبر تدخلات مدروسة وسريعة الأثر.') }}</p>
                        </div>
                    </div>

                    <div class="h-px bg-gray-100 dark:bg-white/8"></div>

                    <div class="flex items-start gap-5">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary-100 dark:bg-primary-950/60">
                            <svg class="h-5 w-5 text-primary-600 dark:text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-base font-bold text-gray-900 dark:text-white">{{ __('رؤيتنا') }}</div>
                            <p class="mt-1.5 text-sm leading-7 text-gray-500 dark:text-gray-400">{{ __('منظومة خيرية عصرية تُدار بكفاءة وتُلهم المجتمع للمشاركة المستدامة.') }}</p>
                        </div>
                    </div>

                    <div class="h-px bg-gray-100 dark:bg-white/8"></div>

                    <div class="flex items-start gap-5">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary-100 dark:bg-primary-950/60">
                            <svg class="h-5 w-5 text-primary-600 dark:text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 0 1 21.75 8.25Z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-base font-bold text-gray-900 dark:text-white">{{ __('قيمنا') }}</div>
                            <p class="mt-1.5 text-sm leading-7 text-gray-500 dark:text-gray-400">{{ __('الشفافية والكرامة والاحترافية في كل تعامل مع المستفيد والمتبرع على حدٍّ سواء.') }}</p>
                        </div>
                    </div>
                </div>

                <a href="#donation" class="mt-10 inline-flex items-center gap-2 rounded-full bg-primary-500 px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-primary-500/25 transition hover:bg-primary-600">
                    {{ __('تبرع الآن') }}
                    <svg class="h-4 w-4 rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>
