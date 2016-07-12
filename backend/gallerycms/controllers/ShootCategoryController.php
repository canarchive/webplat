<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\ShootCategory;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

class ShootCategoryController extends AdminController
{
	public $modelClass = 'gallerycms\models\ShootCategory';

    /**
     * Lists all ShootCategory models.
     * @return mixed
     */
    public function actionListinfo()
    {
		$model = new ShootCategory();
		$infos = $model->getFormatedInfos();

        return $this->render('listinfo', [
			'model' => $model,
            'infos' => $infos,
        ]);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new ShootCategory());
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id);
    }

    public function actionDelete($id)
    {
		return $this->_deleteInfo($id);
    }
}
