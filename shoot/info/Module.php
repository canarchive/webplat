<?php

namespace shoot\info;

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
		$this->layout = 'main';
	    $this->layoutPath = Yii::getAlias('@app/info/views');
    }
}
