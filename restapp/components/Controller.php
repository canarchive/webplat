<?php
namespace restapp\components;

use Yii;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\QueryParamAuth;

class Controller extends ActiveController
{
    public $result = ['errcode' => 404, 'errmsg' => '操作错误'];

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();
		$actions = $this->_unsetActions($actions);
        return $actions;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
		$this->_getAuthBehaviors($behaviors);
        return $behaviors;
    }

    protected function _index($searchModel)
    {
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());
		return $dataProvider;
    }

    protected function _create()
    {
        $model = new $this->modelClass();
        $model->load(Yii::$app->getRequest()->getBodyParams(), '');
        if (!$model->save()) {
            return array_values($model->getFirstErrors())[0];
        }
        return $model;
    }

    protected function _update($id)
    {
        $model = $this->findModel($id);
        $model->load(Yii::$app->getRequest()->getBodyParams(), '');
        if (!$model->save()) {
            return array_values($model->getFirstErrors())[0];
        }
        return $model;
    }

    protected function _delete($id)
    {
        $result = $this->findModel($id)->delete();
		$return = $result ? ['status' => 200, 'message' => 'OK'] : ['status' => 400, 'message' => '删除失败'];
		return $return;
    }

    protected function _view($id)
    {
        return $this->findModel($id);
    }

    protected function findModel($id, $pointUserId = true)
    {
        $modelClass = $this->modelClass;
		$where = ['id' => $id];
		if ($pointUserId) {

		    $identity = $this->_getIdentity();
		    $userId = $identity->id;
			$where = ['id' => $id, 'user_id' => $userId];
		}
		$where = $pintUserId ? ['id' => $id, ['user_id' => $
        if (($model = $modelClass::findOne($where)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }	

    public function actionError()
    {
        return $this->result;
    }

    /**
	 * 注销系统自带的实现方法
	 */
    protected function _unsetActions($actions)
    {
		$elems = ['index', 'update', 'create', 'delete', 'view'];
		foreach ($elems as $elem) {
			if (isset($actions[$elem])) {
				unset($actions[$elem]);
			}
		}
        return $actions;
    }

    protected function _getAuthBehaviors(& $behaviors)
    {
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                QueryParamAuth::className(),
            ],
			'except' => isset($this->authExcept) ? $this->authExcept : [],
			'only' => isset($this->authOnly) ? $this->authOnly : [],
        ];
    }

	protected function _getIdentity()
	{
		$identity = Yii::$app->user->identity;
		return $identity;
	}
}
