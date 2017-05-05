<?php

namespace spread\groupon\models;

use common\models\SpreadModel;

class GrouponOwner extends SpreadModel
{
	public $owner;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%groupon_owner}}';
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
			'groupon_id' => '团购会ID',
			'from_type' => '来源',
			'signup_at' => '报名时间',
			'signup_ip' => '报名IP',
			'signup_city' => '报名城市',
			'signup_channel' => '报名渠道',
			'signin_at' => '签到时间',
			'message' => '留言',
			'note' => '备注',
			'keyword' => '搜索关键字',
			'valid_status' => '是否有效',
			'callback_at' => '第一次回访',
			'callback_again' => '是否再次回访',
			'status' => '状态',
        ];
    }

    public static function addOwner($data)
    {
        $ownerModel = new Owner();
        $owner = $ownerModel->getOwnerInfo($data);
        if (empty($owner)) {
            return false;
        }

        $data = [
            'signup_at' => time(),
            'groupon_id' => $data['info_id'],
            'signup_ip' => \Yii::$app->getRequest()->getIP(),
            'mobile' => $data['mobile'],
            'name' => $data['name'],
			'from_type' => $data['from_type'],
            'message' => $data['message'],
            'user_id' => $owner->user_id,
        ];

        $newModel = new self($data);
        $insert = $newModel->insert(true, $data);
        if (!$insert) {
            return false;
        }
		$newModel->owner = $owner;

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

    protected function sendSms($data)
    {
        $mobile = $data['mobile'];
        $content = '';
        if (isset($data['password']) && !empty($data['password'])) {
            $content = "【一起装修网】尊敬的业主您好！您已经成功注册为认证业主，您的用户名是：{$data['mobile']},密码：{$data['password']}";
        }
        $message = $data['isNew'] ? $data['grouponInfo']['groupon_sms_body_new_owner'] : $data['grouponInfo']['groupon_sms_body_old_owner'];
        $message = empty($content) ? $message : str_replace('【一起装修网】', '', $message);
        $content .= " $message";

        \groupbuy\components\Sms::sendSms($mobile, $content);
        
        return true;
    }

    protected function sendSmsEmployee($data, $employee)
    {
        $mobile = $employee['mobile'];
        $content = "【一起装修网】业主报名：{$data['owner_name']}报名参加{$data['grouponInfo']['groupon_name']}，电话：{$data['mobile']}，请立即回访";

        \groupbuy\components\Sms::sendSms($mobile, $content, true);
        
        return true;
    }

	public function getMessageInfos($id)
	{
		$where = ['and', 'mobile!=""', 'owner_name!=""', 'groupon_id=' . $id];
		$orderBy = ['groupon_owner_id' => SORT_DESC];
		$owners = $this->find()->where($where)->orderBy($orderBy)->limit(20)->asArray()->all();

		foreach ($owners as $key => $owner) {
			if (strpos($owner['owner_name'], 'ceshi') !== false || strpos($owner['owner_name'], '测试') !== false) {
				unset($owners[$key]);
			}
		}

		$count = count($owners);
		if ($count < 10) {
			$defaultOwners = $this->defaultMessageInfos(10 - $count);
		    $owners = array_merge($owners, $defaultOwners);
		}

		return $owners;
	}

	protected function defaultMessageInfos($count)
	{

		return array_slice($default, 0, $count);
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
}
