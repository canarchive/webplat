<?php
return [
    'Development' => [
        'path' => 'dev',
        'setWritable' => [
            'backend/runtime',
            //'backend/web/assets',
            'passport/runtime',
            'website/runtime',
            'paytrade/runtime',
        ],
        'setExecutable' => [
            'yii',
            'tests/codeception/bin/yii',
        ],
        'setCookieValidationKey' => [
            'backend/config/main-local.php',
            'passport/config/main-local.php',
            'website/config/main-local.php',
            'paytrade/config/main-local.php',
        ],
    ],
    'Production' => [
        'path' => 'prod',
        'setWritable' => [
            'backend/runtime',
            'passport/runtime',
            'website/runtime',
            'paytrade/runtime',
        ],
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => [
            'backend/config/main-local.php',
            'passport/config/main-local.php',
            'website/config/main-local.php',
            'paytrade/config/main-local.php',
        ],
    ],
];
