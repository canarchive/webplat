<?php

namespace backend\website\controllers;

use Yii;
use website\models\Category;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

class CategoryController extends AdminController
{
	protected $modelClass = 'website\models\Category';

    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('brandInfos'))) {
			$data = $this->$action();
			return $data;
		}		

		$model = new Category();
		$infos = $model->getFormatedInfos();

        return $this->render('listinfo', [
			'model' => $model,
            'infos' => $infos,
        ]);
    }

	protected function brandInfos()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$categoryId = \Yii::$app->request->get('category_id');
		$datas = \website\models\Brand::getInfosByCategoryId($categoryId);

		return $datas;
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
