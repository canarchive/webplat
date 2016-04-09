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
}
