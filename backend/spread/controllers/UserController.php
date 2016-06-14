<?php

namespace backend\spread\controllers;

use Yii;
use spread\models\User;
use spread\models\searchs\User as UserSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class UserController extends AdminController
{
    use UserTrait;
	protected $modelClass = 'spread\models\User';

    public function actionListinfo()
    {
        $searchModel = new UserSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		$data = $this->_userInfos($id, 'user');
		$mobile = !empty($data['modelUser']) ? $data['modelUser']->mobile : false;
		$data['activityUserInfos'] = [];
		if (!empty($mobile)) {
		    $data['activityUserInfos'] = \spread\shoot\models\ActivityUser::findAll(['mobile' => $mobile]);
		}

        return $this->render('view', $data);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new User());
    }

    public function actionUpdate($id)
    {
		$data = $this->_userInfos($id, 'user');
		if ($this->isAjax) {
			return $data;
		}

        return $this->render('../activity-user/update', $data);
    }
}
