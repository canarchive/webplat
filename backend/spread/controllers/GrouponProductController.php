<?php

namespace backend\spread\controllers;

use Yii;
use spread\groupon\models\GrouponProduct;
use spread\groupon\models\searchs\GrouponProduct as GrouponProductSearch;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;
use backend\components\AdminController;

class GrouponProductController extends AdminController
{
	public $grouponInfo;

    /**
     * Lists all GrouponProduct.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new GrouponProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

		$searchInfos['companyInfos'] = ArrayHelper::map(\merchant\models\Company::find()->all(), 'id', 'name');
        return $this->render('listinfo', [
			'searchInfos' => $searchInfos,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
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
