<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class PictureFavorite extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%picture_favorite}}';
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
            'id' => '收藏ID',
            'info_id' => '商品ID',
            'user_id' => '用户ID',
            'created_at' => '时间',
            'ip' => 'IP',
        ];
    }
}
