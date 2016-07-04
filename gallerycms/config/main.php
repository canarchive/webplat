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
            'rules' => [
				//Yii::getAlias('@house.gallerycmsurl') => require(__DIR__ . '/rules-house.php'),
				'/ts-<view:\w+>' => '/house/feature/index',
				Yii::getAlias('@house.gallerycmsurl') . '/' => '/house/site/index', 
				Yii::getAlias('@house.gallerycmsurl') . '/<_q:.*>' => '/house/<_q>', 
				//'http://yii2.seoh.alyee.biz/<controller:\w+>/<action:\w+>' => '/house/<controller>/<action>',
			    'list-<id:\d+>' => 'site/list',
			    'show-<id:\d+>' => 'site/show',
            ],
        ],
    ],
	'modules' => [
		'house' => [
			'class' => 'gallerycms\house\Module',
		],
		'shoot' => [
			'class' => 'gallerycms\shoot\Module',
		],
	],
    'params' => $params,
];
