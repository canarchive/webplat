<?php

namespace website\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $baseUrl = '@asseturl';

    public $css = [
        'css/site.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
