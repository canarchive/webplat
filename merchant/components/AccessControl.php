<?php

namespace merchant\components;

use Yii;
use yii\web\ForbiddenHttpException;
use yii\web\User;
use yii\di\Instance;
use yii\helpers\Url;
use merchant\models\MerchantUser;

class AccessControl extends \yii\base\ActionFilter
{
    /**
     * @var User User for check access.
     */
    private $_user = 'user';

    /**
     * @var array List of action that not need to check access.
     */
    public $allowActions = [];

    /**
     * Get user
     * @return User
     */
    public function getUser()
    {
        if (!$this->_user instanceof User) {
            $this->_user = Instance::ensure($this->_user, User::className());
        }
        return $this->_user;
    }

    /**
     * Set user
     * @param User|string $user
     */
    public function setUser($user)
    {
        $this->_user = $user;
    }

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
		$controller = $action->controller;
        $actionId = $action->getUniqueId();
		
		// Allowed actions return true
		foreach ($this->allowActions as $allowAction) {
			if ($allowAction == $actionId) {
				return true;
			}
			$allowAction = rtrim($allowAction, "*");
            if (strpos($actionId, $allowAction) === 0) {
                return true;
            }
		}
 
		// Whether logined 
        $user = $this->getUser();
        if ($user->getIsGuest()) {
            $user->loginRequired();
			return false;
        }

		// Get the current manager info, include the roles
		$userInfo = $user->getIdentity()->toArray();
		Yii::$app->params['managerInfo'] = $userInfo;

		return true;
	}
}
