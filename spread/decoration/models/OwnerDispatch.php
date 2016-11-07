<?php

namespace spread\decoration\models;

use Yii;
use common\models\SpreadModel;

class OwnerDispatch extends SpreadModel
{
	public $houseInfo;
	public $statusModel;
	public $statusChange;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner_dispatch}}';
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
    public function rules()
    {
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'mobile' => '手机号',
			'house_id' => '房屋',
			'created_at' => '派单时间',
			'updated_at' => '更新时间',
			'sendmsg_at' => '通知短信',
			'note' => '备注',
			'status' => '状态',
            'name' => '名称',
		];
	}

	public function getStatusInfos()
	{
		$datas = Yii::$app->params['dispatchStatusInfos']['status'];
		return $datas;
	}

	public function beforeSave($insert)
	{
		$this->statusChange = $this->status != $this->getOldAttribute('status');
		return true;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		if ($insert || $this->statusChange) {
		}

		return true;
	}	

	public function changeFromMerchant($ownerMerchant, $insert)
	{
		$data = $ownerMerchant->toArray();
		$exist = self::findOne(['mobile' => $data['mobile'], 'house_id' => $data['house_id']]);
		if (!$exist) {
			$newData = [
				'mobile' => $data['mobile'],
				'house_id' => $data['house_id'],
				'service_id' => $data['service_id'],
				'sttaus' => $data['status'],
				'num_merchant' => 1,
			];
			$model = new self($newData);
			$model->insert();
			return ;
		}

		if ($insert) {
		    $exist->updateCounters(['num_merchant' => 1]);

		}

		if ($exist['status'] != $data['status']) {
			$exist['status'] = $data['status'];
			$exist->update(false);
		}
	}
}
