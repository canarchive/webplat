<?php
namespace passport\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\User;
use common\models\User as UserModel;
use common\third\Userplat;
use common\models\SigninForm;
use passport\models\SignupForm;
use passport\models\UserPlat as UserPlatModel;

/**
 * Site controller
 */
class UserplatController extends Controller
{
	protected $userplat;

	public function actionBind($platCode)
	{
		//print_r(Yii::$app->request);exit();
		$userplat = $this->getUserplat($platCode);
		$userplat->bind();
	}

	public function actionCallback($platCode)
	{
		$userplat = $this->getUserplat($platCode);
		$return = $userplat->backAuth();

		if (empty($return)) {
			exit('授权失败');
		}

		$platUser = $userplat->getPlatUser();
		//print_r($platUser);exit();
		if (empty($platUser)) {
			exit('请重新授权');
		}

		$bindInfo = $this->getBindInfo($platUser);
		if (!empty($bindInfo->user_id)) {
    		$user = UserModel::findIdentity($bindInfo['user_id']);
            if (Yii::$app->getUser()->login($user)) {
                return $this->goHome();
            }
			exit('登陆失败，请联系管理员');
		}

        if (!\Yii::$app->user->isGuest) {
			$user = Yii::$app->user->identity;
			$bindedInfo = $bindInfo->checkBinded($user, $bindInfo);
			if ($bindedInfo) {
				exit('您已绑定了' . $bindInfo->plat_code . '账号' . $bindedInfo['nickname']);
			}
			$bindInfo->bindPlatUser($user, $bindInfo);
			exit('绑定成功');
		}
				
        $modelSignin = new SigninForm();
        $modelSignup = new SignupForm();
		$platId = $bindInfo->id;
		$sign = md5($bindInfo->access_token . $platId);
		$data = [
			'platUser' => $platUser, 
			'modelSignin' => $modelSignin, 
			'modelSignup' => $modelSignup,
			'platId' => $platId,
			'sign' => $sign,
		];
		return $this->render('bind', $data);
	}

	public function actionBinduser()
	{
		$request = Yii::$app->request;
		$bindType = $request->post('bind_type');
	    if ($bindType == 'signin') {	
            $modelSign = new SigninForm();
		    $modelSign->load($request->post());
	   	    $modelSign->signin();
			$user = Yii::$app->user->identity;
		} elseif ($bindType == 'signup') {
            $modelSignup = new SignupForm();
            if ($modelSignup->load($request->post())) {
				if ($user = $modelSignup->signup()) {
                    Yii::$app->getUser()->login($user);
				}
			}
		}

		if (empty($user)) {
			exit('login qu');
		}

		$platId = $request->post('plat_id');
		$sign = $request->post('sign');
		if (empty($platId) || empty($sign)) {
			exit('登陆或注册成功，请重新绑定');
		}
		$userPlat = new UserPlatModel();
		$platInfo = $userPlat->findOne(['id' => $platId]);
		if (empty($platInfo)) {
			exit('重新绑定');
		}
		$signTarget = md5($platInfo['access_token'] . $platId);
		if ($sign != $signTarget) {
			exit('youwu');
		}

		$platInfo->bindPlatUser($user, $platInfo);
		exit('bind ok');
	}

	private function getBindInfo($platUser)
	{
		$model = new UserPlatModel($platUser);
		$platInfo = [
			'plat_code' => $platUser['plat_code'],
			'openid' => $platUser['openid'],
		];
        $bindInfo = $model->findOne($platInfo);

		if (empty($bindInfo)) {
		    $model = new UserPlatModel($platUser);
		    $model->save();
			$bindInfo = $model;
		}
		
		return $bindInfo;
	}

	private function getUsserPlat($platUser = [])
	{
		static $object = null;
		if (!$object) {
			$object = new UserPlatModel($platUser);
		}

		return $object;
	}

	protected function getUserplat($platCode)
	{
		return new Userplat($platCode);
	}
}
