<?php

namespace backend\paytrade\controllers;

use Yii;
use paytrade\shoot\models\OrderInfo;
use paytrade\shoot\models\searchs\OrderInfo as OrderInfoSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class OrderInfoController extends AdminController
{
	protected $modelClass = 'paytrade\shoot\models\OrderInfo';

    public function actionListinfo()
    {
        $searchModel = new OrderInfoSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new OrderInfo());
    }

    public function actionUpdate($id)
    {
		$data = $this->_userInfos($id, 'activity-user');
		if ($this->isAjax) {
			return $data;
		}
		//print_r($data);exit();

        return $this->render('update', $data);
    }
}
