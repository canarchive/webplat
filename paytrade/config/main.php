<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-paytrade',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'paytrade\controllers',
	'layout' => null,
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['site/signin'],//, 'ref' => Yii::$app->getRequest()->getAbsoluteUrl()],
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
                ['pattern' => 'callback/<result:\w+>/<code:\w+>', 'route' => '/shoot/charge/pingback', 'host' => Yii::getAlias('@paytradeurl')],
				'pingback' => 'account/pingback',
			],
		],
    ],
	'modules' => [
		'shoot' => [
			'class' => 'paytrade\shoot\Module',
		],
	],
    'params' => $params,
];
