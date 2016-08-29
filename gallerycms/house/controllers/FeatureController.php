<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\HouseController;

class FeatureController extends HouseController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang', 'kaopu', 'baojia'];

		$view = in_array($view, $views) ? $view : 'sheji';
		$datas = [
			'ownerInfos' => $this->_getOwnerInfos(),
			'view' => $view,
			'communityInfo' => [],
		];
		
		$this->getTdkInfos('feature-' . $view);
		return $this->render($view, $datas);
	}
}
