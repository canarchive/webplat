<?php

namespace backend\passport\controllers;

use Yii;
use passport\models\UserPlat;
use passport\models\searchs\UserPlat as UserPlatSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class UserPlatController extends AdminController
{

    /**
     * Lists all UserPlat.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new UserPlatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
                'dataProvider' => $dataProvider,
                'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single UserPlat model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new UserPlat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new UserPlat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserPlat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param  string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', ['model' => $model]);
    }

    /**
     * Deletes an existing UserPlat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param  string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['listinfo']);		
    }

    /**
     * Finds the UserPlat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return UserPlat      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserPlat::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
