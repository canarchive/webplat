<?php

namespace spread\decoration\models;

use Yii;
use spread\models\Statistic as StatisticBase;

class Statistic extends StatisticBase
{
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'mobile' => '手机号',
			'house_id' => '房屋',
			'created_at' => '派单时间',
			'updated_at' => '更新时间',
			'sendmsg_at' => '通知短信',
			'note' => '备注',
			'status' => '状态',
            'name' => '名称',
		];
	}
}
