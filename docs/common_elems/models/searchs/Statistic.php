<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\models\SemLogSuccess;

class Statistic extends SemLogSuccess
{
	public function getInfos($field, $type)
	{
		$datas = $this->statisticSql($field, $type);

		return $datas;
	}

	protected function statisticSql($field, $type)
	{
		$typeField = $this->types[$type];

		$groupField = empty($typeField) ? "`{$field}`" : '`' . implode('`,`', $typeField) . "`, `{$field}`";
		$selectField = $groupField . ', COUNT(*) AS `count`';
		$orderField = empty($typeField) ? '`count` DESC' : '`' . implode('` DESC, `', $typeField) . '` DESC, `count` DESC';
		$tables = ['record' => 'wg_sem_log', 'success' => 'wg_sem_log_success'];
		foreach ($tables as $key => $table) {
			if ($key == 'record' && in_array($field, ['position'])) {
				$data = [];
			} else {
			    $sql = "SELECT {$selectField} FROM `{$table}` GROUP BY {$groupField} ORDER BY {$orderField} LIMIT 5000";
                $data = $this->db->createCommand($sql)->queryAll();
			}
			$datas[$key] = $data;
		}

		return $datas;
	}

	public function getStaticFields()
	{
		$fields = [
			'keyword',
			'sem',
			'position',
			'from_type',
		];
		return $fields;
	}

	public function getTypes()
	{
		$types = [
			'total' => [],
			'day' => ['created_day'], 
			'groupon' => ['groupon_id'],
			'day_groupon' => ['created_day', 'groupon_id'],
		];

		return $types;
	}
}
