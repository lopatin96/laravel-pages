<?php

return [
    'header_path' => 'layouts.header',
    'footer_path' => 'layouts.footer',

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

    // sections
    'sections' => [
        'main' => [
            'variant' => 'v1',
        ],
        'others' => [
            [
                'name' => 'how-it-works',
                'id' => 'how-it-works',
                'variant' => 'v1',
            ],
            [
                'name' => 'call-to-action',
                'id' => 'call-to-action',
                'variant' => 'v1',
            ],
            [
                'name' => 'testimonials',
                'id' => 'testimonials',
                'variant' => 'v1',
            ],
            [
                'name' => 'pricing',
                'id' => 'pricing',
                'variant' => 'v1',
            ],
            [
                'name' => 'faq',
                'id' => 'faq',
                'variant' => 'v1',
            ],
//            [
//                'name' => 'stats',
//                'variant' => 'v1',
//            ],
//            [
//                'name' => 'features',
//                'variant' => 'v1',
//            ],
//            [
//                'name' => 'custom-name',
//                'view' => 'welcome.custom-view',
//            ],
        ]
    ],

    // main
        // v1
        'main-v1_upper_title_path' => '/register',
        'main-v1_primary_button_path' => '/register',
        'main-v1_secondary_button_path' => '/register',

        'main-v1_lottie_src' => '<animations/...json>',
        'main-v1_lottie_speed' => 0.75,
        'main-v1_lottie_width' => 550,
        'main-v1_lottie_height' => 550,
        'main-v1_lottie_top' => -200,
        'main-v1_lottie_right' => 10,

        'main-v1_scroll_bottom_button_path' => '#how-it-works',
        'main-v1_scroll_bottom_button_src' => '<animations/...json>',
        'main-v1_scroll_bottom_button_speed' => 0.65,
        'main-v1_scroll_bottom_button_width' => 200,
        'main-v1_scroll_bottom_button_height' => 200,
        'main-v1_scroll_bottom_button_right' => 0,
        'main-v1_scroll_bottom_button_bottom' => 0,
        'main-v1_scroll_bottom_button_hidden_during_ms' => 5000,

    // how-it-works
        // v1
        'how_it_works-v1_step_1_image' => '<images/...png>',
        'how_it_works-v1_step_2_image' => '<images/...png>',
        'how_it_works-v1_step_3_image' => '<images/...png>',

        // v2
        'how_it_works-v2_step_1_image' => '<images/...png>',
        'how_it_works-v2_step_2_image' => '<images/...png>',
        'how_it_works-v2_step_3_image' => '<images/...png>',

        // v4
        'how_it_works-v4_step_1_image' => '<images/...png>',
        'how_it_works-v4_step_2_image' => '<images/...png>',
        'how_it_works-v4_step_3_image' => '<images/...png>',

    // call-to-action
        // v1
        'call_to_action-v1_primary_button_path' => '/register',
        'call_to_action-v1_secondary_button_path' => 'mailto:support@email.com',

        // v2
        'call_to_action-v2_button_path' => '/register',
        'call_to_action-v2_avatar_1' => '<images/...png>',
        'call_to_action-v2_avatar_2' => '<images/...png>',
        'call_to_action-v2_avatar_3' => '<images/...png>',

        // v3
        'call_to_action-v3_button_path' => '/register',
        'call_to_action-v3_photo_1' => '<images/...png>',
        'call_to_action-v3_photo_2' => '<images/...png>',

    // pricing
    'pricing_button_path' => '/billing',

    // testimonials
        // v3
        'testimonials-v3_card_1_photo' => '<images/...png>',
        'testimonials-v3_card_1_name' => 'v3_card_1_name',
        'testimonials-v3_card_1_link' => 'v3_card_1_link',
        'testimonials-v3_card_1_time' => 'v3_card_1_time',

        'testimonials-v3_card_2_photo' => '<images/...png>',
        'testimonials-v3_card_2_name' => 'v3_card_2_name',
        'testimonials-v3_card_2_link' => 'v3_card_2_link',
        'testimonials-v3_card_2_time' => 'v3_card_2_time',

        'testimonials-v3_card_3_photo' => '<images/...png>',
        'testimonials-v3_card_3_name' => 'v3_card_3_name',
        'testimonials-v3_card_3_link' => 'v3_card_3_link',
        'testimonials-v3_card_3_time' => 'v3_card_3_time',

    // features
        // v1
        'features-v1_image' => '<images/...png>',

        // v2
        'features-v2_image_1' => '<images/...png>',
        'features-v2_image_2' => '<images/...png>',
        'features-v2_image_3' => '<images/...png>',

        // v3
        'features-v3_image' => '<images/...png>',
];