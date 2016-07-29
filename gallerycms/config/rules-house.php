<?php
return [
    //Yii::getAlias('@wildurl') . '/' => '/house/site/home',
    ['pattern' => Yii::getAlias('@wildurl') . '/', 'route' => '/house/site/home', 'suffix' => ''],
    //Yii::getAlias('@gallerycmsurl') . '/' => '/house/site/home', 
    Yii::getAlias('@m.gallerycmsurl') . '/' => '/house/mobile-site/home', 

    Yii::getAlias('@gallerycmsurl') . '/meitu' => '/house/sample/index',
    Yii::getAlias('@gallerycmsurl') . '/meitu-<house_type:\w*>-<style:\w*>' => '/house/sample/filter',
    Yii::getAlias('@gallerycmsurl') . '/mt-<id:\d+>' => '/house/sample/show',

    Yii::getAlias('@m.gallerycmsurl') . '/meitu' => '/house/mobile-sample/index',
    Yii::getAlias('@m.gallerycmsurl') . '/meitu-<house_type:\w*>-<style:\w*>' => '/house/mobile-sample/filter',
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
    Yii::getAlias('@wildurl') . '/zx/<region_code:\w*>' => '/house/region/region',
    //Yii::getAlias('@m.gallerycmsurl') . '/<_q:.*>' => '/house/<_q>',
    //'/<_q:.*>' => '/house/<_q>', 
];
