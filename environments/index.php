<?php
return [
    'Development' => [
        'path' => 'dev',
        'setWritable' => [
            'backend/runtime',
            //'backend/web/assets',
            'gallerycms/runtime',
            'passport/runtime',
        ],
        'setExecutable' => [
            'yii',
            'tests/codeception/bin/yii',
        ],
        'setCookieValidationKey' => [
            'backend/config/main-local.php',
            'gallerycms/config/main-local.php',
            'passport/config/main-local.php',
        ],
    ],
    'Production' => [
        'path' => 'prod',
        'setWritable' => [
            'backend/runtime',
            'gallerycms/runtime',
            'passport/runtime',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'backend/config/main-local.php',
            'gallerycms/config/main-local.php',
            'passport/config/main-local.php',
        ],
    ],
];
