<?php

namespace common\components;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * Then you can show your file in url `Url::to(['/file','id'=>$file_id])`,
 * and download file in url `Url::to(['/file/download','id'=>$file_id])`
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class UploadController extends \yii\web\Controller
{
    public $defaultAction = 'show';

	public function behaviors()
    {
        header("Access-Control-Allow-Origin:*");
        return ArrayHelper::merge([
            [
                'class' => Cors::className(),
                'cors' => [
                    'Origin' => [\Yii::getAlias('@backendurl')],
                    'Access-Control-Request-Method' => ['GET', 'HEAD', 'POST', 'OPTIONS'],
                ],
            ],
        ], parent::behaviors());
    }

    public function actionIndex()
    {
		error_reporting(0);//E_ALL);
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$table = \Yii::$app->request->get('table');
		$field = \Yii::$app->request->get('field');
		$id = \Yii::$app->request->get('id', 0);
		if (empty($table) || empty($field)) {
			return []; 
		}

		//$_FILES = \Yii::$app->params['uploadTest'];
		$params = [
			'info_table' => $table, 
			'info_field' => $field, 
			'info_id' => $id,
		];
		$action = \Yii::$app->request->get('action');
		if ($action == 'show') {
			return $this->getInfos($params);
		}

		$model =  $this->getAttachment($params);
        $files = UploadedFile::getInstances($model, 'files');
        $model->file = isset($files[0]) ? $files[0] : null;
        if ($model->save()) {
			$baseName = substr($model->name, 0, strrpos($model->name, '.'));
			$data = [
				'status' => '200200',
				'id' => $model->id,
				'name' => $model->name,
				'size' => $model->size,
				'filename' => $baseName,
				'orderlist' => 0,
				'description' => $baseName,
				'url' => $model->getUrl(),
		    ];
		} else {
			$message = array_pop($model->getFirstErrors());
			$data = [
				'status' => '400400',
				'message' => $message,
			];
		}
		$data = ['files' => [$data]];
		return $data;
	}

	protected function getInfos($params)
	{
		if (empty($params['info_id'])) {
			return [];
		}

		$condition = [
			'info_table' => $params['info_table'],
			'info_field' => $params['info_field'],
			'info_id' => $params['info_id'],
			'in_use' => 1,
		];
		$infos = $this->getAttachment()->find()->where($condition)->all();
		$datas = [];
		foreach ($infos as $key => $info) {
			$url = $info->getUrl();
			$data = $info->toArray();
			$data['url'] = $url;
			$datas[] = $data;
		}
		return ['files' => $datas];
	}

    /**
     * Show file
     * @param integer $id
     */
    public function actionShow($id)
    {
        $model = $this->findModel($id);
        $response = Yii::$app->getResponse();
        return $response->sendFile($model->filename, $model->name, [
                'mimeType' => $model->type,
                'fileSize' => $model->size,
                'inline' => true
        ]);
    }

    /**
     * Download file
     * @param integer $id
     * @param mixed $inline
     */
    public function actionDownload($id, $inline = false)
    {
        $model = $this->findModel($id);
        $response = Yii::$app->getResponse();
        return $response->sendFile($model->filename, $model->name, [
                'mimeType' => $model->type,
                'fileSize' => $model->size,
                'inline' => $inline
        ]);
    }

    /**
     * Get model
     * @param integer $id
     * @return FileModel
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = FileModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
