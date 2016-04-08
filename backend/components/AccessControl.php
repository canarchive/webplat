<?php

namespace backend\components;

use yii\web\ForbiddenHttpException;
use yii\base\Module;
use Yii;
use yii\web\User;
use yii\di\Instance;
use yii\helpers\Url;
use backend\models\Manager;
use backend\models\Menu;

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
		$identity = $user->getIdentity();
		if ($identity->status == Manager::STATUS_LOCK) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are locked.'));
		}			

		// Get the current route infos, get the current menu
		$routeData = explode('/', $actionId);
		$controller->moduleId = count($routeData) == 3 && $routeData[1] == $controller->id ? $routeData[0] : '';
		$controller->actionId = $actionId;
		$controller->actionIdBase = array_pop($routeData);
		$where = [
			'module' => $controller->moduleId,
			'controller' => $controller->id,
			'method' => $controller->actionIdBase,
		];

		$currentMenu = Menu::findOne($where);
        if (empty($currentMenu) || !$user->can($currentMenu['code'])) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are not allowed to perform this action.'));
		}
		if ($identity->status == Manager::STATUS_NOACTIVE && $currentMenu['controller'] != 'document' && $currentMenu['method'] != 'edit-password') {
			$url = Url::to(['/manager/edit-password']);
		    return Yii::$app->response->redirect($url);
		}			

        $manager = Yii::$app->getAuthManager();
		$permissions = $manager->getPermissionsByUser($user->id);
		$codes = array_keys($permissions);
		$controller->menuInfos = $this->getMenuInfos($codes, $currentMenu);

		if ($currentMenu['extparam'] == 'modal') {
			\Yii::$app->layout = null;
		}

		// Get the current manager info, include the roles
		$userInfo = $user->getIdentity()->toArray();
		$roles = \yii\helpers\ArrayHelper::getColumn($manager->getRolesByUser($user->id), 'name');
		$userInfo['roles'] = implode(',', $roles);
		Yii::$app->params['currentMenu'] = $currentMenu->toArray();
		Yii::$app->params['managerInfo'] = $userInfo;

		return true;
	}

	/**
	 * Get the menus of current manager
	 */
	protected function getMenuInfos($codes, $currentMenu)
	{
		$menus = Menu::find()->asArray()->where(['code' => $codes])->indexBy('code')->orderBy(['orderlist' => SORT_DESC])->all();
		//$menus = Menu::find()->asArray()->indexBy('code')->all();
		$appMenus = [];
		foreach ($menus as $key => $menu) {
			$route = '/' . trim($menu['module'] . '/' . $menu['controller'] . '/' . $menu['method'], '/');
			$menu['url'] = Url::toRoute($route);
			if ($key == $currentMenu['code']) {
				$currentMenu['url'] = $menu['url'];
			}
			$menus[$key] = $menu;
            if ($menu['parent_code'] == $currentMenu['parent_code'] && $menu['module'] == $currentMenu['module'] && $currentMenu['controller'] == $menu['controller']) {
                $appMenus[$menu['method']] = $menu;
            }
		}

		$parentMenu = isset($menus['parent_code']) ? $currentMenu['parent_code'] : $currentMenu;
		$menuTitle = $currentMenu['name'];
		$menuBreadCrumb = $currentMenu['name'];
		while (isset($menus[$parentMenu['parent_code']])) {
			$parentMenu = $menus[$parentMenu['parent_code']];
			$menuTitle .= '--' . $parentMenu['name'];
			$menuBreadCrumb = $parentMenu['name'] . '-->' . $menuBreadCrumb;
		}

		$menuInfos = [
			'menuTitle' => $menuTitle,
			'menuBreadCrumb' => $menuBreadCrumb,
			'currentMenu' => $currentMenu,
			'parentMenu' => $parentMenu,
			'appMenus' => $appMenus,
			'menus' => $menus,
		];
		//print_r($menuInfos);exit();
		return $menuInfos;
    }
}
