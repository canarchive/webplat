<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\models\UserPaytrade;
use paytrade\models\searchs\UserPaytrade as UserPaytradeSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class UserPaytradeController extends AdminController
{
	protected $modelClass = 'paytrade\models\UserPaytrade';

    public function actionListinfo()
    {
        $searchModel = new UserPaytradeSearch();
		$searchDatas = [];//$searchModel->getSearchDatas();
		return $this->_listinfoInfo($searchModel, $searchDatas);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }
}
