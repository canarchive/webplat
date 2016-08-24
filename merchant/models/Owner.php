<?php

namespace merchant\models;

use yii\helpers\ArrayHelper;
use common\models\MerchantModel;
use spread\models\CustomService;

/**
 * This is the model class for table "merchant".
 */
class Owner extends MerchantModel
{
	public $merchantInfo;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%owner}}';
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
            [['name', 'company_id'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'orderlist', 'decoration_price', 'status'], 'default', 'value' => '0'],
			[['mobile', 'decoration_type', 'community_name', 'house_type', 'style', 'area', 'description'], 'safe'],
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
			'company_id' => '分站ID',
			'merchant_id' => '所属公司',
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
			'mobile' => '业主电话',
			'community_name' => '小区名字',
			'decoration_type' => '装修类型',
			'decoration_price' => '装修价格',
            'thumb' => '缩略图',
			'orderlist' => '排序',
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
		$info['status'] = $info->statusInfos[$info->status];
		$info['decoration_type'] = $info->decorationTypeInfos[$info->decoration_type];
		$info['serviceInfo'] = CustomService::findOne($info['service_id'])->toArray();
		$info['merchantInfo'] = Merchant::findOne($info['merchant_id']);

		return $info;
	}

	public function getInfos($where, $limit = 100)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit($limit)->all();
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
			$info['status'] = $info->statusInfos[$info->status];
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		
}
