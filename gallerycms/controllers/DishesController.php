<?php

namespace gallerycms\controllers;

use gallerycms\components\Controller as GallerycmsController;

class DishesController extends GallerycmsController
{
		public $enableCsrfValidation = false;

	public function init()
	{
		parent::init();
		\Yii::$app->viewPath = '@gallerycms/views/dishes';
	}

    public function actionIndex()
    {
		$view = $this->isMobile ? '//h5/index' : '//pc/index';
        return $this->render($view);
    }

	public function actionGuestbook()
	{
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$model = new \gallerycms\models\Guestbook();

        if ($model->load(\Yii::$app->request->post(), '') && $model->save()) {
			return ['status' => 200, 'message' => '留言成功，感谢您的参与！'];
        }
		return ['status' => 400, 'message' => '提交失败，请重新提交！'];
	}

	public function actionGuestbookForm()
	{
		$model = new \gallerycms\models\Guestbook();
		$params = [
			'name' => 'text_trueName',
			'mobile' => 'text_telephone',
			'content' => 'text_content',
		];
		foreach ($params as $field => $param) {
			if (isset($_POST[$param])) {
				$_POST[$field] = $_POST[$param];
			}
		}
        if ($model->load(\Yii::$app->request->post(), '') && $model->save()) {
			return $this->render('//pc/guestbook-result', ['message' => '留言成功']);
        }

		return $this->render('//pc/guestbook');
	}
}
