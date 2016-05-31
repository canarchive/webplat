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
		$action = Yii::$app->request->get('action');
		return $this->getInfos('business', $action);
	}

    public function actionOwner()
    {
		return $this->getInfos('owner');
	}

	protected function getInfos($field, $action = '')
	{
        $searchModel = new \spread\casher\models\searchs\StatisticOrderinfo();
		$infos = $searchModel->getInfos($field);

		if ($action == 'export') {
			return $searchModel->export($infos);
		}

		return $this->render('statistic-' . $field, ['datas' => $infos]);
    }
}
