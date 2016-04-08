<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=workstudio_passport',
            'username' => 'duser_remote',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'wp_',			
        ],
        'dbWebsite' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=workstudio_groupbuy',
            'username' => 'duser_remote',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'wg_',			
        ],		
        'dbPaytrade' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=workstudio_pay',
            'username' => 'duser_remote',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'wp_',			
        ],	
        'dbSpread' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=workstudio_spread',
            'username' => 'duser_remote',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'ws_',			
        ],	
        'cacheRedis' => [
            'class' => 'common\components\CacheRedis',
            'redis' => [
                'hostname' => 'localhost',
                'port' => 6379,
                'database' => 0,
            ],		
		],		
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
