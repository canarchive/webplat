<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\PictureCategory;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

class PictureCategoryController extends AdminController
{
	public $modelClass = 'gallerycms\models\PictureCategory';

    /**
     * Lists all PictureCategory models.
     * @return mixed
     */
    public function actionListinfo()
    {
		$model = new PictureCategory();
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
		return $this->_addInfo(new PictureCategory());
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
