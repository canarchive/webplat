<?php
namespace shoot\components;

use common\components\Controller as CommonController;

class Controller extends CommonController
{
	protected function _getPositionInfos($type = null, $number = 20)
	{
		$position = new \shoot\models\Position();
		$where = !empty($type) ? ['type' => $type] : [];

		$infos = $position->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($number)->all();
		foreach ($infos as & $info) {
			foreach (['picture', 'picture_mobile', 'picture_ext'] as $field) {
				if (!empty($info[$field])) {
					$info[$field] = $info->getAttachmentUrl($info[$field]);
				}
			}
		}

		return $infos;
	}
}
