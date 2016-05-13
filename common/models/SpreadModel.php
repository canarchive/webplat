<?php

namespace common\models;

class SpreadModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbSpread;
    }	

	protected function getAttachmentModel()
	{
		return new \spread\models\Attachment();
	}

	public function getDecorationInfo()
	{
		$info = \spread\decoration\models\Decoration::findOne($this->decoration_id);

		return $info;
	}
}
