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

    public function checkCode()
    {
		$code = \Yii::$app->getRequest()->get('mobile_code');
		if (empty($code)) {
			return ['status' => 400, 'message' => '验证码不能为空'];
		}

		$passwordResetRequestForm = new PasswordResetRequestForm();
		$data = $passwordResetRequestForm->sendInfos('get');
		$data = ['type' => 'mobile', 'username' => '13811974106'];
		if (empty($data) || $data['type'] != 'mobile') {
			return ['status' => 401, 'message' => '请返回第一步输入手机号'];
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

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();

        return $user->save(false);
    }

	public function checkReset()
	{
		$params = ['type', 'code', 'password', 'password_confirm'];
		$datas = [];
		foreach ($params as $param) {
			$datas[$param] = \Yii::$app->post($param);
		}

		if (empty($type) || empty($datas['code'])) {
			return ['status' => 400, 'message' => '账号信息有误，请重新输入账号信息'];
		}
		if (empty($datas['password']) || empty($datas['password_confirm']) || $datas['password'] != $datas['password_confirm']) {
			return ['status' => 400, 'message' => '请输入正确的密码'];
		}
	}
}
