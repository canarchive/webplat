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
		$groupField = "`business_sort_big`, `business_sort`, `business_name`, `created_day`";
		$selectField = $groupField . ', COUNT(*) AS `count`, SUM(`money`) AS `money`';
		$orderField = '`business_sort_big`, `business_sort`, `business_name`, `created_day` DESC';

		$sql = "SELECT {$selectField} FROM `ws_orderinfo` GROUP BY {$groupField} ORDER BY {$orderField} LIMIT 5000";
        $datas = $this->db->createCommand($sql)->queryAll();
		$countAll = $moneyAll = 0;
		$totalInfos = [];
		foreach ($datas as $key => $data) {
			$business = $data['business_sort_big'] . $data['business_sort'] . $data['business_name'];
			$totalInfos[$business]['count'] = isset($totalInfos[$business]['count']) ? $totalInfos[$business]['count'] + $data['count'] : $data['count'];
			$totalInfos[$business]['money'] = isset($totalInfos[$business]['money']) ? $totalInfos[$business]['money'] + $data['money'] : $data['money'];
			$countAll += $data['count'];
			$moneyAll += $data['money'];
		}

		foreach ($datas as $key => & $data) {
			$business = $data['business_sort_big'] . $data['business_sort'] . $data['business_name'];
			$data['totalCount'] = $totalInfos[$business]['count'];
			$data['totalMoney'] = $totalInfos[$business]['money'];
		}

		$datas[] = [
			'business_sort_big' => '合计',
			'business_sort' => '',
			'business_name' => '',
			'created_day' => '',
			'count' => $countAll,
			'money' => $moneyAll,
			'totalCount' => '',
			'totalMoney' => '',
		];

		return $datas;
	}
}
