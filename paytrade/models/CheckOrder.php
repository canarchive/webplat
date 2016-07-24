<?php

namespace paytrade\models;

use common\models\PaytradeModel;
use website\models\Goods;

class CheckOrder extends PaytradeModel
{
	public function checkInfos($infos, $break = false)
	{
		$activityModel = new Activity();
		$goodsInfos = [];
		$numberAll = $priceAll = 0;
		foreach ($infos as $info) {
			$goodsId = $info['goods_id'];
			$goodsInfo = Goods::findOne($goodsId);
			if (empty($goodsInfo)) {
				if ($break) {
					return ['status' => 400, 'message' => '商品不存在或已下架'];
				}
				continue ;
			}
			$outInventory = $goodsInfo->inventory < $info['number'];
			if ($outInventory && $break) {
				return ['status' => 400, 'message' => "{$goodsInfo->name}库存不足，请调整购买数量"];
			}
			$goodsInfos[$goodsId]['out_inventory'] = $goodsInfo->inventory < $info['number'];
			$activityInfo = $activityModel->getInfoByGoods($goodsInfo);
			$goodsInfos[$goodsId]['activity'] = $activityInfo;
			$goodsInfos[$goodsId]['number'] = $info['number'];
			$goodsSku = ''; // GoodsSku::findOne($info['goods_sku']);
			$goodsInfos[$goodsId]['goodsSku'] = $goodsSku;
			$numberAll += $info['number'];
			$price = $info['number'] * (isset($goodsSku['price']) ? $goodsSku['price'] : $goodsInfo->price);
			$price = isset($activityInfo['money']) ? $price - $activityInfo['money'] : $price;
			$goodsInfos[$goodsId]['price'] = $price;
			$priceAll += $price;
			$goodsInfos[$goodsId]['info'] = $goodsInfo;
		}

		$datas = [
			'numberAll' => $numberAll,
			'priceAll' => $priceAll,
			'goodsInfos' => $goodsInfos,
		];

		return $datas;
	}

	protected function getActivityByGoods($goodsInfo)
	{
		$activity = new Activity();
		$info = $activity->getInfoByGoods($goodsInfo);

		return $info;
	}

	public function checkForOrder($datas)
	{
		$addressInfo = $this->_checkAddress($datas['addressId'], $datas['userId']);
		if (isset($addressInfo['status']) && $addressInfo['status'] == 400) {
			return $addressInfo;
		}
		$couponInfo = null;
		if (!empty($datas['couponId'])) {
		    $couponInfo = $this->_checkcoupon($datas['couponId'], $datas['userId']);
		    if (isset($couponInfo['status']) && $couponInfo['status'] == 400) {
			    return $couponInfo;
		    }
		}

		$cartInfos = $this->checkInfos($datas['cartInfos'], true);
		if (isset($cartInfos['status']) && $cartInfos['status'] == 400) {
			return $cartInfos;
		}
		$priceAll = !empty($couponInfo) ? $cartInfos['priceAll'] - $couponInfo->money : $cartInfos['priceAll'];

		if ($priceAll != $datas['priceAll']) {
			return ['status' => 400, 'message' => '金额有误，请重新购买'];
		}

		$return = [
			'addressInfo' => $addressInfo,
			'couponInfo' => $couponInfo,
			'cartInfos' => $cartInfos,
		];

		return $return;
	}

	protected function _checkAddress($id, $userId)
	{
		if (empty($id)) {
			return ['status' => 400, 'message' => '请指定收货地址'];
		}

		$info = UserAddress::findOne(['id' => $id, 'user_id' => $userId]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '请指定有效的收货地址'];
		}

		return $info;
	}

	protected function _checkCoupon($id, $userId)
	{
		$info = Coupon::findOne(['id' => $id, 'user_id' => $userId]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '请指定有效的收货地址'];
		}

		return $info;
	}
}
