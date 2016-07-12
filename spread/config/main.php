<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-spread',
    'basePath' => dirname(__DIR__),
	//'viewPath' => '@spread/views',
	'layout' => null,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'spread\controllers',
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
                '/' => '/decoration/detail/home',
                '<client:(pc|wap)>' => '/decoration/detail/third',
				//Yii::getAlias('@grouponurl') => '/groupon',
				'detail/<id:\d+>' => 'groupon/detail/index',
                'detail-<id:\d+>' => '/decoration/detail/index',
				'jz-signup' => '/decoration/signup/index',
				'jz-success' => '/decoration/detail/success',
				'jz-lottery' => '/decoration/signup/lottery',
				'jz-bonus' => '/decoration/signup/bonus',
				'jz-gift-bag' => '/decoration/signup/gift-bag',
				//'<city:\w+>' => 'groupon/detail/index',
		        ['pattern' => '/<controller:\w+>/<action:\w+>', 'route' => '/groupon/<controller>/<action>', 'host' => Yii::getAlias('@grouponurl')],
				'api/order-mobile' => '/casher/api/order-mobile',
				'xunke' => 'decoration/accept/xunke',
				'jzhd-<type:\w+>-<city:\w+>' => '/decoration/detail/spread',
				'<view:\w+>' => 'decoration/detail/inner',
				'<view:\w+>-<type:\w+>-<city:\w+>' => 'decoration/detail/inner',
			],
		],
    ],

	'modules' => [
		'groupon' => [
			'class' => 'spread\groupon\Module',
		],
		'decoration' => [
			'class' => 'spread\decoration\Module',
		],
		'casher' => [
			'class' => 'spread\casher\Module',
		],
	],
    'params' => $params,
];
