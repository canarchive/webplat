<?php

namespace paytrade\shoot\models;

use common\models\PaytradeModel;

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
			'orderid' => $this->_createSingleRandomStr(),
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
		$orderStatus = new \paytrade\models\OrderStatus();
		return $orderStatus->statusInfos;
	}

	public function beforeInsert()
	{
        parent::beforeSave($insert);
		$this->orderid =  $this->_createSingleRandomStr();
		$this->goods_name = isset($this->goodsInfo['name']) ? $this->goodsInfo['name'] : '';
		$this->goods_price = isset($this->goodsInfo['price']) ? $this->goodsInfo['price'] : '';
		$this->status = 'order';

		return true;
	}		
}
