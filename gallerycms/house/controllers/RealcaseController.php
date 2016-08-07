<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use merchant\models\Realcase;

class RealcaseController extends HouseController
{
	public function actionIndex()
	{
		$model = new Realcase();
		$infos = $model->getInfos([]);
		$datas = [
			'infos' => $infos,
		];

		$tdkInfos = [
            //'title' => '【装修案例】装修实景案例大全|{{SITENAME}}家装',
            //'keyword' => '装修案例 , 装修实景案例大全 , {{SITENAME}}家装',
            //'description' => '装修案例大全由{{SITENAME}}家装提供，装修实景案例效果图中每一个装修案例都是装修公司的良心作品。装修选择{{SITENAME}}家装，就是选择更多优质装修公司!',
			'title' => '{{CITYNAME}}装修效果图-{{CITYNAME}}装修设计-{{CITYNAME}}装修实例图片大全-{{CITYNAME}}{{SITENAME}}装修设计效果图',
			'keyword' => '装修效果图，装修设计，装修实例，装修图片大全，装修图片',
			'description' => '【{{SITENAME}}】装修设计效果图大全为您提供{{CITYNAME}}多家装修公司与多种风格的装修设计效果图图片，聚集了各种风格的客厅、卧室、电视墙、卫生间等装修效果供大家装修欣赏与参考。',
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;

		return $this->render('index', $datas);
	}

	public function actionShow()
	{
        $id = \Yii::$app->getRequest()->get('id');
        $model = new Realcase();
		$info = $model->getInfo($id);
		if (empty($info)) {
            return $this->redirect('/')->send();
		}

		$tdkInfos = [
            'title' => "{$info['name']}-{$info['merchantInfo']['name']}-{{CITYNAME}}-{{SITENAME}}",
            'keyword' => "{$info['name']}-{$info['merchantInfo']['name']}",
            'description' => "{$info['name']} 由{$info['merchantInfo']['name']}负责设计施工，每一处的装修细节都是经过{$info['merchantInfo']['name']}细心设计和施工的。装修选择{$info['merchantInfo']['name']}，就是选择放心!",
		];
		Yii::$app->params['tdkInfos'] = $tdkInfos;
		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
