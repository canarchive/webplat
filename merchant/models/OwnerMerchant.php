<?php

namespace merchant\models;

use Yii;
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

	public function viewInfo($merchantId, $ids)
	{
		$ids = explode(',', $ids);
		if (count($ids) > 50) {
			return ['status' => 400, 'message' => '请求有误'];
		}
		$infos = $this->find()->where(['id' => $ids])->indexBy('id')->all();
		foreach ($infos as $id => $info) {
			if ($info['merchant_id'] != $merchantId) {
				return ['status' => 400, 'message' => '你没有查看这些信息的权限'];
			}
		}
		$datas = [];
		foreach ($infos as $id => $info) {
			if (!$info->view_at) {
			$info->view_at = Yii::$app->params['currentTime'];
			$info->update(false);
			}
			$datas[$id]['mobile'] = $info['mobile'];
			$datas[$id]['viewAt'] = date('Y-m-d H:i:s', $info->view_at);
		}

		return ['status' => 200, 'message' => 'OK', 'datas' => $datas];
	}
}
