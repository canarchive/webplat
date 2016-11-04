<?php

namespace spread\models;

use Yii;
use common\models\SpreadModel;

class Sendmsg extends SpreadModel
{
	public $mobile;
	public $content;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner_house}}';
    }

	public function getTemplateMsg($type)
	{
		$hotline = Yii::$app->params['siteHotline'];
		$datas = [
			'dispatch-owner' => "尊敬的业主###您好，根据您的需求将安排#家装修公司供您选择:###、###、###。如有问题请联系{$hotline}，祝您生活愉快！",
		];
		$return = isset($datas[$type]) ? $datas[$type] : '';
		return $return;
	}
}
