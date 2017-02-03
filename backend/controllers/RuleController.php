<?php

namespace backend\controllers;

use Yii;
use backend\models\RuleManager;
use backend\models\searchs\RuleManager as RuleManagerSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

/**
 * Description of RuleController
 */
class RuleController extends AdminController
{
    public function actionListinfo()
    {
        $searchModel = new RuleManagerSearch();
		return $this->_listinfoInfo($searchModel);
    }

    public function actionView($id)
    {
		return $this->_viewInfo($id);
    }

    public function actionAdd()
    {
		return $this->_addInfo(new RuleManager(null));
    }

    public function actionUpdate($id = 0)
    {
		if (Yii::$app->request->isAjax) {
		    return $this->_updateByAjax();
		}

		return $this->_updateInfo($id, 'update');
    }

    /**
     * Deletes an existing AuthItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param  string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        Yii::$app->authManager->remove($model->item);

        return $this->redirect(['listinfo']);
    }

    /**
     * Finds the AuthItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return AuthItem      the loaded model
     * @throws HttpException if the model cannot be found
     */
	protected function findModel($id, $throwException = true)
    {
        $item = Yii::$app->authManager->getRule($id);
        if ($item) {
            return new RuleManager($item);
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
