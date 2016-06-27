<?php

namespace common\components;

use yii\web\ErrorAction as ErrorActionBase;

class ErrorAction extends ErrorActionBase
{
	protected function beforeRun()
    {
		\Yii::$app->layout = null;
		if (!empty($this->controller)) {
			$this->controller->layout = null;
		}
        return true;
    }
}
