<?php

namespace website\models;

use common\models\WebsiteModel;

class GoodsSnapup extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_snapup}}';
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
            'id' => '抢购商品ID',
            'goods_id' => '商品ID',
            'goods_sku' => '商品SKU编码',
            'period' => '期数',
            'max_times' => '最多参与次数',
            'bet_number_total' => '总需参与次数',
            'bet_number_person' => '已参与人数',
            'bet_number' => '已参与次数',
            'position' => '推荐位',
            'started_at' => '创建时间',
            'bingo_bet_id' => '参与计算中奖的bet-id',
            'bet_id' => '中奖的bet-id',
            'orderid' => '订单号',
            'bingo_sn' => '幸运号码',
            'bingo_at' => '创建时间',
            'bingo_at_ext' => '创建时间',
            'status' => '状态',
        ];
    }

	public function addFromGoods($goods)
	{
		$modelNew = new self();
		$modelNew->goods_id = $goods['id'];
		$modelNew->period = $goods['period'] + 1;
		$modelNew->max_times = 10;
		$modelNew->started_at = \Yii::$app->params['currentTime'];
		$modelNew->status = 1;
		$modelNew->save();

		$goods->updateCounters(['period' => 1]);

		return true;
	}

	public function checkNumber($info, $number)
	{
		$numberTotal = $info->bet_number_total;
		$numberRemain = $info->bet_number_total - $info->bet_number;
		if ($info->bet_number_total == $info->bet_number) {
			return ['status' => 400, 'message' => '本期云购已结束'];
		}
		if ($number > $numberRemain) {
	   	    return ['status' => 401, 'message' => "本期只剩{$numberRemain}次了"];
		}

		if (!empty($info->min_times) && $number < $info->min_times && $numberRemain >= $info->min_times) {
	   	    return ['status' => 402, 'message' => '不能少于' . $info->min_times];
		}

		if (!empty($info->max_times) && $number > $info->max_times) {
	   	    return ['status' => 403, 'message' => '不能多于' . $info->max_times];
		}

		return ['status' => 200, 'message' => 'OK'];
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '进行中',
			'1' => '完成',
			'99' => '中止',
		];
		return $datas;
	}
}
