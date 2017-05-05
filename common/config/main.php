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
		        ['pattern' => '/shoot-upload/<table:\w+>/<field:\w+>', 'route' => '/shoot-upload/index', 'host' => Yii::getAlias('@shooturl')],
		        ['pattern' => '/spread-upload/<table:\w+>/<field:\w+>', 'route' => '/spread-upload/index', 'host' => Yii::getAlias('@spreadurl')],
		        ['pattern' => 'signin', 'route' => 'site/signin', 'host' => Yii::getAlias('@passporturl')],
		        ['pattern' => 'signup', 'route' => 'site/signup', 'host' => Yii::getAlias('@passporturl')],
				'signup' => 'shoot/signup/index',
		        ['pattern' => '/gallerycms-upload/<table:\w+>/<field:\w+>', 'route' => '/gallerycms-upload/index', 'host' => Yii::getAlias('@gallerycmsurl')],
		        ['pattern' => '/merchant-upload/<table:\w+>/<field:\w+>', 'route' => '/merchant-upload/index', 'host' => Yii::getAlias('@merchanturl')],
		        ['pattern' => '/website-upload/<table:\w+>/<field:\w+>', 'route' => '/website-upload/index', 'host' => Yii::getAlias('@websiteurl')],
		        ['pattern' => '/paytrade-upload/<table:\w+>/<field:\w+>', 'route' => '/paytrade-upload/index', 'host' => Yii::getAlias('@paytradeurl')],
                ['pattern' => 'callback/<result:\w+>/<code:\w+>', 'route' => 'account/callback', 'host' => Yii::getAlias('@paytradeurl')],
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
