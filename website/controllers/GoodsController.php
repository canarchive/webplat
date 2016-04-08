<?php

namespace website\controllers;

use website\models\Category;
use website\models\Goods;
use website\components\Controller as WebsiteController;

class GoodsController extends WebsiteController
{
    public function actionList()
    {
		$id = \Yii::$app->request->get('id');
		if (empty($id) || $id == 1 || $id == 2) {
		    return $this->redirect(Yii::getAlias('@websiteurl'));
	    }

		$category = new Category();
		$categoryInfos = $category->getInfo($id);

		$catIds = [$id];
		if (!empty($categoryInfos['infosSub'])) {
			$catIds = array_merge($catIds, array_keys($categoryInfos['infosSub']));
		}

		$goods = new Goods();
		$infos = $goods->getInfosByCat($catIds);

        return $this->render('list', ['infos' => $infos]);
    }

    public function actionShow()
    {
		$id = \Yii::$app->request->get('id');
		if (empty($id) || $id == 1 || $id == 2) {
		    return $this->redirect(Yii::getAlias('@websiteurl'));
	    }

		$info = Goods::findOne($id);
		if (empty($info)) {
		    return $this->redirect(Yii::getAlias('@websiteurl'));
		}

		$category = new Category();
		$categoryInfos = $category->getInfo($info['category_id']);

        return $this->render('show', ['info' => $info, 'categoryInfos' => $categoryInfos]);		
    }
}
