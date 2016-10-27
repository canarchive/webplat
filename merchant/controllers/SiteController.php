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
		//$this->homeUrl = Url::to(['/info/index']);
		$this->homeUrl = Url::to(['/house/info/index']);
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
		return Yii::$app->response->redirect($this->homeUrl)->send();
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
		        return Yii::$app->response->redirect($this->homeUrl)->send();
                //return $this->goBack();
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

        return $this->render('signup', [
            'model' => $model,
			'infos' => $infos,
			'message' => $message,
        ]);
    }
}
