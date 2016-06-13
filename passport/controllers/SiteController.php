<?php
namespace passport\controllers;

use Yii;
use yii\helpers\Url;
use passport\models\SigninForm;
use passport\models\PasswordResetRequestForm;
use passport\models\ResetPasswordForm;
use passport\models\SignupForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use passport\components\Controller as PassportController;

/**
 * Site controller
 */
class SiteController extends PassportController
{
	public $returnUrl;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'signin', 'index'],
                'rules' => [
                    [
                        'actions' => ['signup', 'signin', 'findpwd'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
					if (in_array($action->id, ['index', 'logout'])) { 
		                return Yii::$app->response->redirect(Url::to(['site/signin']))->send();
					} else {
		                return Yii::$app->response->redirect(\Yii::$app->params['homeDomain'])->send();
					}
                },
            ],
            /*'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
			],*/
        ];
    }

    public function init()
    {
        parent::init();
		$this->layout = 'main_auth';
	    //$this->layoutPath = Yii::getAlias('@app/info/views');
		
		$this->returnUrl = Yii::$app->getRequest()->get('return_url', $this->homeDomain);
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
		$this->layout = '@shoot/views/default/layouts/main';
        return $this->render('index');
    }

    public function actionSignin()
    {
        $model = new SigninForm();
		$wrongTimes = $model->wrongTimes('check');
        if ($model->load(Yii::$app->request->post()) && $model->signin()) {
            return $this->goBack();
        } else {
            return $this->render('signin', [
                'model' => $model,
				'returnUrl' => $this->returnUrl,
				'showCaptcha' => $wrongTimes > 5 ? 1 : 0,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

		return $this->redirect($this->homeDomain);
    }

    public function actionSignup()
    {
        $model = new SignupForm();

		$infos = [];
		$message = '';
        if ($model->load(Yii::$app->request->post(), '')) {
		    $model->mobile = $_POST['username'];
		    $model->passwordConfirm = $_POST['r_password'];
		    $model->mobileCode = $_POST['activation_code'];
			$message = '请填写完整的注册信息';
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
		            return Yii::$app->response->redirect($this->returnUrl)->send();
                }
            }
		    $error = $model->getFirstErrors();
		    $field = key($error);
		    $message = isset($error[$field]) ? $error[$field] : $message;
			$infos = $model->toArray();
        }

        return $this->render('signup', [
            'model' => $model,
			'returnUrl' => $this->returnUrl,
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
		switch ($step) {
		case 2:
			$data = $model->sendInfos('get');
			//print_r($data);
			//$data = ['type' => 'sendEmail', 'username' => 'iamwangcan@163.com'];
			$data = ['type' => 'sendMobile', 'username' => '13811974106'];
			if (empty($data)) {
				$step = 1;
				$view = 'findpwd_1';
			} else {
			    $view = 'findpwd_2_' . ($data['type'] == 'sendEmail' ? 'email' : 'mobile');
			}
			break;
		case 3:
		case 4:
		}
		$view = $step == 2 ? $view : "findpwd_{$step}";

        return $this->render($view, [
			'step' => $step,
			'data' => $data,
            'model' => $model,
			'returnUrl' => $this->returnUrl,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

		$_GET['step'] = 3;
		$_GET['token'] = $token;
		return $this->actionFindpwd();
    }
}
