<?php

namespace spread\groupon\models;

use common\models\SpreadModel;

class CallbackLog extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%callback}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '统计信息ID',
            'mobile' => '手机号',
            'service_id' => '客服ID',
            'content' => '回访纪要',
            'created_at' => '创建时间',
        ];
    }

	public function getService()
	{
		$info = CustomService::findOne($this->service_id);

		return $info;
	}
}
