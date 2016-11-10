<?php

namespace spread\models\statistic;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

class AbstractStatistic extends SpreadModel
{
    public static function getDb()
    {
        return \Yii::$app->dbStatistic;
    }	

	public function recordData($data, $type)
	{
		$validTypes = ['visit', 'signup'];
		if (!in_array($type, $this->validTypes)) {
			return false;
		}

		$newData = [];
		foreach ($this->fieldInfos as $field) {
			$newData[$field] = isset($data[$field]) ? $data[$field] : '';
		}
		$mark = $this->getMark($newData);
		$info = self::findOne(['mark' => $mark]);
		$newData['mark'] = $mark;

		return $this->recordDetail($newData, $info, $type);
	}

	protected function getMark($data)
	{
		return md5(implode($data, ''));
	}
}
