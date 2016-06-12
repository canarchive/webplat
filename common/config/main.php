<?php
return [
    'timeZone'=>'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    	'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
			'suffix' => '.html',
            'rules' => [
		        ['pattern' => '/spider-upload/<table:\w+>/<field:\w+>', 'route' => '/spider-upload/index', 'host' => Yii::getAlias('@spiderurl')],
		        ['pattern' => '/shoot-upload/<table:\w+>/<field:\w+>', 'route' => '/shoot-upload/index', 'host' => Yii::getAlias('@shooturl')],
		        ['pattern' => '/spread-upload/<table:\w+>/<field:\w+>', 'route' => '/spread-upload/index', 'host' => Yii::getAlias('@spreadurl')],
		        ['pattern' => '/gallerycms-upload/<table:\w+>/<field:\w+>', 'route' => '/gallerycms-upload/index', 'host' => Yii::getAlias('@gallerycmsurl')],
		        ['pattern' => 'signin', 'route' => 'site/signin', 'host' => Yii::getAlias('@passporturl')],
		        ['pattern' => 'signup', 'route' => 'site/signup', 'host' => Yii::getAlias('@passporturl')],
				'signup' => 'shoot/signup/index',
            ],
        ],
		'assetManager' => [
            'basePath' => '@assetcustom/assets',
            'baseUrl' => '@asseturl/assets',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
		'request' => [
			'class' => 'common\components\Request',
		],
    ],
];
