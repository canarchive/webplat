<?php

namespace common\models;

use yii\helpers\ArrayHelper;

class PaytradeModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbPaytrade;
    }	

	protected function getAttachmentModel()
	{
		return new \paytrade\models\Attachment();
	}

    protected function _createSingleRandomStr()
    {
        mt_srand((double) microtime() * 1000000);
        return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    }

	public function getGoodsInfos()
	{
		$infos = ArrayHelper::map(\shoot\models\Goods::find()->all(), 'id', 'name');
		return $infos;
	}	
}
