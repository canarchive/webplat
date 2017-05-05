<?php

namespace website\models;

use common\models\WebsiteModel;

class GoodsFavour extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_favour}}';
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
            'goods_id' => '商品ID',
            'goods_sku_id' => 'SKU-ID',
            'create_at' => '收藏时间',
            'is_delete' => '是否删除',
        ];
    }
}
