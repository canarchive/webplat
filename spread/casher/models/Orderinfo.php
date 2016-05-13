<?php

namespace spread\casher\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

class Orderinfo extends SpreadModel
{
	public $company_id;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%orderinfo}}';
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
            [['orderid', 'groupon_id', 'mobile'], 'required'],
            [['money', 'status', 'pos_machine_id', 'business_id'], 'default', 'value' => 0],
			[['groupon_name', 'business_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderid' => '订单号',
			'pos_machine_id' => '收银机ID',
			'groupon_id' => '团购会ID',
			'groupon_name' => '团购会名字',
			'business_id' => '商家ID',
			'business_name' => '商家名字',
            'mobile' => '业主手机号',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '测试',
			'1' => '正常',
			'99' => '异常',
		];	
		return $datas;
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

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\spread\casher\models\Company::find()->all(), 'company_id', 'company_name');
		return $infos;
	}

	public function getPosMachineInfos()
	{
		$infos = ArrayHelper::map(\spread\casher\models\PosMachine::find()->all(), 'id', 'name');
		return $infos;
	}
}
