<?php

namespace merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\MerchantModel;
use spread\models\CustomService;

/**
 * This is the model class for table "merchant".
 */
class Working extends MerchantModel
{
	public $serviceInfo;
	public $statusDatas;
	public $merchantInfo;
	public $avatar;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%working}}';
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
        return [
            [['name', 'merchant_id'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'service_id', 'orderlist', 'decoration_price'], 'default', 'value' => '0'],
			[['status'], 'default', 'value' => ''],
			[['owner_name', 'owner_mobile', 'decoration_type', 'community_name', 'house_type', 'style', 'area', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
			'merchant_id' => '所属公司',
			'service_id' => '装修管家',
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
			'owner_name' => '业主名字',
			'owner_mobile' => '业主电话',
			'community_name' => '小区名字',
			'decoration_type' => '装修类型',
			'decoration_price' => '装修价格',
            'thumb' => '缩略图',
            'picture_living' => '效果图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$status = new WorkingStatus();
		return $status->statusInfos;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('merchant', $fields);

		return true;
	}	

	public function getInfo($id)
	{
		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);
        //\Yii::$app->cacheRedis->set($key, $info);
		return $info;
	}

	protected function _formatInfo($info)
	{
		$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		$info['house_type'] = $info->houseTypeInfos[$info->house_type];
		$info['style'] = $info->styleInfos[$info->style];
		$info['status'] = $info->statusInfos[$info->status];
		$info['avatar'] = strpos($info['owner_name'], '女士') !== false ? Yii::getAlias('@asseturl') . '/gallerycms/home/images/face04.png' : Yii::getAlias('@asseturl') . '/gallerycms/home/images/face03.png';
		$info['decoration_type'] = $info->decorationTypeInfos[$info->decoration_type];
		$info['serviceInfo'] = CustomService::findOne($info['service_id'])->toArray();
		$workingStatus = new WorkingStatus();
		$info['statusDatas'] = $workingStatus->getInfos(['working_id' => $info['id']]);
		$info['merchantInfo'] = Merchant::findOne($info['merchant_id']);

		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		$serviceModel = new CustomService();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
			$info['house_type'] = $info->houseTypeInfos[$info->house_type];
			$info['style'] = $info->styleInfos[$info->style];
			$info['status'] = $info->statusInfos[$info->status];
			$info['avatar'] = strpos($info['owner_name'], '女士') !== false ? Yii::getAlias('@asseturl') . '/gallerycms/home/images/face04.png' : Yii::getAlias('@asseturl') . '/gallerycms/home/images/face03.png';
			$info['decoration_type'] = $info->decorationTypeInfos[$info->decoration_type];
			$info['serviceInfo'] = $serviceModel->getInfo(['id' => $info->service_id]);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getMerchantInfos()
	{
		$infos = $this->getMerchantInfos(['is_spider' => 0]);
		return $infos;
	}
}
