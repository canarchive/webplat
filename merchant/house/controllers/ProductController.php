<?php
namespace merchant\house\controllers;

use Yii;
use yii\helpers\Url;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use merchant\components\Controller as MerchantController;

class ProductController extends MerchantController
{
    public function actionIndex()
    {
		$code = Yii::$app->request->get('code');
		$codes = ['sms', 'email', 'voice', 'captcha'];

		$code = in_array($code, $codes) ? $code : 'sms';
		$datas = [
		];
		
		//$this->getTdkInfos('feature-' . $code);
		return $this->render($code, $datas);
    }
}
