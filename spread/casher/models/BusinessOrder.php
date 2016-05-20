<?php

namespace spread\casher\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

class BusinessOrder extends SpreadModel
{
	public $company_id;
	public $import;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%business_order}}';
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
            [['name', 'groupon_id'], 'required'],
            [['status', 'order_prefix', 'order_start', 'order_end'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '商家名称',
			'groupon_id' => '团购会ID',
            'order_prefix' => '四联单前缀',
            'order_start' => '四联单首号',
            'order_end' => '四联单尾号',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
			'status' => '状态',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '隐藏',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\spread\casher\models\Company::find()->all(), 'company_id', 'company_name');
		return $infos;
	}

	public function getGrouponInfos()
	{
		$datas = [];
		if ($this->company_id > 0) {
		    $datas = \spread\casher\models\Groupon::getInfosByCompanyId($this->company_id);
		}

		return $datas;
	}

	public function getGrouponInfo()
	{
		$info = \spread\casher\models\Groupon::findOne($this->groupon_id);

		return $info;
	}	
}
