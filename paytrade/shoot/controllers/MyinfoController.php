<?php

namespace paytrade\shoot\controllers;

use yii\helpers\Url;
use paytrade\components\Controller as PaytradeController;

class MyinfoController extends PaytradeController
{
	public $layout = '@shoot/views/default/layouts/main';
	
    public function actionOrder()
    {
		$orderInfo = new \paytrade\shoot\models\OrderInfo();
		$infos = $orderInfo->getInfosByUserId(\Yii::$app->user->id);
        return $this->render('order', ['infos' => $infos]);
    }

	public function actionOrderShow()
	{
		$orderid = \Yii::$app->request->get('orderid');
		$orderInfo = new \paytrade\shoot\models\OrderInfo();
		$info = $orderInfo->getInfo($orderid);
		if ($info['status'] != 200) {
			return $this->redirect(Url::to(['myinfo/order']))->send();
		}

		$data = $info['data']->formatInfo();
		return $this->render('order-show', $data);
	}

	public function actionOrderCancel()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$orderid = \Yii::$app->request->get('orderid');
		$orderInfo = new \paytrade\shoot\models\OrderInfo();
		$user = \Yii::$app->user;
		$userId = 1;//\Yii::$app->user->id;
		$info = $orderInfo->getInfo($orderid, $userId);
		if ($info['status'] != 200) {
			return $info;
		}
		$order = $info['data'];

		$data = [
			'user_id' => 1,//$user->id,
			'user_name' => 'sss',//$user->mobile,
		];
		$result = $order->cancelInfo($data);
		return $result;
	}
}
