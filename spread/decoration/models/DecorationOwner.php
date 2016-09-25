<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class DecorationOwner extends SpreadModel
{
	public $user;

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
			'signin_at' => '签到时间',
			'message' => '留言',
			'note' => '备注',
			'keyword' => '搜索关键字',
			'invalid_status' => '无效原因',
			'callback_at' => '第一次回访',
			'callback_again' => '再次回访时间',
			'status' => '状态',
        ];
    }

    public static function addOwner($data)
    {
        $userModel = new \spread\models\User();
        $user = $userModel->getUserInfo($data);
        if (empty($user)) {
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
			'type' => $data['type'],
			//'city' => $data['city'],
			'city_input' => $data['city_input'],
			'area_input' => $data['area_input'],
            'message' => $data['message'],
            'note' => $data['note'],
            'user_id' => $user->id,
        ];

        $newModel = new self($data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }
		$newModel->user = $user;

		return $newModel;
    }

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
			'no_call' => '无效号码',
			'no_answer' => '挂断',
			'no_need' => '没需求',
			'no_time' => '没时间',
			'no_near' => '太远了',
		];

		return $datas;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '未回访',
			'1' => '预约跟进',
			'3' => '已派单',
			'4' => '跟踪中',
			'5' => '量房',
			'6' => '未量房',
			'7' => '签约',
			'8' => '未签约',
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
			$this->update(false);
		}
		return ;
	}
}
