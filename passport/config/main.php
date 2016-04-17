<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-passport',
    'basePath' => dirname(__DIR__),
	//'viewPath' => '@app/views/1yyg',
	//'viewPath' => '@app/views/basey',
	//'viewPath' => '@app/views/default',
	'viewPath' => '@app/views/default',
	'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'passport\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'passport\models\User',
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
		        ['pattern' => 'signin', 'route' => 'site/signin', 'host' => Yii::getAlias('@passporturl')],
		        'signup' => 'site/signup',
			],
		],
    ],
    'params' => $params,
];
