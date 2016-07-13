<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;
use gallerycms\house\models\HouseSample;

class SampleController extends HouseController
{
	public function actionIndex()
	{
		$datas = [];
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

		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
