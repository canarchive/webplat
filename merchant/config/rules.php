<?php
return [
    ['pattern' => Yii::getAlias('@merchanturl') . '/', 'route' => '/site/index', 'suffix' => ''],
    '/cp-<code:\w+>' => '/product/index',
	'signin' => 'site/signin',
	'signup' => 'site/signup',
];
