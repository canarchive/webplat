<?php
$configInfo = [
	'cloud' => [
		'url' => '',
		'uid' => '',
		'pwd' => '',
	],
];
$configLocal = require(__DIR__ . '/config-local.php');

return array_merge($configInfo, $configLocal);
