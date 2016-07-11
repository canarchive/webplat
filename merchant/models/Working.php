<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "merchant".
 */
class Working extends MerchantModel
{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%working}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'merchant_id'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'service_id', 'orderlist', 'decoration_price'], 'default', 'value' => '0'],
			[['status'], 'default', 'value' => ''],
			[['owner_name', 'owner_mobile', 'decoration_type', 'community_name', 'house_type', 'style', 'area', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'merchant_id' => '所属公司',
			'service_id' => '装修管家',
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
			'owner_name' => '业主名字',
			'owner_mobile' => '业主电话',
			'community_name' => '小区名字',
			'decoration_type' => '装修类型',
			'decoration_price' => '装修价格',
            'thumb' => '缩略图',
            'picture_living' => '效果图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$status = new WorkingStatus();
		return $status->statusInfos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('merchant', $fields);

		return true;
	}	

	public function getInfos($where)
	{
	}
}
