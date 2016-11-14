<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\statistic\Report;
use spread\models\statistic\searchs\Report as ReportSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class StatisticChannelBigController extends AdminController
{
    use StatisticTrait;
	protected $modelClass = 'spread\models\statistic\Report';
    protected function listinfo()
    {
		$_GET['channel_type'] = 'channel_big';
		$_GET['datetime_type'] = basename($this->action->getUniqueId());

        $searchModel = new ReportSearch();
		$searchDatas = [];//$searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas, '/statistic/channel');
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

	public function getValidActions()
	{
		return ['month', 'week', 'day', 'hour', 'view'];
	}
}
