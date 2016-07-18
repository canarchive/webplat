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

		$datas = [
			'info' => $info,
		];
		return $this->render('show', $datas);
	}
}
