<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

	'currentTime' => time(),
	'baseTitle' => 'website',
	'bankInfos' => require(__DIR__ . '/bank.php'),
	'genderInfos' => ['0' => '保密', '1' => '男', '2' => '女'],
];
