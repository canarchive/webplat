<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class Showoff extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%showoff}}';
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
            'id' => '晒单ID',
            'user_id' => '用户ID',
            'title' => '晒单标题',
            'thumbs' => '缩略图',
            'content' => '晒单内容',
            'star' => '点赞',
            'comment_number' => '评论',
            'ip' => 'IP',
            'created_at' => '晒单时间',
        ];
    }
}
