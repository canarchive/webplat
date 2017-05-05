<?php

namespace merchant\components;

use Yii;
use yii\helpers\Url;
use merchant\models\Company;

class ModuleBase extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $defaultRoute = '';
	public $currentCityCode;

    public function init()
    {
        parent::init();

    }

}
