<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;

class FeatureController extends GallerycmsController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang'];

		$view = in_array($view, $views) ? $view : 'yanfang';
		$datas = [
			'view' => $view,
			'communityInfo' => [],
		];
		return $this->render($view, $datas);
	}
}
