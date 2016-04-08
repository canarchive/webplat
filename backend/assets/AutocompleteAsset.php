<?php

namespace backend\assets;

class AutocompleteAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    //public $sourcePath = '@backend/assets';
    public $baseUrl = '@asseturl';

    /**
     * @inheritdoc
     */
    public $css = [
        'backend/jquery-ui.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'backend/jquery-ui.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
