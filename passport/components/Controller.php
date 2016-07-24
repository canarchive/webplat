<?php
namespace passport\components;

use common\components\Controller as CommonController;

class Controller extends CommonController
{
	public $homeDomain;

	public function init()
	{
		$this->homeDomain = \Yii::$app->params['homeDomain'];
		parent::init();
	}
}
