<?php

namespace backend\gallerycms\controllers;

use Yii;
use gallerycms\models\Attachment;
use gallerycms\models\searchs\Attachment as AttachmentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class AttachmentController extends AdminController
{
	protected $modelClass = 'gallerycms\models\Attachment';

    public function actionListinfo()
    {
        $searchModel = new AttachmentSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new Attachment());
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
