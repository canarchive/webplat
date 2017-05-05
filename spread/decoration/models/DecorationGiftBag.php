<?php

namespace spread\decoration\models;

use yii\helpers\ArrayHelper;
use common\models\SpreadModel;

class DecorationGiftBag extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decoration_gift_bag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['decoration_id', 'gift_bag_id'], 'required'],
            [['orderlist'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '品牌ID',
			'decoration_id' => '家装活动ID',
			'gift_bag_id' => '礼包ID',
            'orderlist' => '排序',
        ];
    }

	public function getDecorationInfos()
	{
		$infos = ArrayHelper::map(\spread\decoration\models\Decoration::find()->all(), 'id', 'name');
		return $infos;
	}	

	public function getGiftBagInfos()
	{
		$infos = ArrayHelper::map(\spread\decoration\models\GiftBag::find()->all(), 'id', 'name');
		return $infos;
	}	
}
