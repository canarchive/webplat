<?php

namespace restapp\components\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;
use restapp\components\Controller;
use paytrade\components\Pingxx;
use paytrade\models\Account;

class AccountController extends Controller
{
    public $modelClass = 'paytrade\models\Account';
	public $authExcept = ['pingback'];

    public function actionIndex()
    {
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;
		$searchModel = new \paytrade\models\searchs\Account();
		return $this->_index($searchModel);
    }

	public function actionCreate()
	{
		$identity = $this->_getIdentity();
		$_POST['user_id'] = $identity->id;

        $pingxx = new Pingxx();
		$params = $pingxx->getParams();
		if (isset($params['status']) && $params['status'] == 400) {
			return $params;
		}

		$modelAccount = new \paytrade\models\AccountPingxx();
		$params['orderid'] = $modelAccount->createSingleRandomStr();
        $pingxx = new Pingxx();
	    $return = $pingxx->pay($params);
		if (isset($return['status'])) {
			$returnInfo['status'] = 400;
			$returnInfo['message'] = $return['message'];
			return $returnInfo;
		}

		$modelAccount = new \paytrade\models\AccountPingxx();
		$modelAccount->recordAccount(array_merge($return, $params));

		return $return;
	}

	public function actionPingback()
	{
		$openTest = isset(\Yii::$app->params['openTest']) ? \Yii::$app->params['openTest'] : false;
		if ($openTest) {
			return $this->_testPingBack();
		}
		
        $pingxx = new \paytrade\components\Pingxx();
		$result = $pingxx->verifySignature();
		$verify = true;//$result['verify'];
		$params = $result['params'];

        if (empty($verify)) {
            http_response_code(400);
            echo 'verification failed';
            exit;
		}

		$eventType = $params['type'];
		switch ($eventType) {
		case 'charge.succeeded':
			$modelAccount = new \paytrade\models\AccountPingxx();
			$modelAccount->callback($params);
			break;
		case 'refund.succeeded':
		case '':
		default:
		}
        http_response_code(200); // PHP 5.4 or greater
	}	

	protected function _testPingBack()
	{
		$params['data']['order_no'] = \Yii::$app->request->get('order_no');
		$params['data']['channel'] = \Yii::$app->request->get('channel');
		$params['data']['amount'] = \Yii::$app->request->get('money');

		$modelAccount = new \paytrade\models\AccountPingxx();
		return $modelAccount->callback($params);
	}
}
