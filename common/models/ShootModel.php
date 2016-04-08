<?php

namespace common\models;

class ShootModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbShoot;
    }	

	public function getAttachmentModel()
	{
		return new \shoot\models\Attachment();
	}
}
