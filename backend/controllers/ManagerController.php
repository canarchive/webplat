<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\models\Manager; 
use backend\models\searchs\Manager as ManagerSearch;
use backend\components\AdminController;

/**
 * ManagerController implements the CRUD actions for Manager model.
 */
class ManagerController extends AdminController
{
	protected $modelClass = 'backend\models\Manager';

    public function actionListinfo()
    {
        $searchModel = new ManagerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Manager(['scenario' => 'create']));
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id, 'update');
    }

    public function actionDelete($id)
    {
		return $this->_deleteInfo($id);
    }

    public function actionEditInfo()
    {
        $model = Manager::findOne(Yii::$app->user->identity->id);
        $model->setScenario('edit-info');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'new infos was saved.'));
            }
            return $this->redirect(['edit-info']);
        }

        return $this->render('edit-info', ['model' => $model]);
    }

    public function actionEditPassword()
    {
        $model = Manager::findOne(Yii::$app->user->identity->id);
        $model->setScenario('edit-password');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //$model->setPassword($model->password, 'password');
            $model->generateAuthKey();
			$model->status = 1;
            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New password was saved.'));
            }
            return $this->redirect(['edit-password']);
        }

        return $this->render('edit-password', ['model' => $model]);
    }
}
