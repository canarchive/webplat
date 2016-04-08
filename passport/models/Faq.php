<?php

namespace passport\models;

use common\models\PassportModel;

class Faq extends PassportModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq}}';
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
            'id' => 'id',
            'user_id' => 'user_id',
            'username' => 'username',
            'goods_id' => 'goods_id',
            'sort' => '类别',
            'question' => 'question',
            'answer' => 'answer',
            'status' => '状态：0未回答；1已回答；',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];
    }
}
