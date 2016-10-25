<?php

namespace spread\controllers;

use Yii;
use spread\components\Controller as SpreadController;

class SiteController extends SpreadController
{
    public function actionIndex()
    {
		$url = Yii::getAlias('@gallerycmsurl');
        header("Location:$url");
		exit();
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
		echo json_encode([]);//Yii::getAlias('@asseturl') . '/common/images/blank.gif';
		exit();
	}

	public function actionHdenter()
	{
		$urlSource = Yii::$app->request->get('url_source', '');
		$url = http_build_query($_GET);
		if (isset($_GET['url_source'])) {
			unset($_GET['url_source']);
		}
		$queryStr = http_build_query($_GET);
		$mark = strpos($urlSource, '?') !== false ? '&' : '?';
		$url = $urlSource . $mark . $queryStr;
		
		header("Location:$url");
	}
}
