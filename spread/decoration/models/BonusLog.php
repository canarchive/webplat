<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class BonusLog extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bonus_log}}';
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
            'id' => 'ID',
            'bonus_id' => '红包ID',
            'name' => '名称',
            'price' => '金额',
            'limit_day' => '每日限量',
            'created_at' => '中奖时间',
            'confirm_at' => '生效时间',
            'used_at' => '使用时间',
            'status' => '状态',
        ];
    }
}
