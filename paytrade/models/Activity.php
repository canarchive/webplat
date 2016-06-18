<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class Activity extends PaytradeModel
{
	private $alivedInfos = null;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%activity}}';
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
            [['name', 'code', 'money'], 'required'],
			[['thumb', 'goods_number', 'money_top', 'money_bottom', 'discount', 'orderlist', 'status', 'start_at', 'end_at'], 'default', 'value' => 0],
			[['description'], 'safe'],
		];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '活动ID',
            'name' => '名称',
            'code' => '代码',
            'money' => '优惠金额',
            'discount' => '折扣',
            'money_bottom' => '活动上限金额',
            'money_top' => '活动上限金额',
            'goods_number' => '商品数量',
            'thumb' => '缩略图',
            'orderlist' => '排序',
            'description' => '描述',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'started_at' => '开始时间',
            'ended_at' => '结束时间',
            'status' => '状态',
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

	public function getInfoByGoods($goodsId)
	{
		$alivedInfos = $this->_getAlived();
		if (empty($alivedInfos)) {
			return null;
		}

		foreach ($alivedInfos as $info) {
		}

		return null;
	}

	protected function _getAlived()
	{
		if ($this->alivedInfos !== null) {
			return $this->alivedInfos;
		}

		$currentTime = \Yii::$app->params['currentTime'];
		$where = ['and', 'status = 1', "start_at <= {$currentTime}", "end_at > {$currentTime}"]; 
		$infos = $this->find()->where($where)->all();
		$this->alivedInfos = $infos;

		return $infos;
	}
}
