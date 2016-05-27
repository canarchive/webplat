<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class StatisticOrderinfoController extends AdminController
{
	public $showSubnav = false;

	public function actionGroupon()
	{
		return $this->getInfos('groupon');
	}

    public function actionBusiness()
    {
		return $this->getInfos('business');
	}

    public function actionOwner()
    {
		return $this->getInfos('owner');
	}

	protected function getInfos($field)
	{
        $searchModel = new \spread\casher\models\searchs\StatisticOrderinfo();
		$infos = $searchModel->getInfos($field);

		return $this->render('statistic-orderinfo', ['datas' => $infos, 'fields' => $typeInfo]);
    }
}
