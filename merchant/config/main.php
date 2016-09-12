<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-merchant',
    'basePath' => dirname(__DIR__),
	//'viewPath' => '@merchant/views',
	//'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'merchant\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'merchant\models\User',
            'enableAutoLogin' => true,
			'loginUrl' => ['/site/signin'],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'urlManager' => [
	        'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
			'rules' => require(__DIR__ . '/rules.php'),
		],
    ],

    'as access' => [
        'class' => 'merchant\components\AccessControl',
        'allowActions' => [
			//'info/*',
			//'site/index',
			'site/signin',
			'site/signup',
			'site/logout',
			'product/*',
            'debug/*',
        ]
    ],

    'params' => $params,
];
