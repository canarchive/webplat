<?php

namespace gallerycms\house\controllers;

use Yii;
use yii\helpers\Url;
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
		$this->mobileMappingUrl = Url::to(['/house/mobile-feature/index', 'view' => $view, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
		$this->pcMappingUrl = Url::to(['/house/feature/index', 'view' => $view, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
		return $this->render($view, $datas);
	}
}
