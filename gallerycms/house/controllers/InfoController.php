<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;

class InfoController extends HouseController
{
	public $layout = 'main-info';

	public function actionAboutus()
	{
		$datas = [];
		Yii::$app->params['seoTitle'] = '关于我们-' . Yii::$app->params['seoTitle'];
		return $this->render('aboutus', $datas);
	}

	public function actionJoinus()
	{
		$datas = [];
		Yii::$app->params['seoTitle'] = '加入我们-' . Yii::$app->params['seoTitle'];
		return $this->render('joinus', $datas);
	}

	public function actionStatement()
	{
		$datas = [];
		Yii::$app->params['seoTitle'] = '声明-' . Yii::$app->params['seoTitle'];
		return $this->render('statement', $datas);
	}
}
