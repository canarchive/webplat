<?php

namespace backend\spread\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;
use spread\models\Sendmsg;

class SendmsgController extends AdminController
{

    public function actionListinfo()
    {
        return $this->render('listinfo');
    }

    public function actionSend()
    {
		$type = Yii::$app->request->get('type');
		$model = new Sendmsg();
		$datas = [
			'type' => $type,
			'model' => $model,
		];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
		return $this->render('send', $datas);
    }
}
