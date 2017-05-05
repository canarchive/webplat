<?php
return [
    ['pattern' => Yii::getAlias('@merchanturl') . '/', 'route' => '/house/site/index', 'suffix' => ''],
    '/cp-<code:\w+>' => '/house/product/index',
	'signin' => '/house/site/signin',
	'signup' => '/housesite/signup',

	'self' => '/house/info/index',
	'message' => '/house/owner/message',
	'notelist' => '/house/owner/notelist',
];
