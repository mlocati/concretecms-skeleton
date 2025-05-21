<?php

return [
    'session' => [
        'cookie' => [
            'cookie_secure' => false,
        ],
    ],
    'security' => [
        'production' => [
            'mode' => 'development',
        ],
    ],
    'error' => [
        'handling' => [
            'error' => [
                'halt' => true,
                'logLevel' => 'EMERGENCY',
            ],
            'warning' => [
                'halt' => true,
                'logLevel' => 'WARNING',
            ],
            'notice' => [
                'halt' => true,
                'logLevel' => 'NOTICE',
            ],
            'deprecated' => [
                'halt' => false,
                'logLevel' => '',
            ],
        ],
        'display' => [
            'guests' => 'debug',
            'privileged' => 'debug',
        ],
    ],
];
