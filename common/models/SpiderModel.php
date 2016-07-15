<?php

namespace common\models;

class SpiderModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbSpider;
    }	

	public function getAttachmentModel()
	{
		return new \spider\models\Attachment();
	}
}
