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
			$tagStr .= $houseSortInfos[$tagKey]['values'][$tagValue] . '-';
		}
		//$tagStr = rtrim($tagStr, '-');
		$pageStr = $page > 1 ? "第{$page}页-" : '';

		$tdkInfos = [
            //'title' => '【装修案例效果图】装修案例图片_装修设计案例-{{SITENAME}}装修效果图',
            //'keyword' => '装修案例效果图,装修案例图片,装修设计案例',
            //'description' => '{{SITENAME}}装修案例效果图专区,提供最新装修案例图片,装修设计案例包括简约,现代,中式,欧式,美式,田园等装修效果图',
			'title' => "{$tagStr}装修案例-实景图片欣赏-{$pageStr}{{SITENAME}}",
			'keyword' => '装修案例，装修风格，装修实景图，装修图片欣赏',
			'description' => '【{{SITENAME}}】装修图片频道为您提供当下最流行最实用专业的装修案例图片与多种风格的装修实景图图片，包括客厅、卧室、厨房、书房、阳台、电视墙、卫生间等系列室内装修设计图片。',
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
