<?php

namespace spread\decoration;

use Yii;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $defaultRoute = '';

    public function init()
    {
        parent::init();
		//\Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
