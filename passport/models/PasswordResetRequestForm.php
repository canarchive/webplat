<?php
namespace passport\models;

use common\models\PassportModel;
use common\components\sms\Smser;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends PassportModel
{
	public $username;
	public $captcha;
    public $email;
	public $mobile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'captcha'], 'filter', 'filter' => 'trim'],
            //['captcha', 'checkCaptcha'],
            ['captcha', 'captcha'],
            //['email', 'required'],
            //['email', 'email'],
            /*['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
			],*/
        ];
    }

	public function checkUserByMobile()
	{
		$isValid = $this->checkMobile($this->username);
		if ($isValid !== true) {
			return $isValid;
		}

		$user = User::findByMobile($this->username);
		if (empty($user)) {
			return ['status' => 400, 'message' => '用户不存在'];
		}

		return $user;
	}

	public function checkUserByEmail()
	{
		$isValid = $this->checkEmail($this->username);
		if ($isValid !== true) {
			return $isValid;
		}

		$user = User::findByEmail($this->username);
		if (empty($user)) {
			return ['status' => 400, 'message' => '用户不存在'];
		}

		return $user;
	}

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail($user)
    {
        if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
        }

        if ($user->save()) {
            $send = \Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
                //->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                ->setTo($user->email)
                ->setSubject('Password reset for ' . \Yii::$app->name)
                ->send();
			$return = $send ? ['status' => 200, 'message' => 'OK'] : ['status' => 400, 'message' => '邮件发送失败，请重试'];
			return $return;
        }

        return ['status' => 400, 'message' => '系统异常，请重新操作'];
    }

	public function sendMobile()
	{
 		$smser = new Smser();
   		$result = $smser->sendCode($this->mobile, 'findpwd');
		$result = 'OK';

    	$status = $result == 'OK' ? 200 : 400;
        return ['status' => $status, 'message' => $result];
	}

	public function findpwd()
	{
        if (!$this->validate()) {
		    $error = $this->getFirstErrors();
		    $field = key($error);
		    $message = $error[$field];
		    $status = $field == 'captcha' ? 401 : 400;

			//return ['status' => $status, 'message' => $message];
		}	

		if (strpos($this->username, '@') !== false) {
			$methodSend = 'sendEmail';
		    $user = $this->checkUserByEmail();
		} else {
		    $user = $this->checkUserByMobile();
			$methodSend = 'sendMobile';
		}

		if (!is_object($user)) {
			return $user;
		}

		$return = $this->$methodSend($user);
		if ($return['status'] == 200) {
			$data = [
				'type' => $methodSend,
				'username' => $this->username,
			];

			$this->sendInfos('write', $data);
		}

		return $return;
	}

	public function sendInfos($action, $data = []) 
	{
        $session = \Yii::$app->getSession();
        $session->open();
        $name = "_findpwd_send";

		switch ($action) {
		case 'write':
			$session[$name] = $data;
			return ;
		case 'get':
			$data = isset($session[$name]) ? $session[$name] : [];
			return $data;
		case 'clear':
			if (isset($session[$name])) {
				unset($session[$name]);
			}
			return ;
		}
	}

}
