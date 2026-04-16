<section class="landing-section">
    <div class="landing-container">
        <div class="mx-auto max-w-3xl text-center">
            <span class="landing-section-label">{{ __('كلمات مؤثرة') }}</span>
            <h2 class="mt-6 text-3xl font-black text-gray-900 sm:text-4xl dark:text-white">{{ __('أصوات تحكي أثر العطاء') }}</h2>
            <p class="mt-5 text-lg leading-8 text-gray-600 dark:text-gray-300">{{ __('نماذج إنسانية تعبّر عن الفرق الذي يصنعه التعاون بين المؤسسة والداعمين في حياة الناس.') }}</p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @foreach ([
                ['quote' => __('وجدنا في المؤسسة سرعة استجابة واهتماماً حقيقياً بالتفاصيل، وشعرنا أن هناك من يسمعنا ويعمل لأجلنا بصدق.'), 'name' => __('أم أحمد'), 'role' => __('مستفيدة')],
                ['quote' => __('وضوح الحالات وطريقة عرض الاحتياج جعلت قرار التبرع أسهل وأكثر اطمئناناً، والأثر كان واضحاً منذ اللحظة الأولى.'), 'name' => __('محمد خالد'), 'role' => __('متبرع دائم')],
                ['quote' => __('العمل التطوعي مع مسعي منظم وملهم، وكل خطوة فيه تشعرك أن الجهد يصل فعلاً لمن يحتاجه.'), 'name' => __('سارة علي'), 'role' => __('متطوعة')],
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
