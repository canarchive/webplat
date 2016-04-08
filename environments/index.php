<?php
return [
    'Development' => [
        'path' => 'dev',
        'setWritable' => [
            'backend/runtime',
            //'backend/web/assets',
            'passport/runtime',
            'shoot/runtime',
            'gallerycms/runtime',
            'spread/runtime',
        ],
        'setExecutable' => [
            'yii',
            'tests/codeception/bin/yii',
        ],
        'setCookieValidationKey' => [
            'backend/config/main-local.php',
            'passport/config/main-local.php',
            'shoot/config/main-local.php',
            'gallerycms/config/main-local.php',
            'spread/config/main-local.php',
        ],
    ],
    'Production' => [
        'path' => 'prod',
        'setWritable' => [
            'backend/runtime',
            'passport/runtime',
            'shoot/runtime',
            'gallerycms/runtime',
            'spread/runtime',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'backend/config/main-local.php',
            'passport/config/main-local.php',
            'shoot/config/main-local.php',
            'gallerycms/config/main-local.php',
            'spread/config/main-local.php',
        ],
    ],
];
