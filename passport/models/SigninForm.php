<?php
namespace passport\models;

use Yii;
use yii\base\Model;

/**
 * Signin form
 */
class SigninForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    public $captcha;

    private $_user = false;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            //['rememberMe', 'boolean'],
            ['captcha', 'default', 'value' => true],
            ['captcha', 'checkCaptcha'],
            ['password', 'validatePassword'],
        ];
    }

	public function checkCaptcha()
	{
		$wrongTimes = $this->wrongTimes('check');
		if ($wrongTimes <= 5) {
			return ;
		}

        $validator = new \yii\captcha\CaptchaValidator();
        $valid =  $validator->validate($this->captcha);
        if (!$valid) {
            $this->addError('captcha', 'error captcha');
        }
	}

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        $user = $this->getUser();
		if (!$user) {
            $this->addError($attribute, 'Incorrect username.');
			return ;
		}

        if (!$user->validatePassword($this->password)) {
			$this->wrongTimes('write');
            $this->addError($attribute, 'Incorrect password.');
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function signin()
    {
        if (!$this->validate()) {
		    $error = $this->getFirstErrors();
		    $field = key($error);
		    $message = $error[$field];
		    $status = $field == 'captcha' ? 401 : 400;
			$wrongTimes = $this->wrongTimes('check');

			return ['status' => $status, 'message' => $message, 'wrongTimes' => $wrongTimes];
		}

        $loginResult = Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
		if (!$loginResult) {
		    return ['status' => 400, 'message' => '失败'];
		}

	    $this->wrongTimes('clear');
		return ['status' => 200, 'message' => 'OK'];
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
		}
		if (empty($this->_user)) {
			$this->_user = User::findByEmail($this->username);
		}
		if (empty($this->_user)) {
			$this->_user = User::findByMobile($this->username);
		}

        return $this->_user;
    }

	public function wrongTimes($action) 
	{
        $session = Yii::$app->getSession();
        $session->open();
        $name = "_login_count";

		switch ($action) {
		case 'write':
			$count = isset($session[$name]) ? $session[$name] + 1: 1;
			$session[$name] = $count;
			return ;
		case 'check':
			$count = isset($session[$name]) ? $session[$name] : 0;
			return $count;
		case 'clear':
			if (isset($session[$name])) {
				unset($session[$name]);
			}
			return ;
		}
	}
}
