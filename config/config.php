<?php

use Atin\LaravelPages\Enums\Gate;

return [
    'cookie_life_in_minutes' => 43200,

    'header_path' => 'sections.header',
    'footer_path' => 'sections.footer',

    // Colors; Add all values to tailwind.config.js as `safelist` under `module.exports`
    'gradient_from' => 'from-zinc-100',
    'gradient_to' => 'to-sky-300',

    'text_color_primary' => 'text-sky-600',
    'text_color_secondary' => 'text-sky-300',

    'bg_color_primary' => 'bg-sky-600',
    'bg_color_secondary' => 'bg-sky-300',

    'color_primary_hex' => '#0284c7',
    'color_secondary_hex' => '#7dd3fc',

    'main_button_color' => 'bg-red-500',

    'pages' => [
        'index' => [
            'sections' => [
                'main' => [
                    'name' => 'main',
//                    'variants' => ['variant-1', 'variant-2']
                ],
                'others' => [
                    [
                        'name' => 'try-now',
                        'auth' => [
                            'gate' => Gate::LoggedOut,
                            'alternative' => '/',
                        ],
                    ],
                    [
                        'name' => 'how-it-works',
                    ],
                    [
                        'name' => 'stats',
                    ],
                    [
                        'name' => 'features',
                    ],
                    [
                        'name' => 'feature-types',
//                        'hideWhenVariants' => ['variant-2']
                    ],
                    [
                        'name' => 'call-to-action',
                    ],
                    [
                        'name' => 'testimonials',
                    ],
                    [
                        'name' => 'pricing',
                    ],
                    [
                        'name' => 'faq',
                    ],
                ],
            ],
        ],
    ],
];
