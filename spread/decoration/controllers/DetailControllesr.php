<?php

namespace spread\decoration\controllers;

use spread\components\Controller;
use spread\decoration\models\SignupForm;

class DetailController extends Controller
{
    public function actionIndex()
    {
        $model = new SignupForm();
        $isMobile = $this->clientIsMobile();
		$type = \Yii::$app->getRequest()->get('type');
		$type = !in_array($type, ['677', '377']) ? '677' : $type;

        $code = 'default';
        $urlFull = \Yii::$app->request->hostInfo . \Yii::$app->request->getUrl();
        $datas = [
            'cateId' => \Yii::$app->getRequest()->get('cate_id', 0),
            'model' => $model,
        ];

		$viewPath = $isMobile ? "/{$code}_{$type}/h5/" : "/{$code}_{$type}/pc/";
        return $this->render($viewPath . 'index.php', $datas);        
    }
}
