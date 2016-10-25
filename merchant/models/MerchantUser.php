<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "brand".
 */
class MerchantUser extends MerchantModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant_user}}';
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
            [['name'], 'required'],
            //[['orderlist'], 'integer'],
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
            'name' => '名称',
            'logo' => 'LOGO',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function getMerchantInfos()
	{
		$infos = $this->getMerchantInfos(['is_joined' => 0]);
		return $infos;
	}
}
