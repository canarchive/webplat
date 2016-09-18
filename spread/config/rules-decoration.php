<?php
$rules = [
    'detail-<id:\d+>' => '/decoration/detail/index',
    'bm-<view:\w+>-<city_code:\w+>' => 'decoration/detail/feature',
    'jzhd-<type:\w+>-<city:\w+>' => '/decoration/detail/spread',
    //'<view:(price|design|measure)>-<type:\w+>-<city:\w+>' => 'decoration/detail/inner',
    'hd-<id:\d+>' => 'shoot/detail/index',
    'submit' => 'shoot/signup/submit',
    'jz-signup' => '/decoration/signup/index',
    'jz-signup-tview' => '/decoration/signup/tview',
    'jz-signup-cms' => '/decoration/signup/cms',
    'stat' => '/site/stat',
	'hdenter' => '/site/hdenter',
    //'/jz-<controller:\w+>/<action:\w+>' => '/decoration/<controller>/<action>',
];

$gallerycmsRules = require Yii::getAlias('@gallerycms') . '/config/rules-house.php';
return array_merge($rules, $gallerycmsRules);
