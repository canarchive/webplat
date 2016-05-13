<?php

namespace shoot\info\controllers;

use shoot\components\Controller as ShootController;

class HelpController extends ShootController
{
	public function actionIndex()
	{
		$code = \Yii::$app->request->get('code');
		$info = \shoot\info\models\Info::findOne(['code' => $code]);
		if (empty($info)) {
			$this->redirect(\Yii::getAlias('@shooturl'));
		}

		$template = empty($info['template']) ? 'default' : $info['template'];
		return $this->render($template, ['info' => $info]);
	}
}
