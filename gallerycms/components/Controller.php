<?php
namespace gallerycms\components;

use common\components\Controller as CommonController;

class Controller extends CommonController
{
	public function getArticleCategoryInfos()
	{
		static $datas = null;

		if (is_null($infos)) {
		    $category = new \gallerycms\models\ArticleCategory();
		    $infos = $category->find()->where(['status' => 1])->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		}

		$datas = [
			'infos' => $infos,
			'levelInfos' => [],
		];
		foreach ($infos as $catId => $info) {
			if (!isset($datas['levelInfos'][$info['parent_id']]) {
				$datas['levelInfos'][$ifno['parent_id']] = [];
			}
			$datas['levelInfos'][$ifno['parent_id']][$catId] = $info;
		}

		return $datas;
	}	
}
