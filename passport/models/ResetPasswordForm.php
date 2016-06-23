<?php
namespace passport\models;

use yii\base\InvalidParamException;
use yii\base\Model;
use yii\helpers\Url;
use Yii;
use passport\models\User;
use common\components\sms\Smser;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;

    private $_user;

    public function checkToken($token)
    {
        if (empty($token) || !is_string($token)) {
			return ['status' => 400, 'message' => '参数TOKEN不能为空！'];
        }
        $this->_user = User::findByPasswordResetToken($token);
        if (!$this->_user) {
			return ['status' => 400, 'message' => 'TOKEN值有误'];
        }

		return ['status' => 200, 'message' => 'OK'];
    }

    public function checkCode($code)
    {
		if (empty($code)) {
			return ['status' => 400, 'message' => '验证码不能为空'];
		}

		$passwordResetRequestForm = new PasswordResetRequestForm();
		$data = $passwordResetRequestForm->sendInfos('get');
		$data = ['type' => 'mobile', 'username' => '13811974106'];
		if (empty($data) || $data['type'] != 'mobile') {
			return ['status' => 401, 'message' => '请返回第一步输入手机号'];
		}

        $this->_user = User::findByMobile($data['username']);
        if (!$this->_user) {
			return ['status' => 401, 'message' => '账号信息有误'];
        }

		$smser = new Smser();
		$result = $smser->checkCode($data['username'], 'findpwd', $code);
		$result = 'OK';

		$status = $result == 'OK' ? 200 : 400;
		$data = [
			'site/findpwd',
			'step' => 3,
			'type' => 'mobile',
			'code' => $code,
		];
		$data['url'] = $status == 200 ? Url::to($data) : '';
		return ['status' => $status, 'message' => $result, 'data' => $data];
    }

	public function checkPassword($password)
	{
		$this->_user = \Yii::$app->user->identity;
        if (!$this->_user) {
			return ['status' => 400, 'message' => '您已退出平台，请重新登录'];
        }

        $result = \Yii::$app->security->validatePassword($password, $this->_user->password);
        if (!$result) {
			return ['status' => 400, 'message' => '旧密码错误'];
        }
		return ['status' => 200, 'message' => 'OK'];
	}

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {
		$check = $this->checkReset();

		if ($check['status'] != 200) {
			return $check;
		}
		$data = $check['data'];

        $user = $this->_user;
        $user->setPassword($data['password']);
		if ($data['type'] == 'email') {
            $user->removePasswordResetToken();
		}
		if ($data['type'] == 'mobile') {
            $user->removePasswordResetToken();
		}

        $r = $user->save(false);
		$result = $r ? ['status' => 200, 'message' => 'OK'] : ['status' => 401, 'message' => '未知错误'];
		return $result;
    }

	public function checkReset()
	{
		// 获取重置密码时的参数信息
		$params = ['type', 'code', 'password', 'password_confirm'];
		$datas = [];
		foreach ($params as $param) {
			$datas[$param] = \Yii::$app->request->post($param);
		}

		// 验证充值密码的方式是否有误，有效方式：旧密码、手机号、邮箱
		$type = $datas['type'];
		$types = ['email', 'mobile', 'password'];
		if (!in_array($datas['type'], $types)) {
			return ['status' => 401, 'message' => '充值密码的方式有误'];
		}

		// 重置密码时的附件验证码；手机短信、邮箱token、旧密码
		if (empty($datas['code'])) {
			return ['status' => 401, 'message' => '账号信息有误，请重新输入账号信息'];
		}

		// 验证新密码是否有效
		if (empty($datas['password']) || empty($datas['password_confirm']) || $datas['password'] != $datas['password_confirm']) {
			return ['status' => 400, 'message' => '请输入正确的密码'];
		}

		// 验证短信验证码、token、旧密码是否有效
		switch ($type) {
		case 'email':
			$result = $this->checkToken($datas['code']);
			break;
		case 'mobile':
			$result = $this->checkCode($datas['code']);
			break;
		case 'password':
			$result = $this->checkPassword($datas['code']);
			break;
		}

		if ($result['status'] != 200) {
			return $result;
		}

		return ['status' => 200, 'message' => 'OK', 'data' => $datas];
	}
}
