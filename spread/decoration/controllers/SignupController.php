<?php

namespace spread\decoration\controllers;

<<<<<<< HEAD
=======
use Yii;
use yii\helpers\ArrayHelper;
use yii\filters\Cors;
>>>>>>> web-house
use spread\components\Controller as spreadController;
use spread\decoration\models\SignupForm;

class SignupController extends spreadController
{
<<<<<<< HEAD
	//public $enableCsrfValidation = false;
=======
	public $enableCsrfValidation = false;

	public function behaviors()
    {
		return [];
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
	    //if (in_array($action->id, ['cms'])) {
			$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
		    header("Access-Control-Allow-Credentials: true");
            header("Access-Control-Allow-Origin: {$origin}");
        	$this->enableCsrfValidation = false;
        //}
        return parent::beforeAction($action);
    }  
>>>>>>> web-house

	public function actionIndex()
	{
		return $this->_signup();
	}

<<<<<<< HEAD
	public function actionLottery()
	{
		return $this->_signup('lottery');
	}

	public function actionBonus()
	{
		return $this->_signup('bonus');
	}

	public function actionGiftBag()
	{
		return $this->_signup('gift_bag');
	}

	protected function _signup($submitType = '')
	{
=======
	public function actionTview()
	{
		return $this->_signup();
	}

	public function actionCms()
	{
		return $this->_signup();
	}

	protected function _signup()
	{
		//print_r($_SERVER);exit();
>>>>>>> web-house
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		//\Yii::$app->response->format = \yii\web\Response::FORMAT_JSONP;
		//$callback = \Yii::$app->request->get('callback');

        $model = new SignupForm();
		$model->isMobile = $this->clientIsMobile();
<<<<<<< HEAD
	    $model->submitType = $submitType;

=======
>>>>>>> web-house
		$signupInfo = false;
        //if ($model->load(\Yii::$app->request->get(), '')) {
        if ($model->load(\Yii::$app->request->post(), '')) {
            $signupInfo = $model->signup();
        }

		if (!$signupInfo) {
			$errors = $model->getFirstErrors('error');
			$message = isset($errors['error']) ? $errors['error'] : '报名失败，请您重试！';
			$data = [
<<<<<<< HEAD
				'status' => '400',
				'msg' => $message,
=======
				'status' => $model->existOwner ? '200' : '400',
				'message' => $message,
				'quoteInfo' => $model->area_input > 0 ? $model->_getQuoteInfo($model->area_input) : [],
>>>>>>> web-house
				//'model' => $model,
			];
			return $data;
		    //return ['data' => $data, 'callback' => $callback];

		}
<<<<<<< HEAD
		$signupInfo['msg'] = $signupInfo['message'];
=======
		$signupInfo['message'] = $signupInfo['message'];
>>>>>>> web-house
		unset($signupInfo['message']);
		return $signupInfo;
		//return ['data' => $signupInfo, 'callback' => $callback];
	}
}
