<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

	'currentTime' => time(),
	'baseTitle' => 'website',
	'bankInfos' => require(__DIR__ . '/bank.php'),
	'genderInfos' => ['0' => '保密', '1' => '男', '2' => '女'],
	'siteInfos' => require(__DIR__ . '/site-infos.php'),

	'seoTitle' => '摄影就上摄到家',
	'seoKeyword' => '摄影o2o,摄影,人像,静物,产品,婚纱',
	'seoDescription' => '摄到家是一个提供上门摄影的全新摄影平台，简单、快捷、方便',
];
