<?php

namespace backend\merchant\controllers;

use Yii;
use merchant\models\MerchantContact;
use merchant\models\searchs\MerchantContact as MerchantContactSearch;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class MerchantContactController extends AdminController
{

    /**
     * Lists all MerchantContact.
     * @return mixed
     */
    public function actionListinfo()
    {
        $searchModel = new MerchantContactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('listinfo', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single MerchantContact model.
     * @param  string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * Creates a new MerchantContact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
        $model = new MerchantContact();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MerchantContact model.
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

        return $this->render('update', ['model' => $model,]);
    }

    /**
     * Deletes an existing MerchantContact model.
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
     * Finds the MerchantContact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param  string        $id
     * @return MerchantContact      the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MerchantContact::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');		
    }
}
