<?php

namespace common\models;

use spread\models\Attachment as AttachmentSpread;

class SpreadModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbSpread;
    }	

	protected function getAttachmentModel()
	{
		return new AttachmentSpread();
	}
}
