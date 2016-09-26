<?php

namespace merchant\models;

use common\models\MerchantModel;
use spread\decoration\models\DecorationOwner;
use spread\decoration\models\OwnerHouse;

class OwnerMerchant extends MerchantModel
{
	public $ownerName;
	public $houseAddress;
	public $houseArea;
	public $houseType;

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

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'merchant_id' => '商家',
			'mobile' => '手机号',
			'house_id' => '房屋',
			'created_at' => '派单时间',
			'updated_at' => '更新时间',
			'note' => '备注',
			'status' => '状态',
            'name' => '名称',
		];
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
		foreach ($infos as & $info) {
			$ownerInfo = DecorationOwner::find()->where(['mobile' => $info['mobile']])->orderBy(['id' => SORT_DESC])->one();
			$houseInfo = OwnerHouse::findOne($info['house_id']);
			$info['ownerName'] = !empty($ownerInfo) ? $ownerInfo->name : '';
			$info['houseAddress'] = !empty($houseInfo) ? $houseInfo->address : '';
			$info['houseArea'] = !empty($houseInfo) ? $houseInfo->house_area : '';
			$info['houseType'] = !empty($houseInfo) && !empty($houseInfo->house_type) ? $houseInfo->houseTypeInfos[$houseInfo->house_type] : '';
		}
		return $infos;
	}
}
