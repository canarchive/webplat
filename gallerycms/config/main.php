<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-gallerycms',
    'basePath' => dirname(__DIR__),
    'viewPath' => '@gallerycms/views/default',
    'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'gallerycms\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
<<<<<<< HEAD
            'rules' => [
			    'list-<id:\d+>' => 'site/list',
			    'show-<id:\d+>' => 'site/show',
            ],
        ],
    ],
	'modules' => [
		'shoot' => [
			'class' => 'gallerycms\shoot\Module',
		],
	],
=======
            'enableStrictParsing' => true,
			'rules' => require(__DIR__ . '/rules-house.php'),
		],
    ],
    'modules' => [
        'house' => [
            'class' => 'gallerycms\house\Module',
        ],
    ],
>>>>>>> web-house
    'params' => $params,
];
