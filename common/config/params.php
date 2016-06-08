<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

	'currentTime' => time(),
	'baseTitle' => 'website',
	'bankInfos' => require(__DIR__ . '/bank.php'),
	'genderInfos' => ['0' => '保密', '1' => '男', '2' => '女'],

	// 使用了收银机的团购会
	'grouponInfos' => [
		'2474' => [
			'groupon_id' => '2474',
			'groupon_name' => '北京-5.28-2.29团购会',
			'days' => [1 => '2016-05-28', 2 => '2016-05-29'],
		],
		'2487' => [
			'groupon_id' => '2487',
		    'groupon_name' => '北京-6.9-6.10端午节超大型装修建材家具博览会',
			'days' => [1 => '2016-06-09', 2 => '2016-06-10'],
		],
	],
];
