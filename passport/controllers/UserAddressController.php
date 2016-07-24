<?php
namespace passport\controllers;

use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;
use passport\components\Controller as PassportController;

class UserAddressController extends PassportController
{
	public $layout = '@shoot/views/default/layouts/main';
	public $regionLevel1;

    public function behaviors()
    {
		return [];
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['logout', 'signup', 'signin', 'index'],
                'rules' => [
                    [
                        //'actions' => ['index', 'logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
		            return Yii::$app->response->redirect(Url::to(['site/signin']))->send();
                },
            ],
        ];
	}

    public function actionIndex()
    {
		$infos = $this->_operate('list', []);
		$region = new \common\models\Region();
		$regionLevel1 = json_encode($region->getSubInfos(''));

        return $this->render('address', ['infos' => $infos, 'regionLevel1' => $regionLevel1]);
    }

    public function actionCreate()
    {
		$params = $this->_initParams();
		return $this->_operate('add', $params);
	}

	public function actionUpdate()
	{
		$params = $this->_initParams();
		$params['id'] = \Yii::$app->request->post('id');

		return $this->_operate('update', $params);
	}

    public function actionDelete()
    {
		$params['id'] = \Yii::$app->request->post('id');

		return $this->_operate('delete', $params);
    }

	protected function _operate($action, $params)
	{
		if ($action != 'list') {
		    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		}			
		$params['user_id'] = 1;//\Yii::$app->user->id;

		$model = new \passport\models\UserAddress();
		$method = $action . 'Info';
		$return = $model->$method($params);
		return $return;
	}

	protected function _initParams()
	{
		$fields = ['consignee', 'mobile', 'address', 'is_default'];
		foreach ($fields as $field) {
			$params[$field] = \Yii::$app->request->post($field);
		}
		$regionCode = \Yii::$app->request->post('district_id');
		$regionCode = empty($regionCode) ? \Yii::$app->request->post('city_id') : $regionCode;
		$regionCode = empty($regionCode) ? \Yii::$app->request->post('province_id') : $regionCode;
		$params['region_code'] = $regionCode;
		$params['is_default'] = intval($params['is_default']);

		return $params;
    }
}
