<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\statistic\Report;
use spread\models\statistic\searchs\Report as ReportSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class StatisticChannelController extends AdminController
{
    use StatisticTrait;
	protected $modelClass = 'spread\models\statistic\Report';

    public function listinfo()
    {
		$_GET['channel_type'] = 'channel';
		$_GET['datetime_type'] = $this->actionIdBase;
        $searchModel = new ReportSearch();
		$searchDatas = [];//$searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas, '/statistic/channel');
    }

	public function getValidActions()
	{
		return ['month', 'week', 'day', 'hour', 'view'];
	}
}
