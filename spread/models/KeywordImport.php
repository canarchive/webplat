<?php

namespace spread\models;

use common\models\SpreadModel;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

class KeywordImport extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%keyword_import}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '关键字ID',
			'keyword' => '关键字',
			'tag_1' => '标签1',
			'tag_2' => '标签2',
			'tag_3' => '标签3',
			'tag_4' => '标签4',
			'tag_5' => '标签5',
			'created_at' => '访问时间',
			'updated_at' => '最后访问时间',
			'status' => '状态',
        ];
    }
}
