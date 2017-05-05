<?php

namespace spread\casher\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\casher\models\Orderinfo;

class StatisticOrderinfo extends Orderinfo
{
	public function getInfos($field, $grouponId)
	{
		$where = "WHERE `groupon_id` = $grouponId";
		$method = "statistic{$field}";
		$datas = $this->$method($where);

		return $datas;
	}

	protected function statisticBusiness($where)
	{
		$groupField = "`business_sort_big`, `business_sort`, `business_name`, `created_day`";
		$selectField = $groupField . ', COUNT(*) AS `count`, SUM(`money`) AS `money`';
		$orderField = '`business_sort_big`, `business_sort`, `business_name`, `created_day` DESC';

		$sql = "SELECT `groupon_id`, {$selectField} FROM `ws_orderinfo` {$where} GROUP BY {$groupField} ORDER BY {$orderField} LIMIT 5000";
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

		/*$datas[] = [
			'business_sort_big' => '合计',
			'business_sort' => '',
			'business_name' => '',
			'created_day' => '',
			'count' => $countAll,
			'money' => $moneyAll,
			'totalCount' => '',
			'totalMoney' => '',
		];*/

		return $datas;
	}

    public function export($datas)
	{
		$this->exportDatas($datas, "订单汇总");
	}

	public function _formatExportDatas($objPHPExcel, $datas)
	{
		$data = [
			'business_sort_big' => '项目',
			'business_sort' => '品类',
			'business_name' => '名称',
			'created_day' => '下单日期',
			'count' => '签单数 (总签单数)',
			'money' => '签单数 (总签单数)',
			'totalCount' => '',
			'totalMoney' => '',
		];
		//print_r($datas);exit();
		array_unshift($datas, $data);
		foreach ($datas as $key => $data) {
			$i = $key + 1;
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $key)
                    ->setCellValue('B' . $i, $data['business_sort_big'])
                    ->setCellValue('C' . $i, $data['business_sort'])
                    ->setCellValue('D' . $i, $data['business_name'])
                    ->setCellValue('E' . $i, $data['created_day'])
                    ->setCellValue('F' . $i, $data['count'] . ' (' . $data['totalCount'] . ')')
                    ->setCellValue('G' . $i, $data['money'] . ' (' . $data['totalMoney'] . ')');
		}
        
		return $objPHPExcel;
	}

}
