<?php

namespace merchant\house\models;

use common\models\MerchantModel;

class MerchantNote extends MerchantModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant_note}}';
    }

    public function rules()
    {
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'owner_merchant_id' => '派单ID',
            'mobile' => '手机号',
            'service_id' => '客服ID',
            'content' => '商家留言',
            'created_at' => '留言时间',
            'reply' => '客服答复',
            'reply_at' => '答复时间',
        ];
    }

	public function getService()
	{
		$info = CustomService::findOne($this->service_id);

		return $info;
	}
}
