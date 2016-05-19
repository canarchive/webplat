<?php

namespace backend\shoot\controllers;

use Yii;
use shoot\info\models\Info;
use shoot\info\models\searchs\Info as InfoSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class InfoController extends AdminController
{
	protected $modelClass = 'shoot\info\models\Info';

    /**
     * Lists all Info models.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new InfoSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Info());
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
