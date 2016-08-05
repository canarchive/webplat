<?php

namespace paytrade\cloud\models;

use common\models\PaytradeModel;

class Bet extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bet}}';
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
            'id' => '抢购ID',
            'orderid' => '订单号',
            'user_id' => '用户ID',
            'sn' => '幸运号码',
            'created_at' => '创建时间',
            'created_at_ext' => '毫秒数',
            'ip' => 'IP地址',
            'status' => '状态，0：未中奖；1：中奖；',
        ];
    }

	public static function createSn($orderid, $snapupId, $userId, $number, $ip, $city)
	{
		for ($i = 1; $i <= $number; $i++) {
            list($usec, $sec) = explode(" ", microtime());
			$usec = floor($usec * 1000);
    		$data = [
    			'orderid' => $orderid,
    			'snapup_id' => $snapupId,
    			'user_id' => $userId,
    			'sn' => self::_getSn($snapupId),
				'created_at' => $sec,
				'created_at_ext' => $usec,
				'ip' => $ip,
				'city' => $city,
    		];
    		$model = new self($data);
    		$model->insert(false);
		}
		return true;
	}

	protected static function _getSn($snapupId)
	{
        $orderBy = ['onduty_vernier' => SORT_ASC];
		$model = self::find()->where(['snapup_id' => $snapupId])->orderBy(['id' => SORT_DESC])->one();
		if (empty($model)) {
			return 10001;
		}

		return $model->sn + 1;
	}
}
