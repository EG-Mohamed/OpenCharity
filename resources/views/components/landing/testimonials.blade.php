<section class="landing-section">
    <div class="landing-container">
        <div class="mx-auto max-w-3xl text-center">
            <span class="landing-section-label">{{ __('Meaningful words') }}</span>
            <h2 class="mt-6 text-3xl font-black text-gray-900 sm:text-4xl dark:text-white">{{ __('Voices that tell the story of giving') }}</h2>
            <p class="mt-5 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('Human stories that express the difference made by cooperation between the foundation and its supporters in people\'s lives.') }}</p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @foreach ([
                ['quote' => __('We found quick response and genuine attention to detail at the foundation, and we felt that someone was truly listening and working for us sincerely.'), 'name' => __('Umm Ahmed'), 'role' => __('Beneficiary')],
                ['quote' => __('The clarity of the cases and the way the need was presented made the donation decision easier and more reassuring, and the impact was clear from the very first moment.'), 'name' => __('Mohamed Khaled'), 'role' => __('Regular donor')],
                ['quote' => __('Volunteering with Masaa is organized and inspiring, and every step makes you feel that the effort truly reaches those who need it.'), 'name' => __('Sara Ali'), 'role' => __('Volunteer')],
            ] as $testimonial)
                <article class="landing-card p-8">
                    <div class="text-6xl font-black leading-none text-primary-200 dark:text-primary-800">&ldquo;</div>
                    <p class="mt-4 text-base leading-8 text-gray-600 dark:text-gray-300">{{ $testimonial['quote'] }}</p>
                    <div class="mt-8 flex items-center gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-primary-400 to-primary-600 text-lg font-black text-white">
                            {{ mb_substr($testimonial['name'], 0, 1) }}
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 dark:text-white">{{ $testimonial['name'] }}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">{{ $testimonial['role'] }}</div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
