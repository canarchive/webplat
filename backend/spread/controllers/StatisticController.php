<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Statistic;
use spread\models\searchs\Statistic as StatisticSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class StatisticController extends AdminController
{
	protected $modelClass = 'spread\models\Statistic';

    public function actionListinfo()
    {
        $searchModel = new StatisticSearch();
		$searchDatas = $searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }
}
