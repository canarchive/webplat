<?php

namespace spread\decoration\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\filters\Cors;
use spread\components\Controller as spreadController;
use spread\decoration\models\SignupForm;

class SignupController extends spreadController
{
	//public $enableCsrfValidation = false;

	public function behaviors()
    {
        //header("Access-Control-Allow-Origin:*");
        return ArrayHelper::merge([
            [
                'class' => Cors::className(),
                'cors' => [
                    'Origin' => [\Yii::getAlias('@gallerycmsurl')],
                    'Access-Control-Request-Method' => ['GET', 'HEAD', 'POST', 'OPTIONS'],
                ],
            ],
        ], parent::behaviors());
    }	

    public function beforeAction($action)
    {
		//var_dump($action);exit();
	    if (in_array($action->id, ['cms'])) {
        	$this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }  

	public function actionIndex()
	{
		return $this->_signup();
	}

	public function actionTview()
	{
		return $this->_signup();
	}

	public function actionCms()
	{
		$_POST['info_id'] = 1;
		return $this->_signup();
	}

	protected function _signup()
	{
		//print_r($_SERVER);exit();
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		//\Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
		//$callback = \Yii::$app->request->get('callback');

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();
		$signupInfo = false;
        //if ($model->load(\Yii::$app->request->get(), '')) {
        if ($model->load(\Yii::$app->request->post(), '')) {
            $signupInfo = $model->signup();
        }

		if (!$signupInfo) {
			$errors = $model->getFirstErrors('error');
			$message = isset($errors['error']) ? $errors['error'] : '报名失败，请您重试！';
			$data = [
				'status' => '400',
				'message' => $message,
				//'model' => $model,
			];
			return $data;
		    //return ['data' => $data, 'callback' => $callback];

		}
		$signupInfo['message'] = $signupInfo['message'];
		unset($signupInfo['message']);
		return $signupInfo;
		//return ['data' => $signupInfo, 'callback' => $callback];
	}
}
