<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class Shipping extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shipping}}';
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
            [['name', 'code'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
			[['description'], 'safe'],
          ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '物流ID',
            'code' => '代码',
            'name' => '名称',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '洽谈中',
			'1' => '正常',
		];	
		return $datas;
	}	
}
