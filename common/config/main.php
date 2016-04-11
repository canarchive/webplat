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
