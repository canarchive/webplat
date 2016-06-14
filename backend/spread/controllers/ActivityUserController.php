<?php

namespace backend\spread\controllers;

use Yii;
use spread\shoot\models\ActivityUser;
use spread\shoot\models\searchs\ActivityUser as ActivityUserSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class ActivityUserController extends AdminController
{
    use UserTrait;
	protected $modelClass = 'spread\shoot\models\ActivityUser';

    public function actionListinfo()
    {
        $searchModel = new ActivityUserSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ActivityUser());
    }

    public function actionUpdate($id)
    {
		$data = $this->_userInfos($id, 'activity-user');
		if ($this->isAjax) {
			return $data;
		}
		//print_r($data);exit();

        return $this->render('update', $data);
    }
}
