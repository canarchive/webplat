<?php

namespace backend\spider\controllers;

use Yii;
use spider\models\Attachment;
use spider\models\searchs\Attachment as AttachmentSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class AttachmentController extends AdminController
{
	protected $modelClass = 'spider\models\Attachment';

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
		return $this->_addInfo(new AttachmentSort());
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
