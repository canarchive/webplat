<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class Account extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%account}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderid' => '订单号',
            'orderid_plat' => '平台订单号',
            'payment_code' => '支付方式代码',
            'account_type' => '充值类型',
            'user_id' => '充值用户ID',
            'mobile' => '手机号',
            'money' => '充值金额',
            'money_valid_middle' => '实际充值金额',
            'money_valid' => '有效充值金额',
            'day' => '充值日期',
            'accounted_at' => '充值时间',
            'accounted_valid_at' => '成功充值时间',
            'account_data' => '平台传递的数据',
            'goods_id' => '商品ID',
            'goods_sku_id' => 'SKU-ID',
            'period' => '期数',
            'status' => '充值状态，0：未支付，1：成功支付；',
            'handpay_manager' => '手工支付管理员账号',
        ];
    }

	public function getAccountTypes()
	{
	
		return [
			'topay', // 直接消费
			'tocoin', // 充值到账号
		];
	}

	/**
	 * 更新用充值记录
	 *
	 * @return void
	 */
	protected function _updateUserMoney($isValid = false)
	{
		$model = new \paytrade\models\UserPaytrade();
		return $model->updateInfo('want', ['user_id' => $this->user_id, 'money' => $this->money]);
	}

    protected function recordPay($payInfo)
    {
		$orderinfoModel = new Orderinof();
		$orderinfoModel->save();
    }	
}
