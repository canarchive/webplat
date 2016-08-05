<?php

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'rest-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'rest-client'],
    'modules' => [
        'v1' => [
            'class' => 'restapp\versions\v1\RestModule'
        ],
        'v2' => [
            'class' => 'restapp\versions\v2\RestModule'
        ],
        'rest-client' => [
            'class' => 'restapp\tool\Module',
            'baseUrl' => Yii::getAlias('@restappurl'),
			'allowedIPs' => ['*'],
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'passport\models\User',
            'enableSession' => false,
        ],
        'response' => [
            'format' => yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'request' => [
            'class' => '\common\components\Request',
            'enableCookieValidation' => false,
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/rules.php'),
        ],
    ],
    'params' => $params,
];
