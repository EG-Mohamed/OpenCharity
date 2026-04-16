@extends('layouts.landing')

@section('content')
    <section class="relative overflow-hidden pt-32 pb-16">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,_rgba(203,50,35,0.14),_transparent_40%)] dark:bg-[radial-gradient(circle_at_top,_rgba(244,109,98,0.16),_transparent_42%)]"></div>
        <div class="landing-container">
            <div class="max-w-3xl">
                <span class="landing-section-label">{{ __('حالات التبرع') }}</span>
                <h1 class="mt-6 text-4xl font-black text-gray-900 sm:text-5xl dark:text-white">{{ __('صفحة مخصصة لاكتشاف الحالات والحملات المفتوحة للتبرع') }}</h1>
                <p class="mt-5 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('استعرض جميع فرص العطاء المتاحة، وتوجّه مباشرة إلى التبرع للحالة أو الحملة التي تريد دعمها عبر نموذج عام مبني بمكوّنات Filament وLivewire.') }}</p>
            </div>

            <div class="mt-12 grid gap-6 xl:grid-cols-[1.2fr_0.8fr]">
                <div class="grid gap-6 md:grid-cols-2">
                    @foreach ($targets as $target)
                        @php
                            $goalAmount = max((float) $target->goal_amount, 1);
                            $collectedAmount = min((float) $target->collected_amount, $goalAmount);
                            $progress = min(($collectedAmount / $goalAmount) * 100, 100);
                        @endphp

                        <article class="landing-card overflow-hidden">
                            <div class="h-2 bg-gradient-to-l from-primary-400 via-primary-500 to-primary-700"></div>
                            <div class="p-6">
                                <span class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-xs font-semibold text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $target->type?->getLabel() }}</span>
                                <h2 class="mt-4 text-xl font-black text-gray-900 dark:text-white">{{ $target->title }}</h2>
                                <p class="mt-3 line-clamp-3 text-sm leading-7 text-gray-600 dark:text-gray-300">{{ $target->description ?: __('فرصة مباشرة لدعم حالة أو حملة إنسانية ذات أثر ملموس.') }}</p>

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
                                    <a href="#donation-form" class="rounded-full bg-primary-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-primary-500/30 transition hover:bg-primary-600">{{ __('تبرع') }}</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div id="donation-form" class="xl:sticky xl:top-28 xl:self-start">
                    @livewire('landing.donation-form', ['targets' => $targets->getCollection()])
                </div>
            </div>

            <div class="mt-10">
                {{ $targets->links() }}
            </div>
        </div>
    </section>
@endsection
