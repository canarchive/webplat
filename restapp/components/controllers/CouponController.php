<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;

class CouponController extends Controller
{
    public $modelClass = 'paytrade\models\Coupon';

    public function actionIndex()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;
		$searchModel = new \paytrade\models\searchs\Coupon();
		return $this->_index($searchModel);
    }

    public function actionView($id)
    {
		return $this->_view($id);
    }
}
