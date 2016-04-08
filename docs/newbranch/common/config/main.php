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
