<section
    id="top"
    class="relative flex min-h-screen items-end overflow-hidden"
    style="background-image: url('{{ asset('images/landing/hero.jpg') }}'); background-size: cover; background-position: center;"
>
    <div class="absolute inset-0 bg-linear-to-t from-primary-950 via-primary-950/75 to-primary-900/40"></div>
    <div class="absolute inset-0 bg-linear-to-e from-primary-950/80 via-primary-950/40 to-transparent"></div>

    <div class="relative w-full">
        <div class="landing-container pb-20 pt-40 sm:pb-28">
            <div class="grid items-end gap-12 lg:grid-cols-2">

                <div class="max-w-2xl">
                    <span class="landing-section-label">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>
                        {{ __('معاً نبني الأمل') }}
                    </span>

                    <h1 class="mt-6 text-5xl font-black leading-tight text-white sm:text-6xl lg:text-6xl">
                        {{ __('مؤسسة') }}
                        <span class="text-primary-300">{{ __('مسعي') }}</span>
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-8 text-white/75">
                        {{ __('نصل بالعطاء إلى من يحتاجه بكرامة واحترافية، ونحوّل التبرع إلى أثر ملموس يلامس حياة الأسر والحالات الإنسانية في الوقت المناسب.') }}
                    </p>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a
                            href="#donation"
                            class="inline-flex items-center justify-center rounded-full bg-primary-500 px-8 py-4 text-base font-bold text-white shadow-lg shadow-primary-950/30 transition hover:bg-primary-400"
                        >
                            {{ __('تبرع الآن') }}
                        </a>
                        <a
                            href="#about"
                            class="inline-flex items-center justify-center rounded-full border border-white/25 bg-white/10 px-8 py-4 text-base font-bold text-white backdrop-blur-sm transition hover:bg-white/15"
                        >
                            {{ __('اعرف المزيد') }}
                        </a>
                    </div>

                    <div class="mt-16 flex flex-wrap gap-x-10 gap-y-4 border-t border-white/15 pt-8">
                        <div>
                            <div class="text-3xl font-black text-white">+500</div>
                            <div class="mt-1 text-sm text-white/60">{{ __('أسرة مستفيدة') }}</div>
                        </div>
                        <div class="border-s border-white/15 ps-10">
                            <div class="text-3xl font-black text-white">+300</div>
                            <div class="mt-1 text-sm text-white/60">{{ __('حالة منجزة') }}</div>
                        </div>
                        <div class="border-s border-white/15 ps-10">
                            <div class="text-3xl font-black text-white">100%</div>
                            <div class="mt-1 text-sm text-white/60">{{ __('شفافية كاملة') }}</div>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex lg:flex-col lg:gap-5 lg:pb-4">
                    <div class="rounded-3xl border border-white/10 bg-white/8 p-6 backdrop-blur-md">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary-500/25">
                                <svg class="h-6 w-6 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21.593c-5.63-5.539-11-10.297-11-14.402C1 3.539 4.68 1 8 1c1.98 0 4.144.85 5.5 3 1.356-2.15 3.52-3 5.5-3 3.32 0 7 2.539 7 6.191 0 4.105-5.37 8.863-11 14.402z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-white">{{ __('دعم حقيقي') }}</div>
                                <p class="mt-1 text-sm leading-6 text-white/60">{{ __('نعمل على تلبية الاحتياجات الأساسية للأسر المحتاجة بشكل مباشر وفعّال.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-primary-500/15 p-6 backdrop-blur-md">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary-500/30">
                                <svg class="h-6 w-6 text-primary-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-white">{{ __('تبرع آمن وشفاف') }}</div>
                                <p class="mt-1 text-sm leading-6 text-white/60">{{ __('كل تبرع يُوثَّق ويصل إلى مستحقيه بالكامل مع تقارير واضحة ومتاحة.') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-white/8 p-6 backdrop-blur-md">
                        <div class="flex items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-primary-500/25">
                                <svg class="h-6 w-6 text-primary-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-white">{{ __('مجتمع متكاتف') }}</div>
                                <p class="mt-1 text-sm leading-6 text-white/60">{{ __('نربط المتبرعين بالحالات المحتاجة مباشرةً لأثر إنساني حقيقي وملموس.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <a
            href="#about"
            class="absolute bottom-8 start-1/2 -translate-x-1/2 flex items-center justify-center rounded-full border border-white/20 bg-white/10 p-3 text-white/70 backdrop-blur-sm transition hover:bg-white/20"
        >
            <svg class="h-5 w-5 animate-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m6 9 6 6 6-6"/>
            </svg>
        </a>
    </div>
</section>
