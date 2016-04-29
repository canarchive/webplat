<?php
namespace passport\models;

use common\models\User;
use yii\base\Model;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
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
            ['captcha', 'checkCaptcha'],
            //['captcha', 'captcha'],
            //['email', 'required'],
            //['email', 'email'],
            /*['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE],
                'message' => 'There is no user with such email.'
			],*/
        ];
    }

	public function checkMobile($mobile)
	{
	}

	public function checkEmail($email)
	{
	}

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if ($user) {
            if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {
                return \Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
                    ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                    ->setTo($this->email)
                    ->setSubject('Password reset for ' . \Yii::$app->name)
                    ->send();
            }
        }

        return false;
    }

	public function sendMobile()
	{
 		$smser = new Smser();
   		$result = $smser->sendCode($this->mobile, 'findpwd');
		$result = 'OK';

    	$status = $result == 'OK' ? 200 : 400;
        return ['status' => $status, 'message' => $result];
	}

	public function checkParams()
	{
        if (!$this->validate()) {
		    $error = $this->getFirstErrors();
		    $field = key($error);
		    $message = $error[$field];
		    $status = $field == 'captcha' ? 401 : 400;

			return ['status' => $status, 'message' => $message];
		}	

		$check = strpos($this->username, '@') !== false ? $this->checkEmail() : $this->checkMobile();
		if ($check['status'] != 200) {
			return $check;
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
        $session = Yii::$app->getSession();
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
