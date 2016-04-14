<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class GiftBagLog extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gift_bag_log}}';
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
            'id' => 'ID',
            'gift_bag_id' => '红包ID',
            'name' => '名称',
            'thumb' => '名称',
            'sort' => '类别',
            'price' => '价格',
            'limit_mobile' => '每人限量',
            'description' => '描述',
            'created_at' => '中奖时间',
            'confirm_at' => '生效时间',
            'used_at' => '使用时间',
            'status' => '状态',
        ];
    }
}
