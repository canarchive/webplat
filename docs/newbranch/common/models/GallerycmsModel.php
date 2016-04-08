<?php

namespace common\models;

class GallerycmsModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbGallerycms;
    }	

	public function getAttachmentModel()
	{
		return new \gallerycms\models\Attachment();
	}
}
