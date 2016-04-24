<?php

namespace backend\spread\controllers;

use Yii;
use spread\decoration\models\Faq;
use spread\decoration\models\searchs\Faq as FaqSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class FaqController extends AdminController
{
	protected $modelClass = 'spread\decoration\models\Faq';

    public function actionListinfo()
    {
        $searchModel = new FaqSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Faq());
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
