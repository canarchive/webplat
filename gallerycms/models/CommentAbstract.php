<?php

namespace gallerycms\models;

use common\models\GallerycmsModel;

class CommentAbstract extends GallerycmsModel
{
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
            'id' => '评论ID',
            'content' => '内容',
            'info_id' => '信息ID',
            'user_id' => '用户ID',
            'created_at' => '时间',
            'ip' => 'IP',
            'status' => '0 未通过,1已通过',
        ];
    }
}
