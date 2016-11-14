<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\statistic\ReportService;
use spread\models\statistic\searchs\ReportService as ReportServiceSearch;
use backend\components\AdminController;

class StatisticServiceController extends AdminController
{
    use StatisticTrait;
	protected $modelClass = 'spread\models\statistic\ReportService';

    public function listinfo()
    {
		//$_GET['channel_type'] = 'channel';
		$_GET['datetime_type'] = $this->actionIdBase;
        $searchModel = new ReportServiceSearch();
		$searchDatas = [];//$searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas, '/statistic/service');
    }

	public function getValidActions()
	{
		return ['month', 'week', 'day', 'view'];
	}
}
