<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;
use paytrade\models\Cart;
use paytrade\models\CheckOrder;
use paytrade\models\OrderInfo;

class OrderInfoController extends Controller
{
    public $modelClass = 'paytrade\models\OrderInfo';

    public function actionIndex()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;
		$searchModel = new \paytrade\models\searchs\OrderInfo();
		return $this->_index($searchModel);
    }

    public function actionCreate()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;

		$userId = 1;//
		$couponId = Yii::$app->request->get('coupon_id');
		$datas = [
			'userId' => $userId,
			'couponId' => Yii::$app->request->post('coupon_id'),
			'priceAll' => Yii::$app->request->post('price_all'),
		];

		$checkOrder = new CheckOrder();
		$orderInfos = $checkOrder->checkForOrder($datas);

		if (isset($orderInfos['status']) && $orderInfos['status'] != 200) {
    		foreach ($orderInfos['infos'] as $cartInfo) {
    			$cartInfo->is_delete = 0;
    			$cartInfo->update(false);
    		}
			return $orderInfos;
		}

		$orderModel = new OrderInfo();
		unset($datas['cartInfos']);
		$result = $orderModel->createOrder($orderInfos, $datas);
		print_r($result);exit();

		return $result;		
    }

    public function actionUpdate($id)
    {
		return $this->_update($id);
    }

    public function actionDelete($id)
    {
		return $this->_delete($id);
    }

    public function actionView($id)
    {
		return $this->_view($id);
    }
}
