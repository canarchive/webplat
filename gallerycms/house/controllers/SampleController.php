<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use gallerycms\components\HouseController;
use gallerycms\house\models\HouseSample;

class SampleController extends HouseController
{
	public function actionIndex()
	{
		return $this->_list();
	}

	protected function _list()
	{
		$tag = Yii::$app->request->get('tag', '');
		$model = new HouseSample();
		$houseSortInfos = $model->houseSortInfos;
		$tagInfos = $model->formatTag($tag, $houseSortInfos);
		if ($tagInfos === false) {
            throw new NotFoundHttpException('页面不存在');
		}

		$page = Yii::$app->request->get('page');
		$infos = $model->getInfos([]);
		$datas = [
			'infos' => $infos,
			'tagInfos' => $tagInfos,
			'houseSortInfos' => $houseSortInfos,
			'model' => $model,
		];
		$tagStr = '';
		foreach ($tagInfos as $tagKey => $tagValue) {
			if (empty($tagValue)) {
				continue;
			}
			$tagStr .= $houseSortInfos[$tagKey]['values'][$tagValue];
		}
		//$tagStr = rtrim($tagStr, '-');
		$pageStr = $page > 1 ? "_第{$page}页-" : '-';

		$dataTdk = ['{{TAGSTR}}' => $tagStr, '{{PAGESTR}}' => $pageStr];
		$this->getTdkInfos('sample-index', $dataTdk);
		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new HouseSample();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}
		$houseSortInfos = $model->houseSortInfos;
		$tagStr = '';
		foreach ($houseSortInfos as $tagKey => $tagValue) {
			if (empty($info[$tagKey])) {
				continue;
			}
			$str = $tagValue['values'][$info[$tagKey]];
			$tagStr .= $str;
			$info[$tagKey] = $str;
		}

		$dataTdk = ['{{INFONAME}}' => $info['name'], '{{TAGSTR}}' => $tagStr];
		$this->getTdkInfos('sample-show', $dataTdk);
		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
