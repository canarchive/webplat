<?php
namespace passport\models;

use yii\base\InvalidParamException;
use yii\base\Model;
use Yii;
use passport\models\User;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
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
}
