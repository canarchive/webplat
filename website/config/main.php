<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-website',
    'basePath' => dirname(__DIR__),
	'viewPath' => '@website/views/default',
	//'viewPath' => '@website/views/tmall',
	//'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'website\controllers',
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
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
				'list/<id:\d+>' => 'goods/list',
				'show/<id:\d+>' => 'goods/show',
            ],
        ],
    ],
	'modules' => [
		'info' => [
			'class' => 'website\info\Module',
		],
	],
    'params' => $params,
];
