<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class LotteryLog extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lottery_log}}';
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
            'id' => '品牌ID',
            'lottery_id' => '奖品ID',
            'name' => '名称',
            'prize' => '奖品',
            'price' => '价格',
            'created_at' => '中奖时间',
            'confirm_at' => '生效时间',
            'used_at' => '使用时间',
            'status' => '状态',
        ];
    }
}
