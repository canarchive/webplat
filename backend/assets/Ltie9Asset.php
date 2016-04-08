<?php

namespace backend\assets;

class Ltie9Asset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $baseUrl = '@asseturl/static';

    /**
     * @inheritdoc
     */
    public $js = [
        'html5shiv/3.7.2/html5shiv.min.js',
        'respond/1.4.2/respond.min.js',
    ];

	public $jsOptions = ['condition' => 'lte IE9'];
}
