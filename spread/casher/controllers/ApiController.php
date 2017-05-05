<?php

namespace spread\casher\controllers;

use spread\components\Controller;

class ApiController extends Controller
{
	public function actionOrderMobile()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$grouponId = intval(\Yii::$app->request->get('groupon_id'));
		if (empty($grouponId)) {
			return ['status' => 400, 'message' => '请指定团购会Id'];
		}

		$ip = \Yii::$app->getRequest()->getIP();
		$targetIp = \Yii::$app->params['validIPForMobile'];
		if ($ip != $targetIp) {
			return ['status' => 400, 'message' => '非法的IP-' . $ip];
		}

		$orderinfo = new \spread\casher\models\Orderinfo();
		$datas = $orderinfo->getMobiles($grouponId);
		if (empty($datas)) {
			return ['status' => 400, 'message' => '没有相关信息'];
		}

		return ['status' => 200, 'message' => 'OK', 'data' => $datas];
	}	
}
