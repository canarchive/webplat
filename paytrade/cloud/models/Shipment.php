<?php

namespace paytrade\cloud\models;

use common\models\PaytradeModel;

class Shipment extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shipment}}';
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
            'id' => '发货清单ID',
            'snapup_id' => '商品ID',
            'user_id' => '用户ID',
            'note' => '备注',
            'consignee' => '联系人',
            'country' => '国家',
            'province' => '省份',
            'city' => '城市',
            'district' => '地区',
            'address' => '地址',
            'zipcode' => '邮编',
            'tel' => '电话',
            'mobile' => '手机号',
            'email' => '邮箱',
            'shipping_code' => '物流代码',
            'shipping_at' => '发货时间',
            'shipping_fee' => '物流费用',
            'package_fee' => '包装费',
            'created_time' => '创建时间',
            'created_time_ext' => '创建时间',
            'status' => '状态',
        ];
    }
}
