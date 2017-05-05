<?php

namespace common\models;

class GroupbuyModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbUltrax;
    }	
}
