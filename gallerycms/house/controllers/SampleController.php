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

		$infos = $model->getInfos([]);
		$datas = [
			'infos' => $infos,
			'tagInfos' => $tagInfos,
			'houseSortInfos' => $houseSortInfos,
			'model' => $model,
		];

		$tdkInfos = [
            'title' => '【装修案例效果图】装修案例图片_装修设计案例-{{SITENAME}}装修效果图',
            'keyword' => '装修案例效果图,装修案例图片,装修设计案例',
            'description' => '{{SITENAME}}装修案例效果图专区,提供最新装修案例图片,装修设计案例包括简约,现代,中式,欧式,美式,田园等装修效果图',
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;
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

		$tdkInfos = [
            'title' => "{$info['name']} {$info['house_type']}设计装潢案例-{{SITENAME}}装修效果图",
            'keyword' => "{$info['name']} {$info['house_type']}设计装潢案例",
            'description' => "{{SITENAME}}装修效果图专区,为您提供国内外专业全面的{$info['name']} {$info['house_type']}设计装潢案例,涵盖最流行的{$info['name']} {$info['house_type']}设计装潢案例大全、案例,找装修图,上{{SITENAME}}家装。",
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;
		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
