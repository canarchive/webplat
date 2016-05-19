<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class SiteController extends GallerycmsController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionList()
	{
        return $this->render('list');
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
}
