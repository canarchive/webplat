<?php

namespace paytrade\models;

use common\models\PaytradeModel;

class CouponSort extends PaytradeModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%coupon_sort}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'money'], 'required'],
			[['orderlist', 'status', 'start_at', 'end_at'], 'default', 'value' => 0],
			[['description'], 'safe'],
		];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '优惠券分类ID',
			'code' => '代码',
            'name' => '名称',
            'orderlist' => '排序',
            'money' => '代金金额',
            'status' => '状态',
            'description' => '描述',
            'start_time' => '开始时间',
            'end_time' => '结束时间',
            'created_at' => '创建时间',
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
