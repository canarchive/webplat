<?php

namespace merchant\house\models;

use common\models\MerchantModel;
use spread\decoration\models\OwnerDispatch;

class MerchantNote extends MerchantModel
{
	private $_mobile;
	private $_merchantInfo;

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

	public function getMobile()
	{
		if (!is_null($this->_mobile)) {
			return $this->_mobile;
		}

		$this->getDetailInfo();
		return $this->_mobile;
	}
		
	public function getDetailInfo()
	{
		$model = new OwnerMerchant();
		$info = $model->findOne($this->owner_merchant_id);
		$this->_mobile = isset($info->mobile) ? $info->mobile : '';
		$this->_merchantInfo = [];
		if (!empty($info->merchant_id)) {
			$this->_merchantInfo = Merchant::findOne($info->merchant_id);
		}
	}

	public function getMerchantInfo()
	{
		if (!is_null($this->_merchantInfo)) {
			return $this->_merchantInfo;
		}
		$this->getDetailInfo();
		return $this->_merchantInfo;
	}

	public function getMobileId()
	{
		if (is_null($this->_mobile)) {
		    $this->getDetailInfo();
		}

		$mobile = $this->_mobile;
		$model = new OwnerDispatch();
		$info = $model->find()->where(['mobile' => $mobile])->one();

		return $info->id;
	}
}
