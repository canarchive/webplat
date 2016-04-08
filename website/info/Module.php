<?php

namespace website\info;

use Yii;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $defaultRoute = '';

	public $db = 'dbWebsite';

    public function init()
    {
        parent::init();
    }
}
