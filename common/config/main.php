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
		        ['pattern' => '/gallerycms-upload/<table:\w+>/<field:\w+>', 'route' => '/gallerycms-upload/index', 'host' => Yii::getAlias('@gallerycmsurl')],
		        ['pattern' => '/spread-upload/<table:\w+>/<field:\w+>', 'route' => '/spread-upload/index', 'host' => Yii::getAlias('@spreadurl')],
		        ['pattern' => '/merchant-upload/<table:\w+>/<field:\w+>', 'route' => '/merchant-upload/index', 'host' => Yii::getAlias('@merchanturl')],
		        ['pattern' => '/spider-upload/<table:\w+>/<field:\w+>', 'route' => '/spider-upload/index', 'host' => Yii::getAlias('@spiderurl')],
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
