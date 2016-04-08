<?php

namespace paytrade\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use paytrade\models\UserAddress;
use passport\models\Region;
use paytrade\components\Controller as PaytradeController;

class UserAddressController extends PaytradeController
{
	public $layout = 'pay';

    public function actionIndex()
    {
		$infos = $this->_operate('list', []);

        return $this->render('index', ['infos' => $infos]);
    }

    public function behaviors()
    {
		return [];
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['adds', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['?']
                    ]
				],
				'denyCallback' => function($rule, $action) {
                    Yii::$app->response->format = Response::FORMAT_JSON;
					echo json_encode(['status' => 400, 'message' => 'you need login']);
					exit();
				}
            ],
        ];
    }

    public function actionAdd()
    {
		$params = $this->_formatParams();

		return $this->_operate('add', $params);
    }

	public function actionUpdate($id)
	{
		$params = $this->_formatParams();
		$params['id'] = $id;

		return $this->_operate('update', $params);
	}

    public function actionDelete($id)
    {
		$params['id'] = $id;

		return $this->_operate('delete', $params);
    }

	protected function _operate($action, $params)
	{
		if ($action != 'list') {
            Yii::$app->response->format = Response::FORMAT_JSON;
		}
		$params['user_id'] = 1;//\Yii::$app->user->id;

		$model = new UserAddress();
		$method = $action . 'Info';
		$return = $model->$method($params);
		return $return;
	}

	protected function _formatParams()
	{
		$fields = ['name', 'consignee', 'email', 'region_id', 'address', 'zipcode', 'mobile', 'sign_building', 'best_time', 'is_default'];
		$params = [];
		foreach ($fields as $field) {
			$params[$field] = Yii::$app->request->get($field, '');
			if ($field == 'is_default') {
				$params[$field] = intval($params[$field]);
			}
		}

		return $params;
	}
}
