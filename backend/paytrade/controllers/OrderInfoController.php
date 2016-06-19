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
		$model = new OrderInfo();
        if ($model->load(Yii::$app->request->post()) && $model->insert()) {
            return $this->redirect(['listinfo']);
        }
		
		$mobileUser = \Yii::$app->request->get('mobile_user');
		if (empty($mobileUser)) {
			exit('<script>alert("您需要指定手机号，才能生成订单");history.back(-2);</script>');
		}
		$model->initUserInfo($mobileUser);
		if (empty($model->userInfo)) {
			exit('<script>alert("指定的用户不存在");history.back(-2);</script>');
		}

		$model->goods_id = intval(\Yii::$app->request->get('goods_id'));
		$model->user_id = $model->userInfo['id'];
        return $this->render('add', [
            'model' => $model,
		]);
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
