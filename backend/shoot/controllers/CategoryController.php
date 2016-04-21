<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\models\Category;
use shoot\models\searchs\Category as CategorySearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class CategoryController extends AdminController
{
	protected $modelClass = 'shoot\models\Category';

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionListinfo()
    {
		$model = new Category();
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
		return $this->_addInfo(new Category());
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
