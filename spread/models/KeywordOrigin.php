<?php

namespace spread\models;

use common\models\SpreadModel;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

class KeywordOrigin extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%keyword_origin}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '关键字ID',
			'keyword' => '关键字',
			'visit_num' => '访问次数',
			'visit_num_success' => '转化次数',
			'pc_num' => 'PC访问次数',
			'pc_num_success' => 'PC转化次数',
			'h5_num' => 'H5访问次数',
			'h5_num_success' => 'H5转化次数',
			'created_at' => '访问时间',
			'updated_at' => '最后访问时间',
			'created_at_success' => '转化时间',
			'updated_at_success' => '最后转化时间',
        ];
    }
}
