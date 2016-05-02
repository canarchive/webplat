<?php

namespace spread\shoot\controllers;

use spread\components\Controller;
use spread\shoot\models\SignupForm;

class DetailController extends Controller
{
    public function actionIndex()
    {
        $model = new SignupForm();
        $isMobile = $this->clientIsMobile();

        $code = \Yii::$app->getRequest()->get('code');
        $codes = ['default', 'tuig'];
        $code = !in_array($code, $codes) ? 'default' : $code;
        $info = $this->getInfo();
        if (empty($info)) {
			exit('info empty');
            //$this->redirect('http://www.17house.com/');
        }

        $urlFull = \Yii::$app->request->hostInfo . \Yii::$app->request->getUrl();
        $datas = [
            'model' => $model,
            'info' => $info,
        ];

		$viewPath = $isMobile ? "/{$code}/h5/" : "/{$code}/pc/";
        return $this->render($viewPath . 'index.php', $datas);        
    }

    protected function getInfo()
    {
        $id = \Yii::$app->getRequest()->get('id');
        $info = \spread\shoot\models\Activity::findOne(['id' => $id]);
		
        return $info;
    }
}
