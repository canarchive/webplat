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
		return $this->render('aboutus', $datas);
	}

	public function actionJoinus()
	{
		$datas = [];
		return $this->render('joinus', $datas);
	}

	public function actionStatement()
	{
		$datas = [];
		return $this->render('statement', $datas);
	}
}
