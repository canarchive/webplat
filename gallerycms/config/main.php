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
				'/ts-<view:\w+>' => '/house/feature/index',
				'/' => '/house/site/home', 
				'/meitu' => '/house/sample/index',
				'/meitu-<house_type:\w*>-<style:\w*>' => '/house/sample/filter',
				'/mt-<id:\d+>' => '/house/sample/show',
				'/shangjia' => '/house/decoration-company/index',
				'/sj-<id:\d+>' => '/house/decoration-company/show',
				'/gd-<id:\d+>' => '/house/decoration-company/show-working',
				'/shijing' => '/house/realcase/index',
				'/shj-<id:\d+>' => '/house/realcase/show',
				'/<company_code:\w*>' => '/house/site/index', 
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
