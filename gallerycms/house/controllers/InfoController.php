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
		$this->getTdkInfos('info-aboutus');
		return $this->render('aboutus', $datas);
	}

	public function actionJoinus()
	{
		$datas = [];
		$this->getTdkInfos('info-joinus');
		return $this->render('joinus', $datas);
	}

	public function actionStatement()
	{
		$datas = [];
		$this->getTdkInfos('info-statement');
		return $this->render('statement', $datas);
	}

	public function actionWechat()
	{
		$this->layout = 'main';
		$this->getTdkInfos('info-wechat');
		//print_r(Yii::$app->params['tdkInfos']);exit();
		return $this->render('wechat');
	}
}
