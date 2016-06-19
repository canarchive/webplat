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
		$mobile = \Yii::$app->request->get('mobile');
		if (empty($mobile)) {
			exit('<script>alert("您需要指定手机号，才能生成订单");history.back(-2);</script>');
		}
		$model = new OrderInfo();
		$model->initUserInfo($mobile);
		if (empty($model->userInfo)) {
			exit('<script>alert("指定的用户不存在");history.back(-2);</script>');
		}
		
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
