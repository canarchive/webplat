<?php

namespace paytrade\shoot\models;

use common\models\PaytradeModel;
use paytrade\models\UserPaytrade;

class OrderInfo extends PaytradeModel
{
	public $mobile_user;
	public $userInfo;
	public $goodsInfo;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_info}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'pay_money'], 'required'],
            [['goods_id'], 'checkGoods'],
			[['service_start'], 'filter', 'filter' => function($value) {
				return strtotime($value);
			}],
			[['pay_at', 'activity_id', 'activity_fee', 'goods_price', 'coupon_fee', 'service_start', 'service_hour_num'], 'default', 'value' => 0],
			[['note', 'status', 'address', 'mobile', 'consignee', 'goods_name'], 'safe'],
        ];
    }

	public function checkGoods()
	{
        $value = $this->goods_id;
        $this->goodsInfo = \shoot\models\Goods::findOne(['id' => $value]);
        if (empty($this->goodsInfo)) {
            $this->addError('parent_code', '父菜单不存在');
        }
		
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderid' => '订单号',
            'user_id' => '用户ID',
            'pay_money' => '支付金额',
            'pay_type' => '支付类型',
            'goods_id' => '产品ID',
            'goods_name' => '产品名称',
            'goods_price' => '产品价格',
			'activity_id' => '活动ID',
			'activity_fee' => '活动优惠',
			'coupon_fee' => '优惠券',
			'service_start' => '拍摄时间',
			'service_hour_num' => '拍摄时长',
			'consignee' => '联系人',
			'mobile' => '联系电话',
			'address' => '地址',
			'note' => '备注',
            'created_at' => '创建时间',
            'pay_at' => '支付时间',
            'status' => '状态',
        ];
    }

	public function createOrder($infos, $baseInfos)
	{
		$cartInfos = $infos['cartInfos'];
		$data = [
			'orderid' => $this->createSingleRandomStr(),
			'user_id' => $baseInfos['userId'],
			'status' => 0,
			'sold_number' => $cartInfos['numberAll'],
			'pay_money' => $baseInfos['priceAll'],
		];

		$model = new self($data);
		$model->insert(false);
		$baseInfos['orderid'] = $model->orderid;

		$dataStatus = [
			'orderid' => $model->orderid, 
			'status' => 'order', 
			'description' => '您提交了订单，请等待系统确认',
			'created_at' => \Yii::$app->params['currentTime'],
		];
		$modelStatus = new OrderStatus($dataStatus);
		$modelStatus->insert(false);

		$this->_addAddressInfo($infos['addressInfo'], $baseInfos);
		$this->_addGoods($cartInfos, $baseInfos);

		return ['status' => 200, 'message' => 'OK'];
	}

	public function initUserInfo($mobile)
	{
		$this->mobile_user = $mobile;
		$this->userInfo = \passport\models\User::findByMobile($mobile);
	}

	public function getStatusInfos()
	{
		$orderStatus = new OrderStatus();
		return $orderStatus->statusInfos;
	}

	public function beforeSave($insert)
	{
        parent::beforeSave($insert);
		if (empty($insert)) {
			return true;
		}

		$this->orderid =  $this->createSingleRandomStr();
		$this->goods_name = isset($this->goodsInfo['name']) ? $this->goodsInfo['name'] : '';
		$this->goods_price = isset($this->goodsInfo['price']) ? $this->goodsInfo['price'] : '';
		$this->status = 'order';

		return true;
	}		

	public function getInfosByUserId($userId)
	{
		$userId = 1;
        $infos = $this->find()->where(['user_id' => $userId])->asArray()->all();
		foreach ($infos as & $info) {
			$info['goodsMainPhoto'] = '';
			$goodsInfo = \shoot\models\Goods::findOne($info['goods_id']);
			if (!empty($goodsInfo['main_photo'])) {
			    $info['goodsMainPhoto'] = $goodsInfo->getAttachmentUrl($goodsInfo['main_photo']);
			}
			$info['statusStr'] = $this->statusInfos[$info['status']];
		}
		return $infos;
	}

	public function getInfo($orderid, $userId = null)
	{
		if (empty($orderid)) {
			return ['status' => 400, 'message' => '订单号不能为空'];
		}
		$info = $this->findOne(['orderid' => $orderid]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '订单信息不存在'];
		}
		if (!is_null($userId) && $userId != $info['user_id']) {
			return ['status' => 400, 'message' => '订单信息有误'];
		}

		return ['status' => 200, 'message' => 'OK', 'data' => $info];
	}

	public function formatInfo()
	{
		$info = $this->toArray();
		$info['statusStr'] = $this->statusInfos[$info['status']];
		$info['status_pay'] = 'wei';
		$info['status_service'] = 'wei';
		$goodsInfo = \shoot\models\Goods::findOne($info['goods_id']);
		if (!empty($goodsInfo)) {
		    $goodsInfo['main_photo'] = $goodsInfo->getAttachmentUrl($goodsInfo['main_photo']);
		}

		return ['info' => $info, 'goodsInfo' => $goodsInfo];
	}

	public function cancelInfo($data)
	{
		$status = $this['status'];

		if ($status == 'cancel') {
			//return ['status' => 200, 'message' => '订单已取消'];
		}
		if ($status != 'order') {
			//return ['status' => 400, 'message' => '不能取消该订单'];
		}
		$this->status = 'cancel';
		$this->update(false);

		$data = [
			'orderid' => $this->orderid,
			'status' => 'cancel',
			'status_pay' => $this->status_pay,
			'status_refund' => $this->status_refund,
			'operator_id' => $data['user_id'],
			'operator_name' => $data['user_name'],
			'created_at' => \Yii::$app->params['currentTime'],
		];
		OrderStatus::statusChange($data);
		return ['status' => 200, 'message' => 'OK'];
	}

	public function pay($data)
	{
		$info = $this->findOne(['orderid' => $data['orderid_info']]);
		if (empty($info)) {
			return ['status' => 400, 'message' => '订单信息不存在'];
		}

		if ($info['status_pay'] == 'finish' || $info['status'] == 'cancel') {
			return ['status' => 400, 'message' => '订单已完成支付或已取消'];
		}
		if ($info['pay_money'] != $data['money_valid']) {
			return ['status' => 400, 'message' => '订单支付金额有误'];
		}

		$modelUserPaytrade = new UserPaytrade();
		$payResult = $modelUserPaytrade->updateInfo('pay', ['user_id' => $data['user_id'], 'money' => $data['money_valid']]);

		$info['status_pay'] = 'finish';
		$info->update(false);

		$data = [
			'orderid' => $info['orderid'],
			'status' => $info['status'],
			'status_pay' => 'finish',
			'status_refund' => $info['status_refund'],
			'operator_id' => $info['user_id'],
			'operator_name' => '',
			'created_at' => \Yii::$app->params['currentTime'],
		];
		OrderStatus::statusChange($data);

		return $payResult;
    }
}
