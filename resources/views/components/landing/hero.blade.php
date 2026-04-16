@php($heroImage = asset('images/landing/hero.jpg'))

<section
    id="top"
    class="relative flex min-h-screen items-end overflow-hidden"
    style="background-image: url('{{ $heroImage }}'); background-size: cover; background-position: center;"
>
    <div class="absolute inset-0 bg-linear-to-t from-primary-950 via-primary-950/75 to-primary-900/40"></div>
    <div class="absolute inset-0 bg-linear-to-e from-primary-950/80 via-primary-950/40 to-transparent"></div>

    <div class="relative w-full">
        <div class="landing-container pb-16 pt-32 sm:pb-24 sm:pt-36 lg:pb-28 lg:pt-40">
            <div class="grid items-end gap-12 lg:grid-cols-2">

                <div class="max-w-2xl">
                    <span class="landing-section-label">
                        <span class="h-1.5 w-1.5 rounded-full bg-primary-500"></span>
                        {{ __('Together we build hope') }}
                    </span>

                    <h1 class="mt-6 text-4xl font-black leading-tight text-white sm:text-6xl lg:text-6xl">
                        {{ __('Masaa') }}
                        <span class="text-primary-300">{{ __('Foundation') }}</span>
                    </h1>

                    <p class="mt-5 max-w-xl text-base leading-7 text-white/75 sm:mt-6 sm:text-lg sm:leading-8">
                        {{ __('We deliver giving to those who need it with dignity and professionalism, turning donations into tangible impact that reaches families and humanitarian cases at the right time.') }}
                    </p>

                    <div class="mt-8 flex flex-nowrap gap-3 sm:mt-10 sm:flex-wrap sm:gap-4">
                        <a
                            href="#donation"
                            class="inline-flex w-1/2 items-center justify-center rounded-full bg-primary-500 px-4 py-4 text-center text-sm font-bold text-white shadow-lg shadow-primary-950/30 transition hover:bg-primary-400 sm:w-auto sm:px-8 sm:text-base"
                        >
                            {{ __('Donate now') }}
                        </a>
                        <a
                            href="#about"
                            class="inline-flex w-1/2 items-center justify-center rounded-full border border-white/25 bg-white/10 px-4 py-4 text-center text-sm font-bold text-white transition hover:bg-white/15 sm:w-auto sm:px-8 sm:text-base sm:backdrop-blur-sm"
                        >
                            {{ __('Learn more') }}
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <a
            href="#about"
            class="absolute bottom-6 start-1/2 hidden -translate-x-1/2 items-center justify-center rounded-full border border-white/20 bg-white/10 p-3 text-white/70 transition hover:bg-white/20 sm:flex sm:backdrop-blur-sm"
        >
            <svg class="h-5 w-5 animate-bounce" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m6 9 6 6 6-6"/>
            </svg>
        </a>
    </div>
</section>
