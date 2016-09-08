<?php
namespace merchant\controllers;

use Yii;
use yii\helpers\Url;
use merchant\models\SigninForm;
use merchant\models\PasswordResetRequestForm;
use merchant\models\ResetPasswordForm;
use merchant\models\SignupForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use merchant\components\Controller as MerchantController;

class SiteController extends MerchantController
{
	public $homeUrl; 
	
    public function init()
    {
        parent::init();
	    //$this->layoutPath = Yii::getAlias('@app/info/views');
		$this->homeUrl = Url::to(['/info/index']);
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
		$actions = parent::actions();
        $currentActions = [
            'captcha' => [
                'class' => 'common\components\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
		return array_merge($actions, $currentActions);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignin()
    {
		$this->layout = 'main-base';
        if (!Yii::$app->user->isGuest) {
		    return Yii::$app->response->redirect($this->homeUrl)->send();
        }
        $model = new SigninForm();
		$message = '';
		//$wrongTimes = $model->wrongTimes('check');
        if ($model->load(Yii::$app->request->post(), '')) {
			if ($model->signin()) {
                return $this->goBack();
			}
		    $error = $model->getFirstErrors();
		    $field = key($error);
		    $message = isset($error[$field]) ? $error[$field] : $message;
        }
        return $this->render('signin', [
            'model' => $model,
			'message' => $message,
	        //'showCaptcha' => $wrongTimes > 5 ? 1 : 0,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

		return $this->goHome();
    }

    public function actionSignup()
    {
		$this->layout = 'main-base';
        $model = new SignupForm();

		$infos = [];
		$message = '';
        if ($model->load(Yii::$app->request->post(), '')) {
		    $model->truename = $_POST['username'];
			$message = '请填写完整的注册信息';
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
		            return Yii::$app->response->redirect($this->homeUrl)->send();
                }
            }
		    $error = $model->getFirstErrors();
		    $field = key($error);
		    $message = isset($error[$field]) ? $error[$field] : $message;
			$infos = $model->toArray();
        }
//print_r($model->getErrors());
//print_r($infos);exit();

        return $this->render('signup', [
            'model' => $model,
			'infos' => $infos,
			'message' => $message,
        ]);
    }

    public function actionFindpwd()
    {
		$step = intval(Yii::$app->request->get('step', 1));
		$step = $step > 4 ? 1 : $step;
        $model = new PasswordResetRequestForm();

		$data = [];
		$message = '';
		switch ($step) {
		case 2:
			$data = $model->sendInfos('get');
			//print_r($data);
			//$data = ['type' => 'email', 'username' => 'iamwangcan@163.com'];
			//$data = ['type' => 'mobile', 'username' => '13811974106'];
			if (empty($data)) {
				$step = 1;
				$message = '您还没有输入您的账户信息';
			} else {
			    $view = 'findpwd_2_' . ($data['type'] == 'email' ? 'email' : 'mobile');
			}
			break;
		case 3:
			$result = $this->_findStep3();
			if ($result['status'] != 200) {
				$step = 1;
				$message = $result['message'];
			} else {
				$data = $result['data'];
			}
			break;
		case 4:
			$data = $this->_findStep4();
		}
		$view = $step == 2 ? $view : "findpwd_{$step}";

        return $this->render($view, [
			'step' => $step,
			'message' => $message,
			'data' => $data,
            'model' => $model,
        ]);
    }

	protected function _findStep3()
	{
		$type = \Yii::$app->request->get('type');
        $model = new ResetPasswordForm();

		if (!in_array($type, ['email', 'mobile'])) {
			return false;
		}

		if ($type == 'email') {
			$token = \Yii::$app->request->get('token');
			$result = $model->checkToken($token);
			if ($result['status'] == 200) {
			    $result['data'] = ['type' => $type, 'code' => $token];
			}

			return $result;
		}

		$code = \Yii::$app->request->get('code');
		return $model->checkCode($code);
	}

	protected function _findStep4()
	{
        $model = new ResetPasswordForm();
		$return = $model->resetPassword();
		return $return;
    }
}
