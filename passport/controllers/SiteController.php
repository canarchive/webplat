<?php
namespace passport\controllers;

use Yii;
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
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		return [];
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            /*'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
			],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
		$actions = parent::actions();
        $currentActions = [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
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
		$returnUrl = Yii::$app->getRequest()->get('return_url', $this->homeDomain);
        if (!\Yii::$app->user->isGuest) {
            //return $this->redirect($returnUrl);
        }

        $model = new SigninForm();
        if ($model->load(Yii::$app->request->post()) && $model->signin()) {
            return $this->goBack();
        } else {
            return $this->render('signin', [
                'model' => $model,
				'returnUrl' => $returnUrl,
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
		$returnUrl = Yii::$app->getRequest()->get('return_url', $this->homeDomain);
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
			'returnUrl' => $returnUrl,
        ]);
    }

    public function actionFindpwd()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('findpwd', [
            'model' => $model,
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

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
