<?php

namespace common\models;

class MerchantModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbWebsite;
    }	

	protected function getAttachmentModel()
	{
		return new \merchant\models\Attachment();
	}
}
