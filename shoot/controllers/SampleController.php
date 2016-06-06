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
		$where = $currentId ? ['in_use' => 1, 'goods_id' => $currentId] : ['in_use' => 1];
		$offset = ($page - 1) * 20;

		$sample = new \shoot\models\Sample();
		$count = $sample->find()->where($where)->count();
		$infos = $sample->find()->select('id, filename, goods_id, ')->where($where)->orderBy(['orderlist' => SORT_DESC])->limit(20)->offset($offset)->all();
		$goodsInfos = $sample->goodsInfos;

		$datas = $goodsIds = [];
		foreach ($infos as $id => & $info) {
			$info['filepath'] = $info->getAttachmentUrl($info['id']);
		}
		foreach ($goodsInfos as $goodsId => & $info) {
			if (!in_array($goodsId, $goodsIds)) {
				unset($goodsInfos[$goodsId]);
			}
		}
		$datas = [
			'page' => $page,
			'pages' => ceil($count / 20),
			'currentId' => $currentId,
			'infos' => $infos,
			'goodsInfos' => $goodsInfos, 
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
