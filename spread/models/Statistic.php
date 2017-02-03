<?php

namespace spread\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\SpreadModel;
use backend\models\Manager;

class Statistic extends spreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%day}}';
    }

    public function attributeLabels()
    {
        return [
			'id' => '客服ID',
			'name' => '名字',
			'code' => '代码',
			'mobile' => '手机号',
			'created_at' => '创建时间',
			'updated_at' => '更新时间',
			'status' => '状态',

        ];
    }

	public function initChannelBase()
	{
		
	}
}
