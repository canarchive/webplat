<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class UserPaytrade extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_paytrade}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '用户ID',
            'money' => '余额',
            'want_money' => '充值金额',
            'want_times' => '充值次数',
            'valid_money_middle' => '实际充值金额含费率',
            'valid_money' => '实际充值金额',
            'valid_times' => '实际充值次数',
            'account_lasttime' => '最后充值时间',
            'pay_times' => '支付次数',
            'pay_money' => '支付金额',
            'pay_lasttime' => '最后支付时间',
            'activity_times' => '参与活动次数',
            'activity_money' => '活动总金额',
            'activity_lasttime' => '最后活动时间',
            'coupon_times' => '使用代金券次数',
            'coupon_money' => '代金券总金额',
            'coupon_lasttime' => '最后使用代金券时间',
            'unusual_money' => '异常金额',
        ];
    }

	public function updateInfo($type, $data)
	{
		$types = ['want', 'valid', 'pay', 'activity', 'coupon'];

		$model = self::findOne(['user_id' => $data['user_id']]);
		if ($type == 'pay' && (empty($model) || $model->money < $data['money'])) {
			return ['status' => 400, 'message' => '余额不足'];
		}

		$model = empty($model) ? new self() : $model;

		$model->user_id = $data['user_id'];
		$moneyField = $type . '_money';
		$model->$moneyField = $model->$moneyField + $data['money'];
		$timesField = $type . '_times';
		$model->$timesField = $model->$timesField + 1;
		$lasttimeField = $type . '_lasttime';
		$model->account_lasttime = \Yii::$app->params['currentTime'];
		if ($type == 'valid') {
			$model->money = $model->money + $data['money'];
		} else if ($type == 'pay') {
			$model->money = $model->money - $data['money'];
		}

		$model->save(false);
		return ['status' => 200, 'message' => 'OK'];
	}
}
