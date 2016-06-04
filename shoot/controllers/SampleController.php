<?php

namespace shoot\controllers;

use shoot\components\Controller as ShootController;

class SampleController extends ShootController
{
    public function actionIndex()
    {
		$currentId = intval(\Yii::$app->request->get('id'));
		$page = intval(\Yii::$app->request->get('page'));
		$page = empty($page) ? 1 : $page;
		$where = $currentId ? ['in_use' => 1, 'category_id' => $currentId] : ['in_use' => 1];
		$offset = ($page - 1) * 30;

		$sample = new \shoot\models\Sample();
		$count = $sample->find()->where($where)->count();
		$infos = $sample->find()->select('id, filename, category_id, ')->where($where)->orderBy(['orderlist' => SORT_DESC])->limit(30)->offset($offset)->all();
		$categoryInfos = $sample->categoryInfos;

		$datas = $catIds = [];
		foreach ($infos as $id => & $info) {
			$info['filepath'] = $info->getAttachmentUrl($info['id']);
			$catIds[] = $info['category_id'];
		}
		foreach ($categoryInfos as $catId => & $info) {
			if (!in_array($catId, $catIds)) {
				unset($categoryInfos[$catId]);
			}
		}
		$datas = [
			'page' => $page,
			'pages' => ceil($count / 2),
			'currentId' => $currentId,
			'infos' => $infos,
			'categoryInfos' => $categoryInfos, 
		];

        return $this->render('index', $datas);
    }

    public function actionShow()
    {
		$id = intval(\Yii::$app->request->get('id'));
		if (empty($id)) {
		    return \Yii::$app->response->redirect('/')->send();
		}

		$sample = new \shoot\models\Sample();
		$info = $sample->getInfo($id);
		if (empty($info)) {
		    return \Yii::$app->response->redirect('/')->send();
		}

        return $this->render('show', ['info' => $info]);
    }
}
