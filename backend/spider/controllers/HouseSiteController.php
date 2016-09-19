<?php

namespace backend\spider\controllers;

use Yii;
use spider\house\models\HouseSite;
use spider\house\models\searchs\HouseSite as HouseSiteSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class HouseSiteController extends AdminController
{
	protected $modelClass = 'spider\house\models\HouseSite';

    public function actionListinfo()
    {
        $searchModel = new HouseSiteSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new HouseSite());
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
