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
				Yii::getAlias('@wildurl') . '/' => '/house/site/home',
				'/' => '/house/site/home', 
				'/ts-<view:\w+>' => '/house/feature/index',

				'/meitu' => '/house/sample/index',
				'/meitu-<house_type:\w*>-<style:\w*>' => '/house/sample/filter',
				'/mt-<id:\d+>' => '/house/sample/show',

				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/sj-<id:\d+>' => '/house/decoration-company/show',
				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/shangjia' => '/house/decoration-company/index',
				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/sj-<id:\d+>' => '/house/decoration-company/show',
				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/gd-<id:\d+>' => '/house/decoration-company/show-working',
				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/shijing' => '/house/realcase/index',
				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/shj-<id:\d+>' => '/house/realcase/show',
				Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>' => '/house/site/index',

				'/shangjia' => '/house/decoration-company/index',
				'/sj-<id:\d+>' => '/house/decoration-company/show',
				'/gd-<id:\d+>' => '/house/decoration-company/show-working',
				'/shijing' => '/house/realcase/index',
				'/shj-<id:\d+>' => '/house/realcase/show',
				'/zx/<region_code:\w*>' => '/house/region/region',
				//Yii::getAlias('@m.gallerycmsurl') . '/<_q:.*>' => '/house/<_q>',
				'/<_q:.*>' => '/house/<_q>', 
            ],
        ],
    ],
	'modules' => [
		'house' => [
			'class' => 'gallerycms\house\Module',
		],
	],
    'params' => $params,
];
