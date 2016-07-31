<?php
return [
    //Yii::getAlias('@wildurl') . '/' => '/house/site/home',
    ['pattern' => Yii::getAlias('@wildurl') . '/', 'route' => '/house/site/home', 'suffix' => ''],
    //Yii::getAlias('@gallerycmsurl') . '/' => '/house/site/home', 
    Yii::getAlias('@m.gallerycmsurl') . '/' => '/house/mobile-site/home', 

    Yii::getAlias('@gallerycmsurl') . '/info-<action:\w+>' => '/house/info/<action>',
    Yii::getAlias('@gallerycmsurl') . '/map' => '/house/site/map',
	[
		'pattern' => Yii::getAlias('@gallerycmsurl') . '/meitu/<tag>/<page:\d*>',
		'route'	=> '/house/sample/index',
		'defaults' => ['page' => 1, 'tag' => '']
	],
    Yii::getAlias('@gallerycmsurl') . '/mt-<id:\d+>' => '/house/sample/show',

    Yii::getAlias('@m.gallerycmsurl') . '/info-<action:\w+>' => '/house/mobile-info/<action>',
    Yii::getAlias('@m.gallerycmsurl') . '/map' => '/house/mobile-site/map',
	[
		'pattern' => Yii::getAlias('@gallerycmsurl') . '/meitu/<tag>/<page:\d*>',
		'route'	=> '/house/mobile-sample/index',
		'defaults' => ['page' => 1, 'tag' => '']
	],
    Yii::getAlias('@m.gallerycmsurl') . '/mt-<id:\d+>' => '/house/mobile-sample/show',

    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/ts-<view:\w+>' => '/house/mobile-feature/index',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/shangjia' => '/house/mobile-decoration-company/index',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/sj-<id:\d+>' => '/house/mobile-decoration-company/show',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/gd-<id:\d+>' => '/house/mobile-decoration-company/show-working',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/shijing' => '/house/mobile-realcase/index',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/shj-<id:\d+>' => '/house/mobile-realcase/show',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>/zx/<region_code:\w*>' => '/house/mobile-region/region',
    Yii::getAlias('@m.gallerycmsurl') . '/<city_code:\w+>' => '/house/mobile-site/index',

    Yii::getAlias('@wildurl') . '/ts-<view:\w+>' => '/house/feature/index',
    Yii::getAlias('@wildurl') . '/shangjia' => '/house/decoration-company/index',
    Yii::getAlias('@wildurl') . '/sj-<id:\d+>' => '/house/decoration-company/show',
    Yii::getAlias('@wildurl') . '/gd-<id:\d+>' => '/house/decoration-company/show-working',
    Yii::getAlias('@wildurl') . '/shijing' => '/house/realcase/index',
    Yii::getAlias('@wildurl') . '/shj-<id:\d+>' => '/house/realcase/show',
    //Yii::getAlias('@wildurl') . '/zx/<region_code:\w*>' => '/house/region/region',
	[
		'pattern' => Yii::getAlias('@wildurl') . '/zx/<county>/<vtown>',
		'route'	=> '/house/region/region',
		'defaults' => ['vtown' => '']
	],
    //Yii::getAlias('@m.gallerycmsurl') . '/<_q:.*>' => '/house/<_q>',
    //'/<_q:.*>' => '/house/<_q>', 
];
