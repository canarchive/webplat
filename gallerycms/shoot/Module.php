<?php

namespace gallerycms\shoot;

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
		//$this->viewPath = '@gallerycms/views/shoot';
    }
}
