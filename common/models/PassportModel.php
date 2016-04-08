<?php

namespace common\models;

class PassportModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->db;
    }	
}
