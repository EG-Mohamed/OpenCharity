<?php

return [
    'inertia' => env('SEO_TOOLS_INERTIA', false),
    'meta' => [
        'defaults' => [
            'title' => false,
            'titleBefore' => false,
            'description' => false,
            'separator' => ' | ',
            'keywords' => [],
            'canonical' => 'full',
            'robots' => 'index,follow',
        ],
        'webmaster_tags' => [
            'google' => env('GOOGLE_SITE_VERIFICATION'),
            'bing' => env('BING_SITE_VERIFICATION'),
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
            'norton' => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title' => false,
            'description' => false,
            'url' => null,
            'type' => 'website',
            'site_name' => false,
            'images' => [],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title' => false,
            'description' => false,
            'url' => 'full',
            'type' => 'Organization',
            'images' => [],
        ],
    ],
];
