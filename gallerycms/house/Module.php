<?php

namespace gallerycms\house;

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
		//$this->viewPath = '@gallerycms/views/house';
		$this->layout = 'main';
	    //$this->layoutPath = Yii::getAlias('@app/info/views');
    }
}
