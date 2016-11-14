<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\statistic\Dispatch;
use spread\models\statistic\searchs\Dispatch as DispatchSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class StatisticDispatchController extends AdminController
{
    use StatisticTrait;
	protected $modelClass = 'spread\models\statistic\Dispatch';
    protected function listinfo()
    {
		$_GET['datetime_type'] = basename($this->action->getUniqueId());

        $searchModel = new DispatchSearch();
		$searchDatas = [];//$searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas, '/statistic/dispatch');
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

	public function getValidActions()
	{
		return ['month', 'week', 'day', 'view'];
	}
}
