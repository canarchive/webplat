<?php

namespace merchant\models;

use yii\helpers\ArrayHelper;
use common\models\MerchantModel;
use spread\models\CustomService;

/**
 * This is the model class for table "merchant".
 */
class Realcase extends MerchantModel
{
	public $design_sketch;
	public $serviceInfo;
	public $merchantInfo;
	public $pictureDesignInfo;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%realcase}}';
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
			[['thumb', 'picture_design', 'orderlist'], 'integer'],
			[['thumb', 'picture_design', 'service_id', 'orderlist', 'status', 'decoration_price'], 'default', 'value' => '0'],
			[['design_sketch', 'picture_design', 'decoration_type', 'community_name', 'house_type', 'style', 'area', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '案例ID',
            'name' => '名称',
			'merchant_id' => '所属公司',
			'service_id' => '装修管家',
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
			'community_name' => '小区名字',
			'decoration_type' => '装修类型',
			'decoration_price' => '装修价格',
            'thumb' => '缩略图',
            'picture_design' => '设计图',
            'design_sketch' => '效果图',
			'orderlist' => '排序',
            'description' => '描述',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	protected function getStatusInfos()
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

		$fields = ['thumb', 'picture_design'];
		$this->_updateSingleAttachment('merchant', $fields);
		$this->_updateMulAttachment('merchant', 'design_sketch');

		return true;
	}	

	public function getInfo($id)
	{
		$info = static::find()->where(['id' => $id])->one();//->toArray();
		if (empty($info)) {
			return $info;
		}

		$info = $this->_formatInfo($info);
		return $info;
	}

	protected function _formatInfo($info)
	{
		$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		//$info['picture_design'] = $info->getAttachmentUrl($info['picture_design']);
		$info['merchantInfo'] = Merchant::findOne($info['merchant_id'])->toArray();

		$serviceModel = new CustomService();
		$pictureDesign = $this->getAttachmentModel()->findOne($info['picture_design']);
		if (!empty($pictureDesign)) {
			$info['picture_design'] = $pictureDesign->getUrl();
		}
		$info['pictureDesignInfo'] = $pictureDesign;
		$info['house_type'] = $info->houseTypeInfos[$info->house_type];
		$info['style'] = $info->styleInfos[$info->style];
		$info['decoration_type'] = $info->decorationTypeInfos[$info->decoration_type];
		$info['serviceInfo'] = $serviceModel->getInfo(['id' => $info->service_id]);

        $condition = [ 
            'info_table' => 'realcase',
            'info_field' => 'design_sketch',
            'info_id' => $info->id,
            'in_use' => 1,
        ];  
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $designSketchInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $designSketchInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->design_sketch = $designSketchInfos;

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
			$info['decoration_type'] = $info->decorationTypeInfos[$info->decoration_type];
			$info['serviceInfo'] = $serviceModel->getInfo(['id' => $info->service_id]);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		
}
