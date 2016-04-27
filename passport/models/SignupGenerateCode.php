<?php
namespace passport\models;

class SignupGenerateCode extends SignupForm
{
	public $captcha;
    public function rules()
    {
        return [
            ['mobile', 'filter', 'filter' => 'trim'],
            [['mobile', 'password'], 'required'],
            ['mobile', 'common\validators\MobileValidator'],
            ['mobile', 'unique', 'targetClass' => '\passport\models\User', 'message' => 'This mobile address has already been taken.'],

            ['password', 'string', 'min' => 6],
            ['captcha', 'captcha'],
			['passwordConfirm', 'compare','compareAttribute'=>'password'],
        ];
    }
}
