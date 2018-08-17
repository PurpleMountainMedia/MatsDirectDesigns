<?php

return [
    'baseUrl' => 'http://www.matsdirect.test',
    'production' => false,
    'collections' => [
        // 'products' => [
        //     'path' => 'products/{range_slug}/{slug}'
        // ],
        'ranges' => [
            'path' => 'products/{slug}'
        ]
    ],
];
