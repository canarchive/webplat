<?php

namespace spread\models;

use common\models\SpreadModel;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

class Keyword extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%keyword}}';
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

	public function recordKeyword($keyword, $fromType, $isSuccess = false)
	{
		$info = self::findOne(['keyword' => $keyword]);

		$time = time();
		if (empty($info)) {
			$data = [
				'keyword' => $keyword,
				'visit_num' => $isSuccess ? 0 : 1,
				'visit_num_success' => $isSuccess ? 1 : 0,
				'pc_num' => $fromType == 'pc' ? ($isSuccess ? 0 : 1) : 0,
				'pc_num_success' => $fromType == 'pc' ? ($isSuccess ? 1 : 0) : 0,
				'h5_num' => $fromType == 'h5' ? ($isSuccess ? 0 : 1) : 0,
				'h5_num_success' => $fromType == 'h5' ? ($isSuccess ? 1 : 0) : 0,
				'created_at' => $isSuccess ? 0 : $time,
				'created_at_success' => $isSuccess ? $time : 0,
				'updated_at' => $isSuccess ? 0 : $time,
				'updated_at_success' => $isSuccess ? $time : 0,
			];
			$info = new self($data);
			$info->insert();
			return ;
		}

		if ($isSuccess) {
			$info->created_at_success = empty($info->created_at_success) ? $time : $info->created_at_success;
			$info->updated_at_success = $time;
		} else {
			$info->updated_at_success = empty($info->updated_at_success) ? $time : $info->updated_at_success;
			$info->updated_at = $time;
		}
		$info->update();

		$fields = [];
		$fields[] = $isSuccess ? 'visit_num_success' : 'visit_num';
		$fields[] = $fromType == 'pc' ? ($isSuccess ? 'pc_num_success' : 'pc_num') : '';
		$fields[] = $fromType == 'h5' ? ($isSuccess ? 'h5_num_success' : 'h5_num') : '';
		foreach (array_filter($fields) as $field) {
			$numFields[$field] = 1;
		}
		$info->updateCounters($numFields);

		return ;
    }	
}
