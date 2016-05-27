<?php

namespace spread\casher\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\casher\models\Orderinfo;

class StatisticOrderinfo extends Orderinfo
{
	public function getInfos($field)
	{
		$where = [];
		$method = "statistic{$field}";
		$datas = $this->$method($where);

		return $datas;
	}

	protected function statisticBusiness($where)
	{
		$groupField = "`business_sort`, `business_name`";
		$selectField = $groupField . ', COUNT(*) AS `count`, SUM(`money`) AS `money`';
		$orderField = '`count` DESC';

		$sql = "SELECT {$selectField} FROM `ws_orderinfo` GROUP BY {$groupField} ORDER BY {$orderField} LIMIT 5000";
        $datas = $this->db->createCommand($sql)->queryAll();
		print_r($datas);exit();

		return $datas;
	}

	public function getStaticFields()
	{
		$fields = [
			'groupon',
			'business_name',
			'owner',
		];
		return $fields;
	}
}
