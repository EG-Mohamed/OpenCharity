<section id="faq" class="landing-section bg-gray-50/70 dark:bg-gray-900/40">
    <div class="landing-container">
        <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:gap-10">
            <div class="max-w-xl">
                <span class="landing-section-label">{{ __('FAQ') }}</span>
                <h2 class="mt-4 text-[2rem] font-extrabold leading-[1.25] text-gray-900 sm:text-[2.15rem] dark:text-white">{{ __('Frequently asked questions') }}</h2>
                <p class="mt-3 text-sm leading-7 text-gray-600 sm:text-[15px] dark:text-gray-300">{{ __('Short answers to the most common questions before completing a donation.') }}</p>
            </div>

            <div class="space-y-3">
                @foreach ([
                    [
                        'question' => __('How can I donate?'),
                        'answer' => __('You can donate directly from the donation form, either as a general donation or by selecting a specific case or campaign.'),
                    ],
                    [
                        'question' => __('Can I choose a specific case?'),
                        'answer' => __('Yes. You can browse the donation cases page and choose the case or campaign you want to support.'),
                    ],
                    [
                        'question' => __('Can I donate anonymously?'),
                        'answer' => __('Yes. The donation form includes an anonymous donation option.'),
                    ],
                    [
                        'question' => __('What payment methods are available?'),
                        'answer' => __('The current form supports card, wallet, and bank transfer options.'),
                    ],
                    [
                        'question' => __('Can I donate without choosing a case?'),
                        'answer' => __('Yes. You can choose a general donation without selecting a specific case.'),
                    ],
                    [
                        'question' => __('Is online payment active now?'),
                        'answer' => __('The current donation form is a preview interface until the payment gateway is fully connected.'),
                    ],
                ] as $item)
                    <details class="group rounded-[1.5rem] border border-gray-200/80 bg-white p-5 shadow-sm shadow-primary-950/5 transition open:border-primary-200 dark:border-white/8 dark:bg-gray-950 dark:open:border-primary-900/40">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-base font-semibold text-gray-900 dark:text-white">
                            <span>{{ $item['question'] }}</span>
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-600 transition group-open:rotate-45 dark:bg-primary-950/30 dark:text-primary-300">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"/>
                                </svg>
                            </span>
                        </summary>

                        <p class="mt-3 pe-10 text-sm leading-7 text-gray-600 dark:text-gray-300">{{ $item['answer'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</section>
