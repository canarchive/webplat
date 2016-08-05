<?php

namespace paytrade\cloud\models;

use common\models\PaytradeModel;
use website\models\Goods;
use website\models\GoodsSnapup;

class CheckOrder extends PaytradeModel
{
	public function checkInfos($infos, $break = false)
	{
		$goodsInfos = [];
		$numberAll = $priceAll = 0;
		foreach ($infos as $key => $info) {
			$check = $this->checkInfo($info);
			if ($check['status'] != 200) {
				if ($break) {
					return $check;
				}
				if ($check['status'] == 400) {
				    unset($infos[$key]);
				    continue;
				}
			}

			$numberAll += $info['number'];
			$price = $info['number'];
			$priceAll += $price;

			if ($check['status'] != 200) {
				$info->status = 0;
				$info->update(false);
			}
			$info = $info->toArray();
			$info['number_desc'] = $check['status'] != 200 ? $check['message'] : '';
			$info['snapupInfo'] = $check['snapupInfo'];
			$info['goodsInfo'] = $check['goodsInfo'];
			$infos[$key] = $info;
		}

		$datas = [
			'numberAll' => $numberAll,
			'priceAll' => $priceAll,
			'infos' => $infos,
		];

		return $datas;
	}

	public function checkForOrder($datas)
	{
		$cartModel = new Cart();
		$infos = $cartModel->listInfo(['userId' => $datas['userId']]);
		foreach ($infos as $key => $cartInfo) {
			if ($cartInfo->is_delete != 0 || $cartInfo->status != 1) {
				unset($infos[$key]);
				continue;
			}
			//$cartInfo->is_delete = 2;
			//$cartInfo->update(false);
		}

		if (empty($infos)) {
			return ['status' => 400, 'message' => '购物车为空'];
		}

		/*$addressInfo = $this->_checkAddress($datas['addressId'], $datas['userId']);
		if (isset($addressInfo['status']) && $addressInfo['status'] == 400) {
			return $addressInfo;
		}*/
		$couponInfo = null;
		if (!empty($datas['couponId'])) {
		    $couponInfo = $this->_checkcoupon($datas['couponId'], $datas['userId']);
		    if (isset($couponInfo['status']) && $couponInfo['status'] == 400) {
				$couponInfo['infos'] = $infos;
			    return $couponInfo;
		    }
		}

		$cartInfos = $this->checkInfos($infos, true);
		if (isset($cartInfos['status']) && $cartInfos['status'] != 200) {
			$cartInfos['infos'] = $infos;
			return $cartInfos;
		}
		$priceAll = !empty($couponInfo) ? $cartInfos['priceAll'] - $couponInfo->money : $cartInfos['priceAll'];

		if ($priceAll != $datas['priceAll']) {
			return ['status' => 400, 'message' => '金额有误，请重新购买', 'infos' => $infos];
		}

		$return = [
			//'addressInfo' => $addressInfo,
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

	protected function checkInfo($info)
	{
		$return = [
			'status' => 200,
			'message' => 'OK',
			'snapupInfo' => [],
			'goodsInfo' => [],
		];
		$snapupInfo = GoodsSnapup::findOne($info['snapup_id']);
		if (empty($snapupInfo)) {
			$info->is_delete = 1;
			$info->update(false);
			$return['status'] = 400;
			$return['message'] = '信息有误';
			return $return;
		}
		$check = $snapupInfo->checkNumber($snapupInfo, $info['number']);
		if ($check['status'] == 400) {
			$return['status'] = $check['status'];
			$return['message'] = $check['message'];
			return $return;
		}

		$goodsInfo = Goods::findOne($snapupInfo['goods_id']);
		if (empty($goodsInfo)) {
			$return['status'] = 400;
			$return['message'] = '商品不存在';
			return $return;
		}

		$goodsInfo->main_photo = $goodsInfo->getAttachmentUrl($goodsInfo->main_photo);

		$return['status'] = $check['status'];
		$return['message'] = $check['message'];
		$return['snapupInfo'] = $snapupInfo->toArray();
		$return['goodsInfo'] = $goodsInfo->toArray();
		return $return;
	}
}
