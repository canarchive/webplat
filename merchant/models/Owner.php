<?php

namespace merchant\models;

use Yii;
use yii\helpers\ArrayHelper;
use common\models\MerchantModel;
use spread\models\CustomService;

class Owner extends MerchantModel
{
	public $avatar;
	public $serviceInfo;
	public $merchantInfo;
    
    public static function tableName()
    {
        return '{{%owner}}';
    }

    public function behaviors()
    {
		$behaviors = [
		    $this->timestampBehaviorComponent,
		];
		return $behaviors;
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
			[['merchant_id', 'thumb', 'service_id', 'designer_id', 'orderlist', 'decoration_price', 'status'], 'default', 'value' => '0'],
			[['city_code', 'mobile', 'decoration_type', 'community_name', 'house_type', 'style', 'area', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
			'city_code' => '城市代码',
			'service_id' => '',
			'merchant_id' => '所属公司',
			'designer_id' => '设计师ID',
            'thumb' => '缩略图',
            'name' => '名称',
			'mobile' => '业主电话',
			'brief' => '',
			'mark' => '',
			'community_name' => '小区名字',
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
			'decoration_type' => '装修类型',
			'decoration_price' => '装修价格',
			'duration' => '工期',
			//'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('owner', $fields);

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
		$info['status'] = isset($info->statusInfos[$info->status]) ? $info->statusInfos[$info->status] : $info->status;
		$info['serviceInfo'] = CustomService::findOne($info['service_id']);//->toArray();
		//$info['merchantInfo'] = Merchant::findOne($info['merchant_id']);

		$info['house_type'] = isset($info->houseTypeInfos[$info->house_type]) ? $info->houseTypeInfos[$info->house_type] : $info->house_type;
		$info['style'] = isset($info->styleInfos[$info->style]) ? $info->styleInfos[$info->style] : $info->style;
		$info['decoration_type'] = isset($info->decorationTypeInfos[$info->decoration_type]) ? $info->decorationTypeInfos[$info->decoration_type] : $info->decoration_type;
		$info['avatar'] = strpos($info['brief'], '女士') !== false ? Yii::getAlias('@asseturl') . '/gallerycms/home/images/face04.png' : Yii::getAlias('@asseturl') . '/gallerycms/home/images/face03.png';
		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
			$info['status'] = isset($info->statusInfos[$info->status]) ? $info->statusInfos[$info->status] : $info->status;
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		
}
