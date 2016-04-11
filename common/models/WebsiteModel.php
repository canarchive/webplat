<?php

namespace common\models;

class WebsiteModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbWebsite;
    }	

	public function getAttachmentModel()
	{
		return new \website\models\Attachment();
	}
}
