<?php

namespace spread\models\statistic;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

class AbstractStatistic extends SpreadModel
{
	public $datetime_type;
	public $channel_type;
	public $city_code_type;
	public $service_id_type;
	public $customer_id_type;
	public $channel_id_type;
	public $from_type_type;

    public static function getDb()
    {
        return \Yii::$app->dbStatistic;
    }	

	public function recordData($data, $type)
	{
		$validTypes = ['visit', 'signup'];
		if (!in_array($type, $this->validTypes)) {
			return false;
		}

		$newData = [];
		foreach ($this->fieldInfos as $field) {
			$newData[$field] = isset($data[$field]) ? $data[$field] : '';
		}
		$mark = $this->getMark($newData);
		$info = self::findOne(['mark' => $mark]);
		$newData['mark'] = $mark;

		return $this->recordDetail($newData, $info, $type);
	}

	protected function getMark($data)
	{
		return md5(implode($data, ''));
	}

    public function getDatetimeColumns()
    {
        $columns = [];
        switch ($this->datetime_type) {
        case 'month':
        	$columns = ['created_month'];
        	break;
        case 'day':
        	$columns = ['created_month', 'created_day'];
        	break;
        case 'hour':
        	$columns = ['created_month', 'created_day', 'created_hour'];
        	break;
        case 'week':
        	$columns = ['created_month', 'created_week'];
        	break;
        case 'weekday':
        	$columns = ['created_month', 'created_day', 'created_weekday'];
        	break;
        }

		return $columns;
	}

	public function getReportBaseColumns()
	{
		$base = isset($this->is_report_service) ? [] : ['visit_num', 'visit_num_real'];
        $columns = array_merge($base, [
        	'visit_num_success',
        	'new_num',
        	'good_num',
        	'follow_num',
        	'follownew_num',
        	'new_num',
        	'bad_num',
        	'weigh_num',
        	'order_num',
        ]);

		return $columns;
	}

	public function getChannelColumns()
	{
		switch ($this->channel_type) {
		case 'channel_big':
			return ['channel_big'];
		case 'channel':
			return ['channel_big', 'channel'];
		default:
			return [];
		}
	}

	public function getKeywordColumns()
	{
		switch ($this->channel_type) {
		case 'channel_big':
			return ['channel_big'];
		case 'channel':
			return ['channel_big', 'channel'];
		default:
			return [];
		}
	}

	public function columnCustomer($type)
	{
		$fields = $type ? ['customer_id'] : [];
		return $fields;
	}

	public function columnService($type)
	{
		$fields = $type ? ['service_id'] : [];
		return $fields;
	}

	public function columnCityCode($type)
	{
		$fields = $type ? ['city_code'] : [];
		return $fields;
	}
}
