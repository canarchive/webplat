<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\MerchantUser;
use merchant\models\searchs\MerchantUser as MerchantUserSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantUserController extends AdminController
{
	protected $modelClass = 'merchant\models\MerchantUser';

    public function actionListinfo()
    {
        $searchModel = new MerchantUserSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		$data = [
			'merchant_id' => Yii::$app->request->get('merchant_id', 0),
		];
		return $this->_addInfo(new MerchantUser($data));
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
