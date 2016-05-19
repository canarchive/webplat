<?php
namespace gallerycms\components;

use yii\helpers\Url;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
	public function getArticleCategoryInfos($catId = null)
	{
		static $datas = null;

		if (is_null($datas)) {
		    $category = new \gallerycms\models\ArticleCategory();
			$datas = $category->getDatas();
		}

		if (!is_null($catId)) {
			return isset($datas[$catId]) ? $datas[$catId] : [];
		}

		return $datas;
	}	

	public function getArticleCategoryLevelInfos($parentId = null)
	{
		static $datas = null;

		if (is_null($datas)) {
		    $category = new \gallerycms\models\ArticleCategory();
			$datas = $category->getLevelDatas();
		}

		if (!is_null($parentId)) {
			return isset($datas[$parentId]) ? $datas[$parentId] : [];
		}

		return $datas;
	}		
}
