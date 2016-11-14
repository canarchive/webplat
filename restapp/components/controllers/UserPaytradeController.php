<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;
use paytrade\models\UserPaytrade;
use paytrade\models\CheckOrder;

class UserPaytradeController extends Controller
{
    public $modelClass = 'paytrade\models\UserPaytrade';

    public function actionView()
    {
        $modelClass = $this->modelClass;
		$identity = $this->_getIdentity();
	    $userId = $identity->id;
        if (($model = $modelClass::findOne(['user_id' => $userId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
