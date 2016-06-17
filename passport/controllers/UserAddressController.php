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
		$region = new \passport\models\Region();
		$regionLevel1 = json_encode($region->getSubInfos(''));

        return $this->render('address', ['infos' => $infos, 'regionLevel1' => $regionLevel1]);
    }

    public function actionCreate()
    {
		$params['snapupId'] = Yii::$app->request->post('snapup_id');
		$params['number'] = intval(Yii::$app->request->post('number', 0));

		return $this->_operate('add', $params);
    }

	public function actionUpdate()
	{
		$params['id'] = Yii::$app->request->post('id');
		$params['number'] = intval(Yii::$app->request->post('number', 0));
		$params['type'] = Yii::$app->request->post('type');
		$status = Yii::$app->request->post('status');
		$params['status'] = $status === '0' ? 0 : 1;

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
		$params['userId'] = 1;//\Yii::$app->user->id;

		$model = new \passport\models\UserAddress();
		$method = $action . 'Info';
		$return = $model->$method($params);
		return $return;
	}
}
