<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class PictureTag extends GallerycmsModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%picture_tag}}';
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
            'id' => '文章标签ID',
            'picture_id' => '文章ID',
            'tag_id' => '标签ID',
        ];
    }
}
