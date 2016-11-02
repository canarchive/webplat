<?php

namespace spread\decoration\models;

use Yii;
use common\models\SpreadModel;
use spread\models\CustomService;

class DecorationOwner extends SpreadModel
{
	public $user;
    public $customService;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%decoration_owner}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'use_id' => '用户ID',
			'mobile' => '手机号',
			'name' => '名字',
			'type' => '家装类型',
			'from_type' => '来源',
			'signup_at' => '报名时间',
			'signup_ip' => '报名IP',
			'signup_city' => '报名城市',
			'signup_channel' => '报名渠道',
			'message' => '留言',
			'note' => '备注',
			'keyword' => '搜索关键字',
			'invalid_status' => '无效原因',
			'callback_at' => '第一次回访',
			'callback_again' => '再次回访时间',
			'status' => '状态',
        ];
    }

    public static function addOwner($data, $serviceId = null)
    {
		$customService = !is_null($serviceId) ? CustomService::findOne($serviceId) : null;
		$customService = empty($customService) ? CustomService::getServiceInfo() : $customService;
        $ip = \Yii::$app->getRequest()->getIP();
		$city = \common\components\IP::find($ip);
		$city = is_array($city) ? implode('-', $city) : $city;
        $data = array_merge($data, [
            'signup_at' => Yii::$app->params['currentTime'],
            'signup_at_first' => Yii::$app->params['currentTime'],
            'signup_num' => 1,
            'signup_ip' => $ip,
            'signup_city' => $city,
			'service_id' => $customService->id,
        ]);

        $newModel = new self($data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }
		$newModel->customService = $customService;

		return $newModel;
    }

    public function insert($runValidation = true, $attributes = null)
    {
        if (($primaryKeys = static::getDb()->schema->insert($this->tableName(), $attributes)) === false) {
            return false;
        }
        foreach ($primaryKeys as $name => $value) {
            $id = $this->getTableSchema()->columns[$name]->phpTypecast($value);
            $this->setAttribute($name, $id);
            $values[$name] = $id;
        }

        $changedAttributes = array_fill_keys(array_keys($values), null);
        $this->setOldAttributes($values);
        return true;
    }        

	public function getInvalidStatusInfos()
	{
		$datas = [
            '' => '未知',
            'ok' => '有效',
            'no_call' => '空号',
            'double' => '重复报名',
            'noneed' => '无房',
            'booked' => '已定好',
            'no_service' => '地区未开通',
            'no_near' => '郊区',
		];

		return $datas;
	}

	public function getStatusInfos()
	{
		$datas = [
            '0' => '未回访',
            '1' => '跟进',
            '2' => '期房跟进',
            '3' => '已派单',
            '4' => '废单',
		];
		return $datas;
	}

	public function getCallbackAgainInfos()
	{
		$datas = [
			0 => '',
			1 => '再次回访',
		];

		return $datas;
	}

	public function updateAfterInsert($conversionInfo)
	{
		if (!empty($conversionInfo['channel']) || !empty($conversionInfo['keyword'])) {
			$this->signup_channel = $conversionInfo['channel'];
			$this->keyword = $conversionInfo['keyword'];
			$this->city_code = $conversionInfo['city_code'];
		}
		$this->update(false);
		return ;
	}

	public function addHandle()
	{
		$validator = new \common\validators\MobileValidator();
		$valid =  $validator->validate($this->mobile);
		if (empty($valid)) {
            $this->addError('mobile', '手机号有误');
			return false;
		}

		$exist = self::findOne(['mobile' => $this->mobile]);
		if ($exist) {
            $this->addError('mobile', '手机号已存在');
			return false;
		}

		$data = [
			'mobile' => $this->mobile,
			'name' => $this->name,
			'position' => '',
			'note' => $this->note,
			'message' => '',
			'city_input' => '',
			'form_type' => '',
			'from_type' => 'pc',
			'area_input' => 0,
			'signup_channel' => $this->signup_channel,
		];
		$serviceId = $this->service_id ? $this->service_id : null;
		$decorationOwner = $this->addOwner($data, $serviceId);
		$conversionModel = new \spread\models\Conversion();
		$conversionInfo = $conversionModel->successLog($data);

		return $decorationOwner;
	}

	public function dealService()
	{
		$serviceModel = isset($this->customService) ? $this->customService : CustomService::findOne($this->service_id);

		$serviceModel->distributed_at = Yii::$app->params['currentTime'];
		$serviceModel->update(false);
		$serviceModel->updateCounters(['serviced_times' => 1]);
		
		$serviceModel->updateServiceInfo();
		return $serviceModel;
	}
}
