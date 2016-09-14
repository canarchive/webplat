<?php

namespace merchant\models;

use common\models\MerchantModel;

class OwnerMerchant extends MerchantModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner_merchant}}';
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

	public function getMerchantInfos()
	{
		$infos = $this->_getMerchantInfos(['is_spider' => 0]);
		return $infos;
	}

	public function getStatusInfos()
	{
		$datas = [
			'0' => '派单',
			'1' => '量房',
			'2' => '签约',
			'99' => '撤回',
		];

		return $datas;
	}

	public function getInfos($where, $limit = 500)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['id' => SORT_DESC])->limit($limit)->all();
		return $infos;
	}
}
