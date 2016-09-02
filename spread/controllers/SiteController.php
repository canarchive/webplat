<?php

namespace spread\controllers;

use Yii;
use spread\components\Controller as SpreadController;

class SiteController extends SpreadController
{
    public function actionIndex()
    {
		session_start();
		print_r($_SESSION);
		exit('spread');
		//$this->redirect();
    }

	public function actionTg()
	{
		$session = \Yii::$app->session;
		//$data['spread_csrf'] = 
		$data['time'] = time();
		$session['session_spread_info'] = $data;
	}

	public function actionStat()
	{
		$channel = Yii::$app->getRequest()->get('channel');
		$method = Yii::$app->getRequest()->method;
		$isMobile = $this->clientIsMobile();
		if ($channel && $method == 'GET') {
			$visit = new \spread\models\Visit();
			$visit->writeVisitLog($isMobile);
		}
		print_R($_GET);
print_r($_SERVER);
		echo 1;//Yii::getAlias('@asseturl') . '/common/images/blank.gif';
		exit();
	}
}
