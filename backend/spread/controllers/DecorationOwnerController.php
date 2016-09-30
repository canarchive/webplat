<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\ForbiddenHttpException;
use spread\decoration\models\DecorationOwner;
use spread\decoration\models\searchs\DecorationOwner as DecorationOwnerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use spread\models\CustomService;

class DecorationOwnerController extends AdminController
{
	public $isService;
	public $serviceInfos;

    use UserTrait;
	protected $modelClass = 'spread\decoration\models\DecorationOwner';

	public function beforeAction($action)
    {
		$this->initCustomService();
        return parent::beforeAction($action);
	}

    public function actionListinfo()
    {
		if ($this->isService) {
			$_GET['service_id'] = array_keys($this->serviceInfos);
		}
        $searchModel = new DecorationOwnerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new DecorationOwner());
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

	protected function initCustomService()
	{
		$managerInfo = Yii::$app->params['managerInfo'];
		if ($managerInfo['roles'] == '客服') {
			$this->isService = true;
			$this->serviceInfos = CustomService::find()->where(['manager_id' => $managerInfo['id']])->indexBy('id')->all();
		}
	}

	protected function _checkRecordPriv($model)
	{
		if ($this->isService && (empty($model->service_id) || !in_array($model->service_id, array_keys($this->serviceInfos)))) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are locked.'));
		}
	}
}
