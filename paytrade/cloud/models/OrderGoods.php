<?php

namespace paytrade\cloud\models;

use common\models\PaytradeModel;

class OrderGoods extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_goods}}';
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
            'orderid' => '订单号',
            'status' => '状态',
            'created_time' => '创建时间',
        ];
    }
}
