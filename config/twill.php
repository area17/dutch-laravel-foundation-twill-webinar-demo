<?php

return [
    'block_editor' => [
        'blocks' => [
            'text' => [
                'title' => 'Text',
                'icon' => 'text',
                'component' => 'a17-block-text',
            ],
            'cta' => [
                'title' => 'CTA',
                'icon' => 'text',
                'component' => 'a17-block-cta',
            ],
            'speakers' => [
                'title' => 'Speakers',
                'icon' => 'text',
                'component' => 'a17-block-speakers',
            ],
            'image' => [
                'title' => 'Image',
                'icon' => 'image',
                'component' => 'a17-block-image',
            ],
        ],
        'crops' => [
            'image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 0,
                    ],
                ],
            ],
        ],
    ],

    'buckets' => [
        'main' => [
            'name' => 'Navigation',
            'buckets' => [
                'main_navigation' => [
                    'name' => 'Main navigation',
                    'bucketables' => [
                        [
                            'module' => 'pages',
                            'name' => 'pages',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 10,
                ],
            ],
        ],
    ],

    'bucketsRoutes' => [
        'main' => 'navigation',
    ],
];
