<?php

namespace gallerycms\house\models;

use common\models\GallerycmsModel;
use yii\helpers\ArrayHelper;

class HouseCommunity extends GallerycmsModel
{
	public $region_level1;
	public $picture;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_community}}';
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
            [['name', 'region_code'], 'required'],
            [['orderlist', 'thumb', 'status'], 'default', 'value' => 0],
			[['code', 'region_level1', 'house_type', 'price_average', 'build_time', 'property_fee', 'property_company', 'developer', 'plot_ratio', 'greening_rate', 'building_num', 'house_num', 'picture', 'description',], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文章ID',
			'code' => '代码',
			'region_level1' => '省级地区',
			'region_code' => '地区代码',
			'name' => '名称',
			'thumb' => '缩略图',
			'house_type' => '户型',
			'orderlist' => '排序',
			'price_average' => '均价',
			'build_time' => '建筑年代',
			'property_fee' => '物业费',
			'property_company' => '物业公司',
			'developer' => '开发商',
			'plot_ratio' => '容积率',
			'greening_rate' => '绿化率',
			'building_num' => '楼栋总数',
			'house_num' => '房屋总数',
			'picture' => '图片',
            'created_at' => '录入时间',
            'updated_at' => '更新时间',
            'status' => '状态',
			'description' => '描述',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '不显示',
			'1' => '显示',
		];	
		return $datas;
	}

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['thumb'];
		$this->_updateSingleAttachment('house_community', $fields);
		$this->_updateMulAttachment('house_community', 'picture');

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

        $condition = [ 
            'info_table' => 'house_community',
            'info_field' => 'picture',
            'info_id' => $info->id,
            'in_use' => 1,
        ];  
        $infos = $this->getAttachmentModel()->find()->where($condition)->orderBy(['orderlist' => SORT_DESC])->all();
        $pictureInfos = []; 
        foreach ($infos as $attachment) {
            $url = $attachment->getUrl();
            $pictureInfos[] = [ 
                'url' => $url,
                'name' => $attachment['filename'],
                'description' => $attachment['description'],
            ];  
        }    
        $info->picture = $pictureInfos;

		return $info;
	}
}
