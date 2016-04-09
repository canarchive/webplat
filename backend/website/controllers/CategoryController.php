<?php

namespace backend\website\controllers;

use Yii;
use website\models\Category;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use common\helpers\Tree;

class CategoryController extends AdminController
{
    public function behaviors()
    {
        return [];
    }	

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionListinfo()
    {
		$action = \Yii::$app->request->get('action');
		if (in_array($action, array('brandInfos'))) {
			$data = $this->$action();
			return $data;
		}		

		$model = new Category();
		$infos = $model->getFormatedInfos();

        return $this->render('listinfo', [
			'model' => $model,
            'infos' => $infos,
        ]);
    }

	protected function brandInfos()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		$categoryId = \Yii::$app->request->get('category_id');
		$datas = \website\models\Brand::getInfosByCategoryId($categoryId);

		return $datas;
	}

    /**
     * Displays a single AuthItem model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        
        return $this->render('view', ['model' => $model]);
	}

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new Category;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['listinfo']);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['listinfo', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param  integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['listinfo']);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
		} 

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
