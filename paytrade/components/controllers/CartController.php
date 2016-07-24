<?php

namespace paytrade\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use paytrade\models\Cart;
use paytrade\models\CheckOrder;
use paytrade\components\Controller as PaytradeController;

class CartController extends PaytradeController
{
	public $layout = 'pay';

    public function actionIndex()
    {
		$infos = $this->_operate('list', []);

		$checkOrder = new CheckOrder();
		$datas = $checkOrder->checkInfos($infos);

        return $this->render('index', ['datas' => $datas]);
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
		$params['goodsId'] = Yii::$app->request->get('goods_id');
		$params['number'] = intval(Yii::$app->request->get('number', 0));

		return $this->_operate('add', $params);
    }

	public function actionUpdate($id)
	{
		$params['id'] = $id;
		$params['number'] = intval(Yii::$app->request->get('number', 0));
		$params['type'] = Yii::$app->request->get('type');

		return $this->_operate('update', $params);
	}

    public function actionDelete($id)
    {
		$params['id'] = $id;

		return $this->_operate('delete', $params);
    }

	public function actionClear()
	{
		return $this->_operate('clear', []);
	}

	protected function _operate($action, $params)
	{
		if ($action != 'list') {
            Yii::$app->response->format = Response::FORMAT_JSON;
		}
		$params['userId'] = 1;//\Yii::$app->user->id;

		$model = new Cart();
		$method = $action . 'Info';
		$return = $model->$method($params);
		return $return;
	}
}
