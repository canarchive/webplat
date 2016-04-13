<?php

namespace spread\groupon\models;

use common\models\SpreadModel;

class Owner extends SpreadModel
{
	public $userInfo;
	public $customService;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
		    'id' => '业主ID',
            'user_id' => '用户ID',
            'mobile' => '手机号',
            'sort' => '业主类型',
            'name' => '名字',
            'gender' => '性别',
            'birthday' => '生日',
            'telphone' => '电话',
            'email' => 'EMAIL',
            'qq' => 'QQ',
            'company_id' => '公司ID',
            'service_id' => '客服ID',
            'description' => '简介',
            'callback_overtime' => '回访是否超时[0:未超时1:超时]',
            'callback_again' => '是否再次回访 1：本不再回访 2：再次回访',
            'groupon_id_first' => '第一次团购会ID',
            'signup_num' => '报名次数',
            'signin_num' => '到场次数',
            'order_num' => '订单数',
            'created_at' => '注册时间',
            'updated_at' => '注册时间'	
        ];
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
	
	public function getOwnerInfo($data)
	{
		//$data['mobile'] = 13222222;
		$info = $this->findOne(['mobile' => $data['mobile']]);

		$isNew = false;
		if (!empty($info)) {
			$info->userInfo = false;
			return $info;
		}

        $userInfo = $this->getUserInfo($data);
        if (empty($userInfo)) {
            return false;
        }

		$customService = CustomService::getServiceInfo();
        $data = [
            'mobile' => $data['mobile'],
            'name' => $data['name'],
            'groupon_id_first' => $data['info_id'],
            'user_id' => $userInfo['user_id'],
			'service_id' => $customService->id,
			'created_at' => time(),
			'updated_at' => time(),
        ];
        $newModel = new self($data);
        $newModel->insert(true, $data);
		$newModel->userInfo = $userInfo;
		$customService->distributed_at = \Yii::$app->params['currentTime'];
		$customService->update();
        $customService->updateCounters(['serviced_num' => 1]);
		$newModel->customService = $customService;

		return $newModel;
	}

	protected function getUserInfo($data)
	{
		$mobile = $data['mobile'];
		$user = \passport\models\User::findOne(['mobile' => $mobile]);
		if (!empty($user)) {
			return [
				'user_id' => $user->id,
				'password' => '',
				'is_new' => false,
			];
		}

		$userModel = new \passport\models\User();
		$userData = [
			'mobile' => $data['mobile'],
			'password' => \Yii::$app->security->generateRandomString(6),
			'from_type' => 'groupon',
		];
		$user = $userModel->registerUser($userData);

		if (empty($user)) {
			return false;
		}

		return [
			'user_id' => $user->id,
			'password' => $userData['password'],
			'is_new' => true,
		];
	}

	public function getSortInfos()
	{
		$datas = [
			'level1' => '挑剔业主',
			'level2' => 'VIP业主',
		];

		return $datas;
	}

	public function getGenderInfos()
	{
		return \Yii::$app->params['genderInfos'];
	}
}
