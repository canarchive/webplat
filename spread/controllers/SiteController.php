<?php

namespace spread\controllers;

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
		return '';
	}
}
