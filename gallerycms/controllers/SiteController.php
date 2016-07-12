<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
	public $mHost;

	public function init()
	{
		$host = \Yii::$app->request->hostInfo;
		$this->mHost = $host == \Yii::getAlias('@m-gallerycmsurl') ? true : false;
	}

    public function actionIndex()
    {
		$categoryInfos = $this->getCategoryInfos();
		$view = $this->mHost ? '//h5/index' : '//pc/index';
        return $this->render($view, ['categoryInfos' => $categoryInfos]);
    }

	public function actionList()
	{
		$id = intval(\Yii::$app->request->get('id'));
		if (empty($id)) {
			return $this->actionIndex();
		}
		//$categoryInfos = $this->getCategoryInfos();
		//$view = $this->_isMobile() ? '//h5/list' : '//pc/list';
		$view = $this->mHost ? '//h5/list' : '//pc/list';

		$recommend = new \gallerycms\models\Recommend();
		$recommendInfos = $recommend->getInfos($id);
		$datas = [
			'currentId' => $id,
			'recommendInfos' => $recommendInfos,
			'categoryInfo' => $categoryInfo,
		];

        return $this->render($view);
	}

	public function actionShow()
	{
		$id = \Yii::$app->request->get('id');
		if (empty($id)) {
			exit('参数错误');
		}
		$model = new \gallerycms\models\Article();
		$info = $model->findOne($id);
		if (empty($info)) {
			exit('信息不存在');
		}
		$categoryInfo = $info->categoryInfos[$info->category_id];
        return $this->render('show', ['info' => $info, 'categoryInfo' => $categoryInfo]);
	}

	public function actionSpider()
	{
		$categoryInfos = $this->getCategoryInfos();
		//print_r($categoryInfos);
		$path = \Yii::getAlias('@app') . '/docs/spider/';
		foreach ($categoryInfos as $info) {
			foreach ($info['subInfos'] as $data) {
				$catdir = $data['catdir'];
				$file = $path . $catdir;
				if (file_exists($file)) {
					continue;
				}
				$url = 'http://m1.bjyestar.com/zt/' . $catdir;
				echo "<a href='{$url}' target='_blank'>{$file}</a><br />";
				$content = file_get_contents($url);
				file_put_contents($file, $content);
			}
		}
	}
}
