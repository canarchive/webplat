<?php

namespace merchant\models;

use common\models\MerchantModel;

/**
 * This is the model class for table "merchant".
 */
class Company extends MerchantModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company}}';
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
            ['code', 'required'],
            ['code', 'unique', 'targetClass' => '\merchant\models\Company', 'message' => 'This code has already been taken.'],
            [['status'], 'default', 'value' => 0],
			[['logo'], 'integer'],
			[['logo'], 'default', 'value' => '0'],
			[['hotline', 'postcode', 'address', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '公司ID',
			'code' => '代码',
            'name' => '名称',
            'logo' => 'LOGO',
			'hotline' => '电话',
			'postcode' => '邮编',
			'address' => '地址',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}	
}
