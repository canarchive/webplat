<?php

namespace spread\models\statistic;

class ReportService extends AbstractStatistic
{
    public static function tableName()
    {
        return '{{%report_service_origin}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'keyword' => '关键字',
			'keyword_search' => '搜索关键字',
			'channel_big' => '一级渠道',
			'channel' => '渠道',
			'day' => '日期',
			'hour' => '小时',
			'week' => '周',
			'from_type' => '客户端',
			'visit_num' => '访问数',
			'visit_num_success' => '转化数',
        ];
    }

	public function recordDetail($data, $info, $type)
	{
		$data['customer_id'] = intval($data['customer_id']);
		if (empty($info)) {
			$data['visit_num_success'] = 1;
			$info = new self($data);
			$info->insert();
			return ;
		}

		$updateData = ['visit_num_success' => 1];
		$info->updateCounters($updateData);

		return ;
    }	

	public function getValidTypes()
	{
		return ['signup'];
	}

	public function getFieldInfos()
	{
		$fields = ['city_code', 'customer_id', 'service_id', 'from_type', 'created_month', 'created_week', 'created_weekday', 'created_day', 'channel_big', 'channel'];
		return $fields;
	}
}
