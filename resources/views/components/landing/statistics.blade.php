@props(['stats'])

<section id="statistics" class="landing-section">
    <div class="landing-container">
        <div class="relative overflow-hidden rounded-[2rem] bg-linear-to-bl from-primary-700 via-primary-600 to-primary-800 px-4 py-7 text-white shadow-2xl shadow-primary-950/20 sm:px-7 sm:py-10 lg:rounded-[2.1rem] lg:px-10 lg:py-11">
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -top-16 start-8 h-40 w-40 rounded-full bg-white/10 blur-3xl"></div>
                <div class="absolute bottom-0 end-0 h-56 w-56 translate-x-1/4 translate-y-1/4 rounded-full bg-primary-300/20 blur-3xl"></div>
                <div class="absolute inset-x-0 top-0 h-px bg-white/20"></div>
            </div>

            <div class="relative grid gap-4 lg:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)] lg:items-end lg:gap-6">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-1 text-[10px] font-medium tracking-[0.12em] text-white/80 sm:px-3.5 sm:py-1.5 sm:text-[11px] backdrop-blur-sm">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary-200"></span>
                        {{ __('Numbers that make a difference') }}
                    </span>
                    <h2 class="mt-3 text-[1.7rem] font-extrabold leading-[1.2] sm:mt-4 sm:text-[2.15rem] sm:leading-[1.25] lg:text-[2.35rem]">{{ __('We measure our impact by what we leave in people\'s lives') }}</h2>
                </div>

                <div class="rounded-[1.25rem] border border-white/12 bg-white/8 p-3.5 backdrop-blur-sm sm:rounded-[1.5rem] sm:p-5">
                    <p class="text-sm font-normal leading-6 text-white/80 sm:text-[15px] sm:leading-7">{{ __('Every number here reflects a real support story and ongoing collaboration between the foundation, donors, and volunteers to serve those in greatest need.') }}</p>
                    <div class="mt-3 flex items-start gap-2 text-[12px] leading-5 text-white/65 sm:mt-4 sm:items-center sm:gap-2.5 sm:text-[13px]">
                        <span class="h-2 w-2 rounded-full bg-primary-200"></span>
                        <span>{{ __('Clear results and impact delivered with dignity and transparency.') }}</span>
                    </div>
                </div>
            </div>

            <div class="relative mt-5 grid grid-cols-2 gap-2.5 sm:mt-7 sm:gap-3.5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($stats as $stat)
                    <div class="group relative overflow-hidden rounded-[1.1rem] border border-white/12 bg-white/10 p-3.5 shadow-lg shadow-primary-950/10 transition duration-300 hover:bg-white/14 sm:rounded-[1.5rem] sm:p-5 sm:backdrop-blur-md md:hover:-translate-y-1">
                        <div class="absolute inset-x-0 top-0 h-px bg-white/20"></div>
                        <div class="absolute -end-8 -top-8 h-24 w-24 rounded-full bg-white/10 blur-2xl transition duration-300 group-hover:bg-white/15"></div>

                        <div class="relative flex h-full flex-col justify-between gap-3 sm:gap-5">
                            <div class="flex h-7 w-7 items-center justify-center rounded-lg border border-white/12 bg-white/10 text-[10px] font-semibold text-white/80 sm:h-10 sm:w-10 sm:rounded-xl sm:text-xs">
                                {{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}
                            </div>

                            <div>
                                <div data-counter data-target="{{ $stat['value'] }}" data-suffix="{{ $stat['suffix'] }}" class="text-[1.45rem] font-bold tracking-tight text-white sm:text-[2.4rem]">0</div>
                                <div class="mt-1.5 max-w-[9rem] text-[13px] font-normal leading-4.5 text-white/78 sm:mt-2.5 sm:max-w-[13rem] sm:text-[15px] sm:leading-6">{{ $stat['label'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
