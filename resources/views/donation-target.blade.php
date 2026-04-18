<x-app>
    @php
        $goalAmount = max((float) $donationTarget->goal_amount, 1);
        $collectedAmount = min((float) $donationTarget->paid_donations_sum, $goalAmount);
        $progress = min(($collectedAmount / $goalAmount) * 100, 100);
        $typeLabel = $donationTarget->type?->getLabel() ?? __('Giving opportunity');
        $familyCode = $donationTarget->family?->code;
        $caseCode = $donationTarget->charityCase?->code;
        $case = $donationTarget->charityCase;
        $family = $donationTarget->family;
    @endphp

    <section class="relative overflow-hidden pb-16 pt-32">
        <div class="absolute inset-0 -z-10"
             x-data
             x-bind:style="$el.closest('html').classList.contains('dark')
                ? 'background: radial-gradient(circle at top, color-mix(in srgb, var(--color-primary-400) 16%, transparent), transparent 42%)'
                : 'background: radial-gradient(circle at top, color-mix(in srgb, var(--color-primary-600) 14%, transparent), transparent 40%)'">
        </div>

        <div class="landing-container">
            <a href="{{ route('donation-cases') }}" class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-600 shadow-sm transition hover:border-primary-200 hover:text-primary-600 dark:border-white/10 dark:bg-gray-950 dark:text-gray-300 dark:hover:text-primary-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                {{ __('All cases') }}
            </a>

            <div class="mt-5 flex flex-wrap items-center gap-2">
                <span class="inline-flex rounded-full bg-primary-50 px-3 py-1 text-[11px] font-medium text-primary-700 dark:bg-primary-950/30 dark:text-primary-200">{{ $typeLabel }}</span>
                @if ($familyCode)
                    <bdi class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-[11px] font-medium text-gray-600 dark:bg-white/8 dark:text-gray-300"># {{ $familyCode }}</bdi>
                @endif
                @if ($caseCode)
                    <bdi class="inline-flex rounded-full bg-gray-100 px-3 py-1 text-[11px] font-medium text-gray-600 dark:bg-white/8 dark:text-gray-300"># {{ $caseCode }}</bdi>
                @endif
            </div>

            <h1 class="mt-4 text-[2.2rem] font-extrabold leading-[1.2] text-gray-900 sm:text-[2.8rem] dark:text-white">{{ $donationTarget->title }}</h1>

            @if ($donationTarget->description)
                <p class="mt-4 max-w-2xl text-sm leading-7 text-gray-600 sm:text-[15px] dark:text-gray-300">{{ $donationTarget->description }}</p>
            @endif

            <div class="mt-10 grid gap-8 xl:grid-cols-[1fr_1fr]">
                <div class="space-y-5">
                    {{-- Progress --}}
                    <div class="rounded-[1.75rem] border border-gray-200/70 bg-white p-6 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                        <div class="mb-5 flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Collected') }}</div>
                                <div class="mt-1 text-2xl font-bold text-gray-900 dark:text-white">{{ money($collectedAmount)->formatPrecise() }}</div>
                                <div class="mt-0.5 text-[13px] text-gray-500 dark:text-gray-400">{{ __('Out of') }} {{ money($goalAmount)->formatPrecise() }}</div>
                            </div>
                            <div class="text-end">
                                <div class="text-3xl font-black text-primary-600 dark:text-primary-400">{{ number_format($progress, 0) }}%</div>
                                <div class="mt-0.5 text-[13px] text-gray-500 dark:text-gray-400">{{ __('Progress') }}</div>
                            </div>
                        </div>
                        <div class="h-3 overflow-hidden rounded-full bg-gray-100 dark:bg-gray-800">
                            <div class="h-full rounded-full bg-linear-to-l from-primary-400 to-primary-600 transition-all duration-700" @style(['width: '.$progress.'%'])></div>
                        </div>
                    </div>

                    {{-- Case details --}}
                    @if ($case)
                        <div class="rounded-[1.75rem] border border-gray-200/70 bg-white p-6 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                            <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Case details') }}</div>

                            @if ($case->title)
                                <p class="mt-1 text-[13px] text-gray-500 dark:text-gray-400">{{ $case->title }}</p>
                            @endif

                            @if ($case->description)
                                <p class="mt-3 text-sm leading-7 text-gray-700 dark:text-gray-300">{{ $case->description }}</p>
                            @endif

                            <dl class="mt-5 grid gap-3 sm:grid-cols-2">
                                @if ($case->priority)
                                    <div class="rounded-xl bg-gray-50 px-4 py-3 dark:bg-white/4">
                                        <dt class="text-[11px] font-medium text-gray-400 dark:text-gray-500">{{ __('Priority') }}</dt>
                                        <dd class="mt-1 text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $case->priority->getLabel() }}</dd>
                                    </div>
                                @endif
                                @if ($case->status)
                                    <div class="rounded-xl bg-gray-50 px-4 py-3 dark:bg-white/4">
                                        <dt class="text-[11px] font-medium text-gray-400 dark:text-gray-500">{{ __('Status') }}</dt>
                                        <dd class="mt-1 text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $case->status->getLabel() }}</dd>
                                    </div>
                                @endif
                                @if ($case->registered_at)
                                    <div class="rounded-xl bg-gray-50 px-4 py-3 dark:bg-white/4 col-span-2">
                                        <dt class="text-[11px] font-medium text-gray-400 dark:text-gray-500">{{ __('Registered') }}</dt>
                                        <dd class="mt-1 text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $case->registered_at->translatedFormat('j M Y') }}</dd>
                                    </div>
                                @endif
                            </dl>

                            @if ($case->notes)
                                <p class="mt-4 text-sm leading-6 text-gray-500 dark:text-gray-400">{{ $case->notes }}</p>
                            @endif
                        </div>
                    @endif

                    {{-- Family details --}}
                    @if ($family)
                        <div class="rounded-[1.75rem] border border-gray-200/70 bg-white p-6 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                            <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Family') }}</div>

                            <dl class="mt-4 grid gap-3 sm:grid-cols-2">
                                @if ($family->state)
                                    <div class="rounded-xl bg-gray-50 px-4 py-3 dark:bg-white/4">
                                        <dt class="text-[11px] font-medium text-gray-400 dark:text-gray-500">{{ __('Governorate') }}</dt>
                                        <dd class="mt-1 text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $family->state->name }}</dd>
                                    </div>
                                @endif
                                @if ($family->city)
                                    <div class="rounded-xl bg-gray-50 px-4 py-3 dark:bg-white/4">
                                        <dt class="text-[11px] font-medium text-gray-400 dark:text-gray-500">{{ __('City') }}</dt>
                                        <dd class="mt-1 text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $family->city->name }}</dd>
                                    </div>
                                @endif
                                @if ($family->housing_status)
                                    <div class="rounded-xl bg-gray-50 px-4 py-3 dark:bg-white/4">
                                        <dt class="text-[11px] font-medium text-gray-400 dark:text-gray-500">{{ __('Housing') }}</dt>
                                        <dd class="mt-1 text-sm font-semibold text-gray-800 dark:text-gray-200">{{ $family->housing_status->getLabel() }}</dd>
                                    </div>
                                @endif
                            </dl>
                        </div>
                    @endif
                </div>

                {{-- Donation form / contact notice --}}
                <div id="donation-form" class="xl:sticky xl:top-28 xl:self-start xl:overflow-y-auto">
                    <div class="rounded-[1.75rem] border border-gray-200/70 bg-white p-5 shadow-sm shadow-primary-950/5 dark:border-white/8 dark:bg-gray-950">
                        <div class="mb-4">
                            <div class="text-[13px] text-gray-500 dark:text-gray-400">{{ __('Donation form') }}</div>
                            <div class="mt-2 text-lg font-bold text-gray-900 dark:text-white">{{ $donationTarget->title }}</div>
                        </div>

                        @if(setting('donations.online_enabled', true))
                            @livewire('landing.donation-form', [
                                'targets' => \App\Models\DonationTarget::where('status', \App\Enums\DonationTargetStatus::Active)->get(),
                                'defaultType' => $donationTarget->type?->value,
                                'defaultTargetId' => $donationTarget->id,
                            ], key('donation-form-'.$donationTarget->id))
                        @else
                            <div class="flex flex-col items-center gap-4 py-8 text-center">
                                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-amber-50 dark:bg-amber-950/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" /></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ __('Online donation is currently unavailable') }}</p>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ __('Online donation is not available at the moment. Please contact us to donate directly.') }}</p>
                                </div>
                                <div class="flex w-full flex-col gap-2">
                                    @if(setting('contact.primary_phone'))
                                        <a href="tel:{{ setting('contact.primary_phone') }}" class="inline-flex items-center justify-center gap-1.5 rounded-full border border-gray-200 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100 dark:border-white/10 dark:bg-white/5 dark:text-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" /></svg>
                                            {{ setting('contact.primary_phone') }}
                                        </a>
                                    @endif
                                    @if(setting('contact.email'))
                                        <a href="mailto:{{ setting('contact.email') }}" class="inline-flex items-center justify-center gap-1.5 rounded-full border border-gray-200 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-100 dark:border-white/10 dark:bg-white/5 dark:text-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                                            {{ setting('contact.email') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <div class="mt-5 border-t border-gray-100 pt-4 dark:border-white/8">
                            <a href="{{ route('donation-cases') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-gray-200 bg-gray-50 px-4 py-2.5 text-sm font-medium text-gray-600 transition hover:bg-gray-100 dark:border-white/10 dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rtl:rotate-180" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" /></svg>
                                {{ __('Back to all cases') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
