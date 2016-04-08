<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class ShowoffComment extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%showoff_comment}}';
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
            'id' => '晒单评论ID',
            'user_id' => '用户ID',
            'content' => '内容',
            'star' => '评分',
            'created_at' => '评论时间',
            'status' => '状态',
        ];
    }
}
