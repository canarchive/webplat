<?php

namespace spread\decoration\models;

use common\models\SpreadModel;

class DecorationOwner extends SpreadModel
{
	public $owner;
	public $type;

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
			'valid_status' => '是否有效',
			'callback_at' => '第一次回访',
			'callback_again' => '是否再次回访',
			'status' => '状态',
        ];
    }

    public static function addOwner($data)
    {
        $ownerModel = new \spread\groupon\models\Owner();
        $owner = $ownerModel->getOwnerInfo($data);
        if (empty($owner)) {
            return false;
        }

        $data = [
            'signup_at' => time(),
			'decoration_id' => $data['info_id'],
            'type' => $data['type'],
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
