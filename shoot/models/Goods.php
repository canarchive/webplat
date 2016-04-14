<?php

namespace shoot\models;

use common\models\ShootModel;

class Goods extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
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
            'id' => '商品ID',
            'category_id' => '分类ID',
            'brand_id' => '品牌ID',
            'name' => '产品民称',
            'main_photo' => '商品主图',
            'period' => '期数',
            'orderlist' => '排序',
            'market_price' => '市场价格',
            'price' => '本站价格',
            'inventory' => '商品库存',
            'keyword' => '商品关键词',
            'description' => '商品描述',
            'content' => '商品详情',
            'status' => '状态:0－备货中;1-正常;99-手动下架;',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
}
