<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\NotFoundHttpException;

trait StatisticTrait
{
	public function beforeAction($action)
	{
		$controllerId = $this->id;
		$actionIdBase = basename($this->action->getUniqueId());
		if (!in_array($actionIdBase, $this->validActions)) {
            throw new NotFoundHttpException('The requested page does not exist.');		
		}

        return parent::beforeAction($action);
	}

	public function actionMonth()
	{
		return $this->listinfo();
	}

	public function actionWeek()
	{
		return $this->listinfo();
	}

	public function actionDay()
	{
		return $this->listinfo();
	}

	public function actionHour()
	{
		return $this->listinfo();
	}
}
