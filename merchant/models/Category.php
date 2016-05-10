<?php

namespace merchant\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "brand".
 */
class Category extends MerchantModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            ['name', 'unique', 'targetClass' => '\merchant\models\Category', 'message' => 'This name has already been taken.'],
            [['orderlist'], 'integer'],
            [['orderlist'], 'default', 'value' => 0],
			[['status', 'description'], 'safe'],
        ];
    }

	public function getInfos()
	{
		$infos = $this->find()->select(['id', 'name', 'brief'])->indexBy('id')->asArray()->all();

		return $infos;
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
}
