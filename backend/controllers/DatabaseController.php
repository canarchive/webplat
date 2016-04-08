<?php

namespace backend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use backend\components\AdminController;

class DatabaseController extends AdminController
{
    public function actionListinfo()
    {
        $keyCache = 'backend_database';
        $infos = Yii::$app->cache->get($keyCache);
        if ($infos === false) {
            $infos = [];
            $databases = Yii::$app->params['databases'];
            foreach ($databases as $key => $value) {
                $db = Yii::$app->$key;
                $tables = $this->getTables($db, $value);
                $infos[$value] = $tables;
            }
            Yii::$app->cache->set($keyCache, $infos);
		}
        return $this->render('listinfo', ['infos' => $infos]);
    }

    protected function getTables($db, $database)
    {
        $info = [];

        $sql = "SELECT * FROM `information_schema`.`tables` WHERE `TABLE_SCHEMA` = '{$database}'";
        $datas = $db->createCommand($sql)->queryAll();
        foreach ($datas as $data) {
			$tableName = $data['TABLE_NAME'];
            $info[$tableName]['comment'] = $data['TABLE_COMMENT'];
			$info[$tableName]['fields'] = $this->getFields($db, $database, $tableName);
        }

        return $info;
    }    

    protected function getFields($db, $database, $table)
    {
        $info = [];

        $sql = "SELECT * FROM `information_schema`.`columns` WHERE `TABLE_SCHEMA` = '{$database}' AND `TABLE_NAME` = '{$table}'";
        $datas = $db->createCommand($sql)->queryAll();
        foreach ($datas as $data) {
            $field = $data['COLUMN_NAME'];
            $comment = empty($data['COLUMN_COMMENT']) ? $field : $data['COLUMN_COMMENT'];
            $info[$data['COLUMN_NAME']] = $data['COLUMN_COMMENT'];
        }
    
        return $info;
    }    
}
