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
		$action = empty($action) ? 'baseinfo' : $action;
		$grouponInfos = \Yii::$app->params['grouponInfos'];
		if ($action == 'baseinfo') {
			return $this->render('statistic-baseinfo', ['grouponInfos' => $grouponInfos]);
		}

		$grouponId = intval(\Yii::$app->request->get('groupon_id'));
		if (empty($grouponId)) {
			exit('参数错误');
		}
		$grouponInfo = isset($grouponInfos[$grouponId]) ? $grouponInfos[$grouponId] : false;
		if (!isset($grouponInfos[$grouponId])) {
			exit('请指定有效的团购会ID');
		}

        $searchModel = new \spread\casher\models\searchs\StatisticOrderinfo();
		$infos = $searchModel->getInfos($field, $grouponId);

		if ($action == 'export') {
			return $searchModel->export($infos);
		}
		$datas = [
			'datas' => $infos,
			'grouponInfo' => $grouponInfo,
		];
		//\Yii::$app->layout = null;

		return $this->render('statistic-' . $field, $datas);
    }
}
