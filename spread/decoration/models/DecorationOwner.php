<?php

namespace spread\decoration\models;

<<<<<<< HEAD
use common\models\SpreadModel;

class DecorationOwner extends SpreadModel
{
	public $owner;
	public $type;
=======
use Yii;
use yii\helpers\ArrayHelper;
use common\models\SpreadModel;
use spread\models\CustomService;
use merchant\house\models\Company;

class DecorationOwner extends SpreadModel
{
	public $user;
    public $customService;
>>>>>>> web-house

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
<<<<<<< HEAD
			'use_id' => '用户ID',
			'mobile' => '手机号',
			'name' => '名字',
			'type' => '家装类型',
=======
			'city_code' => '城市代码',
			'service_id' => '客服',
			'mobile' => '手机号',
			'name' => '名字',
>>>>>>> web-house
			'from_type' => '来源',
			'signup_at' => '报名时间',
			'signup_ip' => '报名IP',
			'signup_city' => '报名城市',
<<<<<<< HEAD
			'signup_channel' => '报名渠道',
			'signin_at' => '签到时间',
			'message' => '留言',
			'note' => '备注',
			'keyword' => '搜索关键字',
			'valid_status' => '是否有效',
			'callback_at' => '第一次回访',
			'callback_again' => '是否再次回访',
=======
			'channel_big' => '一级渠道',
			'channel' => '报名渠道',
			'message' => '留言',
			'note' => '备注',
			'keyword' => '关键字',
			'keyword_search' => '搜索关键字',
			'invalid_status' => '无效原因',
			'callback_at' => '第一次回访',
			'callback_again' => '再次回访时间',
>>>>>>> web-house
			'status' => '状态',
        ];
    }

<<<<<<< HEAD
    public static function addOwner($data)
    {
        $ownerModel = new \spread\groupon\models\Owner();
        $owner = $ownerModel->getOwnerInfo($data);
        if (empty($owner)) {
            return false;
        }

        $ip = \Yii::$app->getRequest()->getIP();
		$city = \common\components\IP::find($ip);
		$city = is_array($city) ? implode('-', $city) : $city;
        $data = [
            'signup_at' => time(),
			'decoration_id' => $data['info_id'],
            'type' => $data['type'],
            'signup_ip' => $ip,
            'signup_city' => $city,
            'mobile' => $data['mobile'],
            'name' => $data['name'],
			'from_type' => $data['from_type'],
            'message' => $data['message'],
            'note' => $data['note'],
            'user_id' => $owner->user_id,
        ];
=======
    public static function addOwner($data, $serviceId = null)
    {
		$customService = !is_null($serviceId) ? CustomService::findOne($serviceId) : null;
		$customService = empty($customService) ? CustomService::getServiceInfo() : $customService;
        $ip = \Yii::$app->getRequest()->getIP();
		$city = \common\components\IP::find($ip);
		$city = is_array($city) ? implode('-', $city) : $city;
		$time = Yii::$app->params['currentTime'];
        $data = array_merge($data, [
            'signup_at' => $time,
            'signup_at_first' => $time,
            'created_month' => date('Ym', $time),
            'created_day' => date('Ymd', $time),
            'created_hour' => date('H', $time),
            'created_week' => date('W', $time),
            'created_weekday' => date('N', $time),
            'signup_num' => 1,
            'signup_ip' => $ip,
            'signup_city' => $city,
			'service_id' => $customService->id,
        ]);
>>>>>>> web-house

        $newModel = new self($data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }
<<<<<<< HEAD
		$newModel->owner = $owner;
=======
		$newModel->customService = $customService;
>>>>>>> web-house

		return $newModel;
    }

<<<<<<< HEAD
	public function xunkeOperation($data)
	{
		$info = self::findOne(['mobile' => $data['mobile']]);
		if (!empty($info)) {
			return false;
		}

        $newModel = new self($data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }

		return true;
	}

=======
>>>>>>> web-house
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

<<<<<<< HEAD
	public function synapp()
	{
error_reporting(0);
		$infos = self::find()->where(['synapp_num' => 0])->limit(50)->all();
		//$infos = self::find()->where(['synapp_num' => 1])->limit(50)->all();
		//$appApi = 'http://appdev.17house.com/svc/payment-facade/housekeepAdmin/addHousekeepOrder?';
		$appApi = 'http://hui.17house.com/svc/payment-facade/housekeepAdmin/addHousekeepOrder?';
                $i = 0;
		$cityInfos = [
			1 => 3,
			2 => 40,
			3 => 3,
			4 => 60,
			5 => 70,
		];
		foreach ((array) $infos as $info) {
		    $callback = \spread\groupon\models\CallbackLog::find()->select(['created_at'])->where(['mobile' => $info['mobile']])->orderBy(['created_at' => SORT_DESC])->one();
			$lastVisitTime = isset($callback['created_at']) ? $callback['created_at'] : 0;
			$cancelStatus = $info['valid_status'] == '' || $info['valid_status'] == 'ok' ? '' : 1;
			$cancelMsg = $cancelStatus == 1 ? (isset($this->validStatusInfos[$info['valid_status']]) ? $this->validStatusInfos[$info['valid_status']] : $info['valid_status']) : '';
			$frameworkId = 
			$params = [
				'name' => empty($info['name']) ? '未填写' : $info['name'],
				'mobile' => $info['mobile'],
				'frameworkId' => isset($cityInfos[$info['decoration_id']]) ? $cityInfos[$info['decoration_id']] : 3, 
				'channelFirst' => 'SEM',
				'channelSecond' => $info['signup_channel'],
				'channelKey' => $info['keyword'],
				'enrollTime' => $info['signup_at'] . '000',
				'lastVisitTime' => $lastVisitTime . '000',
				'cancelStatus' => $cancelStatus,
				'cancelMsg' => $cancelMsg,
			];
                    if (empty($info['signup_at'])) {
                        unset($params['enrollTime']);
                    }
                    if (empty($lastVisitTime)) {
                        unset($params['lastVisitTime']);
                    }
print_r($params);
		    $queryStr = http_build_query($params);
			$url = $appApi . $queryStr;
			echo $url;
			//$result = '{"baseOutput":{"code":0,"message":"success"},"data":""}';
			$result = file_get_contents($url);
		    $result = json_decode($result,true);
			$code = isset($result['baseOutput']['code']) ? $result['baseOutput']['code'] : '';
			if ($code === 0 || $code === 5) {
				$info->synapp_at = \Yii::$app->params['currentTime'];
			    $info->update(false);	
		        $info->updateCounters(['synapp_num' => 1]);
			}
                        $i++;
		}
                echo date('Y-m-d H:i:s') . '-' . $i . "\n";
		//print_r($infos);
	}

	public function getValidStatusInfos()
	{
		$datas = [
			'' => '未知',
			'ok' => '有效',
			'no_call' => '无效号码',
			'no_answer' => '挂断',
			'no_need' => '没需求',
			'no_time' => '没时间',
			'no_near' => '太远了',
		];

=======
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
>>>>>>> web-house
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
<<<<<<< HEAD
=======

	public function getSignupChannelInfos()
	{
		$datas = [
			'semthird' => '第三方SEM',
			'semspider' => 'SEM抓取',
		];
		return $datas;
	}

	protected function getCompanyInfos()
	{
		$infos = ArrayHelper::map(Company::find()->select('code_short, name')->where(['status' => 2])->all(), 'code_short', 'name');
		return $infos;
	}

	public function updateAfterInsert($conversionInfo)
	{
		if (!empty($conversionInfo['channel']) || !empty($conversionInfo['keyword'] || !empty($conversionInfo['keywork_search']))) {
			$this->channel_big = $conversionInfo['channel_big'];
			$this->channel = $conversionInfo['channel'];
			$this->keyword = $conversionInfo['keyword'];
			$this->keyword_search = isset($conversionInfo['keyword_search']) ? $conversionInfo['keyword_search'] : '';
			$this->city_code = $conversionInfo['city_code'];
		}
		//print_r($this->toArray());exit();
		$this->statisticRecord($this->toArray(), 'signup');
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
			'city_code' => $this->city_code,
			'position' => '',
			//'channel_big' => 'seo',
			'note' => $this->note,
			'message' => '',
			'city_input' => '',
			'form_type' => '',
			'from_type' => 'pc',
			'area_input' => 0,
			'channel' => $this->channel,
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
>>>>>>> web-house
}
