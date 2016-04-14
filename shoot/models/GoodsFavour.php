<?php

namespace shoot\models;

use common\models\ShootModel;

class GoodsFavour extends ShootModel
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
            'created_at' => '收藏时间',
            'updated_at' => '更新时间',
            'is_delete' => '是否删除',
        ];
    }
}
