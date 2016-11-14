<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\statistic\Keyword;
use spread\models\statistic\searchs\Keyword as KeywordSearch;
use backend\components\AdminController;

class StatisticKeywordController extends AdminController
{
    use StatisticTrait;
	protected $modelClass = 'spread\models\statistic\Keyword';

    public function listinfo()
    {
		//$_GET['channel_type'] = 'channel';
		$_GET['datetime_type'] = $this->actionIdBase;
        $searchModel = new KeywordSearch();
		$searchDatas = [];//$searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas, '/statistic/keyword');
    }

	public function getValidActions()
	{
		return ['month', 'week', 'day', 'hour', 'view'];
	}
}
