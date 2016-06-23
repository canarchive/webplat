<?php

namespace paytrade\components;

use paytrade\components\Controller as PaytradeController;
use common\components\ResponseCode;

class ChargeController extends PaytradeController
{
	public $enableCsrfValidation = false;

	protected function accountRecord()
	{
		$data = [
			'orderid' => '',
			'payment_code' => $channel,
			'account_type' => 'touser',
			'user_id' => 1,
			'money' => 10,
			'accounted_at' => time(),
			'status' => 0,
		];
		$accountModel = new Account($data);

		Account::save();
	}

	protected function returnInfo($code, $data = [])
	{
		$info = ResponseCode::getCode($code);
		$info['data'] = $data;

		return $info;
	}

	/**
	 * Deal the pay operatoin
	 *
	 * @return void
	 */
	protected function _confirmCharge($params)
	{
		$data = array(
			'user_id' => 1,//,
			'orderid' => $this->_createSingleRandomStr(),
			'payment_code' => $params['channel'],
			'money' => $params['amount'],
			'account_type' => $params['account_type'],
			'period' => $params['snapup_id'],
			'accounted_at' => \Yii::$app->params['currentTime'],
			'status' => 0,
		);

		$accountModel = new \paytrade\models\Account($data);
		$return = $accountModel->save();

		return $return;
	}

    protected function validParam()
    {
        $serial = $this->input->get_post('serial');
        $this->loginedUserInfo = array();

        if (empty($this->loginedUserInfo)) {
            return $this->_getStatusInfo('NEED_LOGIN');
        }

        $money = $this->input->get('money');
        if ($money <= 0) {
            return $this->_getStatusInfo('MONEY_ERROR');
        }
        $paymentCode = $this->input->get('payment_code');
        $paymentCode = empty($paymentCode) ? 'aliwap' : $paymentCode;
        $paymentInfo = isset($this->paymentInfos[$paymentCode]) ? $this->paymentInfos[$paymentCode] : array();
        if (empty($paymentInfo)) {
            return $this->_getStatusInfo('PAYMENT_NO_EXIST');
        }

        $accountType = $this->input->get('accountType', true);
        $accountType = in_array($accountType, $this->accountTypeInfos) ? $accountType : 'topay';

        $goodInfos = array();
        $activityIdUsed = $couponIdUsed = $activityMoney = $couponMoney = 0;
        if ($accountType == 'topay') {
            $isNew = in_array($this->clientVersion, array('1.0')) ? true : false;

            $goodIds = $this->input->get_post('good_id');
            $rentStart = $this->time;//$this->input->get_post('rent_start');
            $rentType = $isNew ? $goodIds : $this->input->get_post('rent_type');
            if (empty($isNew)) {
                $newRentType = array();
                foreach ((array) $goodIds as $subValue) {
                    $newRentType[$subValue] = $rentType;
                }
                $rentType = $newRentType;
            }
            $address = $this->input->get_post('address', true);
            $mobile = $this->input->get_post('mobile', true);
            $truename = $this->input->get_post('truename', true);
            $couponId = intval($this->input->get_post('coupon_id'));
            $activityId = intval($this->input->get_post('activity_id'));
            if (empty($goodIds) || empty($rentType) || empty($address) || empty($mobile) || empty($truename)) {
                return $this->_getStatusInfo('PARAM_ERROR', array('goodIds' => $goodIds, 'rentType' => $rentType, 'address' => $address, 'mobile' => $mobile, 'truename' => $truename));
            }
            /*if ($rentStart < $this->time || $rentStart > $this->time + 8600 * 100) {
                return $this->_getStatusInfo('RENT_DATE_ERROR');
            }*/

            $validGoodIds = $isNew ? array_keys($goodIds) : $goodIds;
            $validGood = $this->validGood($validGoodIds);
            if ($validGood['code'] != 10000) {
                return $validGood;
            }

            $goodInfos = $validGood['data'];
            $validMoney = $this->validMoney($goodInfos, $rentType, $money, $couponId, $activityId);
            if ($validMoney['code'] != 10000) {
                return $validMoney;
            }
            $activityIdUsed = $validMoney['data']['activityId'];
            $activityMoney = $validMoney['data']['activityMoney'];
            $couponIdUsed = $validMoney['data']['couponId'];
            $couponMoney = $validMoney['data']['couponMoney'];
        }

        $galleryCode = $this->input->get_post('gallery_code');
        $orderInfo = array(
            'orderid' => $this->_createSingleRandomStr(),
            'payment_code' => $paymentCode,
            'payment_rate' => $paymentInfo['rate'],
            'account_type' => $accountType,
            'user_id' => $this->loginedUserInfo['id'],
            'user_name' => $this->loginedUserInfo['name'],
            'truename' => isset($truename) ? $truename : '',
            'mobile' => $this->loginedUserInfo['mobile'],
            'address' => isset($address) ? $address : '',
            'good_id' => implode(',', array_keys($goodInfos)),
            'rent_start' => isset($rentStart) ? $rentStart : '',
            'rent_type' => isset($rentType) ? serialize($rentType) : '',
            'gallery_code' => $galleryCode,
            'money' => $money,
            'activity_id' => $activityIdUsed,
            'coupon_id' => $couponIdUsed,
            'money_activity' => $activityMoney,
            'money_coupon' => $couponMoney,
            'account_time' => $this->time,
            'status' => 0,
            'day' => date('Ymd', $this->time),
        );

        return $this->_getStatusInfo('OK', array('orderInfo' => $orderInfo, 'paymentInfo' => $paymentInfo, 'goodInfos' => $goodInfos, 'goodIds' => $goodIds));
    }

    protected function validMoney($goodInfos, $rentType, $money, $couponId, $activityId = 0)
    {
        $goodMoney = 0;
        foreach ($goodInfos as $goodInfo) {
            $currentRentType = $rentType[$goodInfo['id']];
            $currentMoney = isset($goodInfo['price_rent_' . $currentRentType]) ? $goodInfo['price_rent_' . $currentRentType] : 0;
            if (empty($currentMoney)) {
                return $this->_getStatusInfo('GOOD_MONEY_WRONG');
            }
            $goodMoney += $currentMoney;
        }

        $data = array('activityId' => 0, 'couponId' => 0, 'activityMoney' => 0, 'couponMoney' => 0);
        if ($money >= $goodMoney) {
            return $this->_getStatusInfo('OK', $data);
        }

        /*$activityMoneyInfo = $this->getActivityFull($goodMoney);
        if ($money + $activityMoneyInfo['money'] >= $goodMoney) {
            return $this->_getStatusInfo('OK', array('activityId' => activityInfo['activityId'], 'couponId' => 0));
        }*/

        $activityMoney = $this->getActivityMoney($activityId, $goodMoney);
        if ($money + $activityMoney >= $goodMoney) {
            $data['activityId'] = $activityId;
            $data['activityMoney'] = $activityMoney;
            return $this->_getStatusInfo('OK', $data);
        }

        if (empty($activityId) && !empty($couponId)) {
            $couponMoney = $this->getCouponMoney($couponId);
            if ($money + $couponMoney >= $goodMoney) {
                $data['couponId'] = $couponId;
                $data['couponMoney'] = $couponMoney;
                return $this->_getStatusInfo('OK', $data);
            }
        }

        return $this->_getStatusInfo('GOOD_MONEY_ERROR');
    }

    protected function getActivityMoney($activityId, $moneyFull)
    {
        $activityInfo = isset($this->activityInfos[$activityId]) ? $this->activityInfos[$activityId] : false;
        if (empty($activityInfo)) {
            return 0;
        }
        if ($activityInfo['status'] == 1 && $activityInfo['money_full'] <= $moneyFull && $activityInfo['start_time'] < $this->time && $activityInfo['end_time'] > $this->time) {
            return $activityInfo['money'];
        }
        return 0;
    }

    protected function getActivityFull($moneyFull)
    {
        foreach ($this->activityInfos as $activityInfo) {
            if ($activityInfo['type'] == 'reduction' && $activityInfo['money_full'] <= $moneyFull && $activityInfo['status'] == 1 && $activityInfo['start_time'] < $this->time && $activityInfo['end_time'] > $this->time) {
                return array('activitId' => $activityInfo['id'], 'money' => $activityInfo['money']);
            }
        }
        return 0;
    }

    protected function getCouponMoney($couponId)
    {
        $this->_loadModel('pay', 'couponModel');
        $couponInfo = $this->couponModel->getInfo(array('id' => $couponId));
        if (empty($couponInfo) || $couponInfo['status'] != 1 || $couponInfo['user_id'] != $this->loginedUserInfo['id'] || $couponInfo['end_time'] < $this->time) {
            return 0;
        }
        return $couponInfo['money'];
    }

    protected function validGood($goodIds = 0, $isPay = false)
    {
        $goodIds = !empty($goodIds) ? $goodIds : $this->input->get_post('good_id');
        if (empty($goodIds)) {
            return $this->_getStatusInfo('PARAM_ERROR');
        }

        $this->_loadModel('luxury', 'goodModel');
        foreach ((array) $goodIds as $goodId) {
            $goodInfo = $this->goodModel->getInfo(array('id' => $goodId));
            if (empty($goodInfo)) {
                return $this->_getStatusInfo('INFO_EMPTY', array('good_id' => $goodId));
            }
    
            if ($goodInfo['in_use']) {
                return $this->_getStatusInfo('GOOD_IN_USEORBOOK', array('good_id' => $goodId));
            }
            if (empty($isPay) && $goodInfo['book_status'] && !empty($goodInfo['book_time']) && $goodInfo['book_time'] + 600 > $this->time && $goodInfo['book_userid'] != $this->loginedUserInfo['id']) {
                return $this->_getStatusInfo('GOOD_IN_USEORBOOK', array('good_id' => $goodId));
            }
            $goodInfos[$goodId] = $goodInfo;
        }

        return $this->_getStatusInfo('OK', $goodInfos);
    }

    protected function dealTopay($orderInfo)
    {
        $this->_loadModel(APPCODE, 'payModel');
        $oldPayInfo = $this->payModel->getInfo(array('orderid' => $orderInfo['orderid']));
        if (!empty($oldPayInfo)) {
            return $this->_getStatusInfo('OK');
        }
        if (!empty($orderInfo['coupon_id'])) {
            $validCoupon = $this->updateCoupon($orderInfo['coupon_id']);
            if ($validCoupon['code'] != 10000) {
                return $validCoupon;
            }
        }

        $goodIds = $orderInfo['good_id'];
        $validGood = $this->validGood($goodIds, true);
        
        if ($validGood['code'] != 10000) {
            return $validGood;
        }
        $goodInfos = $validGood['data'];

        $payInfo = array(
            'orderid' => $orderInfo['orderid'],
            'pay_type' => $orderInfo['account_type'],
            'user_name' => $orderInfo['user_name'],
            'user_id' => $orderInfo['user_id'],
            'money' => $orderInfo['money_valid'],
            'pay_time' => $this->time,
            'day' => date('Ymd', $this->time),
        );

        $result = $this->recordPay($payInfo);
        if ($result['code'] != 10000) {
            return $result;
        }

        return $this->updateUselist($orderInfo, $goodInfos);
    }

    protected function updateUselist($orderInfo, $goodInfos, $isOffline = false)
    {
        $this->_loadModel('luxury', 'goodModel');
        $uselistData = array(
            'good_id' => $orderInfo['good_id'],
            'orderid' => $orderInfo['orderid'],//isset($orderInfo['pay_id']) ? $orderInfo['pay_id'] : $this->_createSingleRandomStr(),
            'truename' => $orderInfo['truename'],
            'mobile' => $orderInfo['mobile'],
            'address' => $orderInfo['address'],
            'rent_start' => $orderInfo['rent_start'],
            'rent_type' => $orderInfo['rent_type'],
            'activity_id' => $orderInfo['activity_id'],
            'coupon_id' => $orderInfo['coupon_id'],
            'money' => $orderInfo['money'],
            'money_activity' => $orderInfo['money_activity'],
            'money_coupon' => $orderInfo['money_coupon'],
            'pay_status' => $isOffline ? 0 : 1,
            'user_id' => $orderInfo['user_id'],
            'user_name' => $orderInfo['user_name'],
            'is_offline' => $isOffline ? 1 : 0,
        );
        $this->_loadModel('pay', 'good_uselistModel');
        $this->good_uselistModel->addInfo($uselistData);
        $this->updatemember(array('address_last' => $orderInfo['address'], 'mobile_last' => $orderInfo['mobile'], 'truename_last' => $orderInfo['truename']));

        foreach ($goodInfos as $goodInfo) {
            $updateData = array(
                'in_use' => 1, 
                'rent_num' => $goodInfo['rent_num'] + 1,
            );
            $this->goodModel->editInfo($updateData, array('id' => $goodInfo['id']));
        }

        if ($isOffline) {
            $this->updateOffline($orderInfo, count($goodInfos));
        }
        return $this->_getStatusInfo('OK');
    }

    protected function updateMember($data)
    {
        if (empty($data) || empty($this->loginedUserInfo)) {
            return false;
        }
        $this->memberModel->editInfo($data, array('id' => $this->loginedUserInfo['id']));
        return true;
    }	
}
