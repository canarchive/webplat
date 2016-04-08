<?php
$configInfo = [
	'register' => [
		'length' => 4, // 验证码长度，可以设置动态长度，如 [4,8]
		'sleep' => 60, // 两次发送时间间隔
		'sendTimes' => 5, // 同一个手机号每天发送频率 
		'expire' => 300, // 验证码有效时间
	],
	'login' => [
		'length' => 4,
		'sleep' => 1,
		'sendTimes' => 100,
		'expire' => 10000,
	],
];
$configLocal = require_once(__DIR__ . '/config-verification-local.php');

return array_merge($configInfo, $configLocal);
