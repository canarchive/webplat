<?php

class AdminController
{
    public function actionPosition()
    {
		return $this->getInfos('position');
	}

	protected function getInfos($field)
	{
        $searchModel = new \spread\models\searchs\Statistic();
		$type = \Yii::$app->request->get('type');
		$types = $searchModel->types;
		$type = in_array($type, array_keys($types)) ? $type : 'total';
		$typeInfo = $types[$type];
		$typeInfo = array_merge($typeInfo, [$field, 'count']);
		$infos = $searchModel->getInfos($field, $type);

		return $this->render('statistic', ['currentType' => $type, 'datas' => $infos, 'fields' => $typeInfo]);
    }

    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('infoAjax'))) {
			$data = $this->$action();
			return $data;
			exit();
		}

        $searchModel = new GrouponSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

	protected function infoAjax()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$groupon = new Groupon();
		$companyId = \Yii::$app->request->get('company_id');

		$orderBy = ['id' => SORT_DESC];
		$infos = $groupon->find()->where(['company_id' => $companyId])->orderBy($orderBy)->asArray()->all();
		$data = [];
		foreach ($infos as $info) {
			$data[$info['id']] = $info['name'];
		}

		return $data;
	}
	public function actionDelete()
	{
		$method = Yii::$app->request->method;
		if ($method != 'POST') {
            return $this->redirect(['listinfo']);
		}

		$selection = array_filter(Yii::$app->request->post('selection'));
		if (empty($selection)) {
            return $this->redirect(['listinfo']);
		}

		foreach ($selection as $id) {
			$info = GrouponProduct::findOne($id);
			
			if (empty($info)) {
				continue ;
			}
			$info->delete();
		}

        return $this->redirect(['listinfo']);
	}

	public function actionUpdate()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		if (\Yii::$app->getRequest()->method != 'POST') {
			return ['status' => 400, 'message' => '请求方法错误'];
		}

		$id = Yii::$app->request->post('info_id');
		$field = Yii::$app->request->post('field');
		$value = Yii::$app->request->post('value');
		if (empty($id) || empty($field)) {
			return ['status' => 400, 'message' => '参数错误'];
		}

		$info = GrouponProduct::findOne($id);
		if (empty($info)) {
			return ['status' => 400, 'message' => '信息不存在'];
		}
		$info->$field = $value;
		$info->update(false);

		return ['status' => 200, 'message' => 'OK'];
	}

    public function actionBind()
    {
		$grouponInfo = $this->getGroupon();
        $model = new GrouponProduct();

		if (\Yii::$app->request->method == 'POST') {
			$this->_bind($grouponInfo['id']);
		}

        $searchModel = new \spread\groupon\models\searchs\GrouponProduct();
        $dataProvider = $searchModel->searchProduct(Yii::$app->request->getQueryParams());

        return $this->render('bind', [
			'grouponInfo' => $grouponInfo,
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
 
    }

	protected function _bind($grouponId)
	{
		$selection = Yii::$app->request->post('selection');
		if (empty($selection)) {
			return false;
		}

		$orderlists = Yii::$app->request->post('orderlists');
		$descriptions = Yii::$app->request->post('descriptions');
		foreach ($selection as $id) {
            $model = new GrouponProduct();
			$model->groupon_id = $grouponId;
			$model->product_id = intval($id);
			$model->orderlist = intval($orderlists[$id]);
			$model->description = $descriptions[$id];
			$model->save(false);
		}
		return true;
	}

	protected function getGroupon()
	{
		$groupon_id = \Yii::$app->getRequest()->get('groupon_id');
		if (empty($groupon_id)) {
			exit('param error');
		}

		$info = \spread\groupon\models\Groupon::findOne($groupon_id);
		if (empty($info)) {
			exit('groupon no exist');
		}

		return $info;
	}
}
