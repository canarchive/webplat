<?php

namespace backend\spread\controllers;

use Yii;
<<<<<<< HEAD
=======
use yii\web\ForbiddenHttpException;
>>>>>>> web-house
use spread\decoration\models\DecorationOwner;
use spread\decoration\models\searchs\DecorationOwner as DecorationOwnerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
<<<<<<< HEAD

class DecorationOwnerController extends AdminController
{
	public $ownerInfo;

    /**
     * Lists all DecorationOwner.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new DecorationOwnerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single DecorationOwner model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new DecorationOwner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new DecorationOwner();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
=======
use spread\models\CustomService;

class DecorationOwnerController extends AdminController
{
	public $isService;
	public $serviceInfos;
	public $getData;

    use UserTrait;
	protected $modelClass = 'spread\decoration\models\DecorationOwner';

	public function beforeAction($action)
    {
		$this->initCustomService();
        return parent::beforeAction($action);
	}

    public function actionListnew()
    {   
        $this->getData['status'] = 0;
		return $this->actionListinfo();
    }   

    public function actionListbad()
    {   
        $this->getData['status'] = 4;
		return $this->actionListinfo();
    }   

    public function actionListgood()
    {   
        $this->getData['status'] = 3;
		return $this->actionListinfo();
    }   

    public function actionListfollow()
    {   
        $this->getData['status'] = 1;
		return $this->actionListinfo();
    }   

    public function actionListnewfollow()
    {   
        $this->getData['status'] = 2;
		return $this->actionListinfo();
    }   

    public function actionListinfo()
    {
		if ($this->isService) {
			$_GET['service_id'] = array_keys($this->serviceInfos);
		}
        $searchModel = new DecorationOwnerSearch($this->getData);
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		$model = new DecorationOwner();
		if (Yii::$app->request->isPost) {
			$data = Yii::$app->request->post();
			$scope = $model->formName();
			$model->setAttributes($data[$scope], false);
		   	$newModel = $model->addHandle();

			if ($newModel) {
                return $this->redirect(['update', 'id' => $newModel->id]);
			}
>>>>>>> web-house
        }

        return $this->render('add', [
            'model' => $model,
<<<<<<< HEAD
        ]);
    }

    /**
     * Updates an existing DecorationOwner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
		if (\Yii::$app->getRequest()->method == 'POST') {
		    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			$operation = \Yii::$app->request->post('operation');
			return $operation == 'add' ? $this->_add() : $this->_update();
		}

        $model = $this->findModel($id);
        $modelOwner = \spread\groupon\models\Owner::findOne(['mobile' => $model->mobile]);
		$this->ownerInfo = $modelOwner;

		$ownerHouseInfos = \spread\groupon\models\OwnerHouse::findAll(['mobile' => $model->mobile]);
		$callbackLogInfos = \spread\groupon\models\CallbackLog::findAll(['mobile' => $model->mobile]);

		$data = [
			'model' => $model,
			'modelOwner' => $modelOwner,
			'ownerHouseInfos' => $ownerHouseInfos,
			'callbackLogInfos' => $callbackLogInfos,
		];
=======
		]);
    }

    public function actionUpdate($id)
    {
		$data = $this->_userInfos($id, 'activity-user');
		if ($this->isAjax) {
			return $data;
		}
		//print_r($data);exit();
>>>>>>> web-house

        return $this->render('update', $data);
    }

<<<<<<< HEAD
	protected function _add()
	{
		$tables = ['owner_house', 'callback'];
		$table = \Yii::$app->request->post('table');

		if ($table == 'owner_house') {
			$fields = ['mobile', 'decoration_id', 'address', 'house_area', 'house_sort', 'house_type', 'buy_furniture', 'buy_building', 'renovation_at', 'renovation_step', 'renovation_budget', 'renovation_company'];
			$model = new \spread\groupon\models\OwnerHouse();
		} elseif ($table == 'callback') {
			$fields = ['mobile', 'content', 'note'];
			$model = new \spread\groupon\models\CallbackLog();
		} else {
			return ['status' => 400, 'message' => '参数错误'];
		}

		foreach ($fields as $field) {
			$model->$field = \Yii::$app->request->post($field);
		}
		$model->insert(false);
		$content = '';
		if ($table === 'owner_house') {
			$content = $this->renderPartial('_owner_house', ['model' => $model]);
		}

		$return = [
			'status' => 200, 
			'message' => 'OK', 
			'id' => $model->id, 
			'created_at' => date('Y-m-m H:i:s', $model->created_at),
			'content' => $content,
		];

		return $return;
	}

	protected function _update()
	{
		$tables = ['decoration_owner', 'owner', 'owner_house', 'callback'];
		$table = \Yii::$app->request->post('table');
		$infoId = \Yii::$app->request->post('info_id');
		$field = \Yii::$app->request->post('field');
		$value = \Yii::$app->request->post('value');
		if (empty($table) || !in_array($table, $tables) || empty($infoId) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		switch ($table) {
		case 'decoration_owner':
			$model = $this->findModel($infoId);
			if ($field == 'callback_at') {
			    $value = $model->callback_at > 0 ? $model->callback_at : time();
			}
			break;
		case 'owner':
			$model = \spread\groupon\models\Owner::findOne($infoId);
			break;
		case 'owner_house':
			$model = \spread\groupon\models\OwnerHouse::findOne($infoId);
			break;
		case 'callback':
			$model = \spread\groupon\models\CallbackLog::findOne($infoId);
			break;
		}
		$model->$field = $value;
		$model->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}

    /**
     * Finds the DecorationOwner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return DecorationOwner      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DecorationOwner::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
=======
	protected function initCustomService()
	{
		$managerInfo = Yii::$app->params['managerInfo'];
		if ($managerInfo['roles'] == '客服') {
			$this->isService = true;
			$this->serviceInfos = CustomService::find()->where(['manager_id' => $managerInfo['id']])->indexBy('id')->all();
		}
	}

	protected function _checkRecordPriv($model)
	{
		if ($this->isService && (empty($model->service_id) || !in_array($model->service_id, array_keys($this->serviceInfos)))) {
            throw new ForbiddenHttpException(Yii::t('yii', 'You are locked.'));
		}
	}
>>>>>>> web-house
}
