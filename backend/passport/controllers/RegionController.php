<?php

namespace backend\passport\controllers;

use Yii;
use passport\models\Region;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

class RegionController extends AdminController
{
	public $modelClass = 'passport\models\Region';

    /**
     * Lists all Region models.
     * @return mixed
     */
    public function actionListinfo()
    {
		$model = new Region();
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
		return $this->_addInfo(new Region());
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
