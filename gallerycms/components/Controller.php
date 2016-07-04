<?php
namespace gallerycms\components;

use yii\helpers\Url;
use common\components\Controller as CommonController;

class Controller extends CommonController
{
	public $isMobile;

    public function init()
    {
        parent::init();

        $this->isMobile = $this->clientIsMobile();
		\Yii::$app->params['homeUrl'] = $this->isMobile ? \Yii::getAlias('@m-gallerycmsurl') : \Yii::getAlias('@gallerycmsurl');
    }

	protected function getCategoryInfos()
	{
		$model = new \gallerycms\models\ArticleCategory();
		$infos = $model->find()->select('id, parent_id, name, orderlist')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();

		$datas = [];
		foreach ($infos as $key => $info) {
			if ($info['parent_id'] == 0) {
				$datas[$info['id']] = $info;
				unset($infos[$key]);
			}
		}

		foreach ($infos as $key => $info) {
			$parentId = $info['parent_id'];
			if (isset($datas[$parentId])) {
				$datas[$parentId]['subInfos'][] = $info;
			}
		}

		return $datas;
	}

	protected function _isMobile()
	{
		$host = \Yii::$app->request->hostInfo;
		return $host == \Yii::getAlias('@m-gallerycmsurl') ? true : false;
	}

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
