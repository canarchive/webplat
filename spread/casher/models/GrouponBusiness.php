<?php

namespace groupbuy\models;

use common\models\GroupbuyModel;

class GrouponBusiness extends GroupbuyModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sop_data_groupon_business';
    }

	protected function _getInfosBySql($id)
	{
		$sql = "SELECT * FROM `sop_data_groupon_business` where `is_hidden` = 0 AND `groupon_id` = {$id} ORDER BY `groupon_business_order` DESC";
		$datas = $this->db->createCommand($sql)->queryAll();
		if (empty($datas)) {
			return [];
		}

		$ids = '';
		foreach ($datas as $val){
			$ids .= $val['business_id'] . ",";
		}
		$ids = substr($ids, 0, -1);

		// 获取商家的详细信息，包括商家logo
		$sql = "SELECT `main`.`business_id`, `main`.`business_name`, `main`.`business_category_id`, "
			. "`info`.`biz_info_logo`,  `logo`.`attachments_path` "
			. "FROM `sop_data_business` as `main` LEFT JOIN `sop_data_biz_info` AS `info` ON `info`.`business_id` = `main`.`business_id`	"
			. "LEFT JOIN `sop_data_attachments` AS `logo` ON `logo`.`attachments_id` = `info`.`biz_info_logo` "
			. "WHERE `main`.`business_id` in ({$ids})";
		$dataFulls = $this->db->createCommand($sql)->queryAll();

		// 对商家进行排序
		$listedBusiness = $indexBusiness = array();
		foreach ((array) $dataFulls as $val) {
			$indexBusiness[$val['business_id']] = $val;
		}

		foreach ($datas as $val){
			$baseInfo = $indexBusiness[$val['business_id']];
			$info = array_merge($val, $baseInfo);
			$listedBusiness[$val['business_id']] = $info;
		}

		return $listedBusiness;
	}

	public function getInfos($id, $categoryAllInfos)
	{
		//全部参会商家
		$allInfos = $this->_getInfosBySql($id);

		$categoryInfos = $countInfos = array();
		foreach ($allInfos as $key => $value) {
			$cId = $value['business_category_id'];
			$countInfos[$cId] = isset($countInfos[$cId]) ? $countInfos[$cId] + 1 : 1;
		}

		arsort($countInfos);
		foreach ($countInfos as $key => $value) {
			$categoryInfos[$key]['count'] = $value;
			$categoryInfos[$key]['name'] = isset($categoryAllInfos[$key]) ? $categoryAllInfos[$key]['business_category_name'] : '';
		}

		$totalCount = count($allInfos);
		$showCount = $totalCount >= 36 ? 36 : floor($totalCount / 6) * 6;
		$showCount = empty($showCount) ? $totalCount : $showCount;
		$data['categoryInfo'] = $categoryInfos;
		$data['totalCount'] = $totalCount;
		$data['showCount'] = $showCount;
		$data['pages'] = ceil($data['totalCount'] / 36);
		$data['infos'] = json_encode(array_values($allInfos));

		return $data;
	}
}
