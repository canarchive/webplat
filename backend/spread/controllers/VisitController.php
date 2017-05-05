<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\Visit;
use spread\models\searchs\Visit as VisitSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class VisitController extends AdminController
{
	protected $modelClass = 'spread\models\Visit';

    public function actionListinfo()
    {
        $searchModel = new VisitSearch();
		$searchDatas = $searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }
}
