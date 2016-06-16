<?php

namespace paytrade\controllers;

use Yii;
use paytrade\models\Cart;
use paytrade\models\CheckOrder;
use paytrade\models\OrderInfo;
use paytrade\components\Controller as PaytradeController;

class PayController extends PaytradeController
{
	public $layout = 'pay';
    public function actionPay()
    {
        return $this->render('pay');
    }

    public function actionOrder()
    {
		$userId = 1;//Yii::$app->user->id;
		$cartModel = new Cart();
		$infos = $cartModel->listInfo(['userId' => $userId]);

		$checkOrder = new CheckOrder();
		$goodsInfos = $checkOrder->checkInfos($infos, true);

		$couponInfos = [];
		$addressInfos = [];
		$datas = [
			'goodsInfos' => $goodsInfos,
			'couponInfos' => $couponInfos,
			'addressInfos' => $addressInfos,
		];

        return $this->render('order', $datas);
    }

	public function actionOrderCreate()
	{
		$userId = 1;//
		$couponId = Yii::$app->request->get('coupon_id');
		$cartModel = new Cart();
		$infos = $cartModel->listInfo(['userId' => $userId]);
		foreach ($infos as $cartInfo) {
			$cartInfo->is_delete = 2;
			$cartInfo->update(false);
		}
		$datas = [
			'userId' => $userId,
			'addressId' => Yii::$app->request->get('address_id'),
			'couponId' => Yii::$app->request->get('coupon_id'),
			'priceAll' => Yii::$app->request->get('price_all'),
			'best_time' => Yii::$app->request->get('best_time'),
			'invoice_get' => Yii::$app->request->get('invoice_get', 0),
			'invoice_type' => Yii::$app->request->get('invoice_type', ''),
			'invoice_title' => Yii::$app->request->get('invoice_title', ''),
			'cartInfos' => $infos,
		];

		$checkOrder = new CheckOrder();
		$orderInfos = $checkOrder->checkForOrder($datas);

		if (isset($orderInfos['status']) && $orderInfos['status'] == 400) {
    		foreach ($infos as $cartInfo) {
    			$cartInfo->is_delete = 0;
    			$cartInfo->update(false);
    		}
			print_r($orderInfos);exit();
			return $orderInfos;
		}

		$orderModel = new OrderInfo();
		$result = $orderModel->createOrder($orderInfos, $datas);
		print_r($result);exit();

		return $result;
	}
}
