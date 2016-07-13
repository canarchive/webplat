<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class HouseSample extends GallerycmsModel
{
	public $picture;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%house_sample}}';
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
            [['name'], 'required'],
			[['thumb', 'orderlist'], 'integer'],
			[['thumb', 'orderlist', 'status'], 'default', 'value' => '0'],
			[['picture', 'house_type', 'style', 'area', 'description'], 'safe'],
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
			'house_type' => '户型',
			'style' => '风格',
			'area' => '面积',
            'thumb' => '缩略图',
            'picture' => '设计图',
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

		$fields = ['thumb'];
		$this->_updateSingleAttachment('house_sample', $fields);
		$this->_updateMulAttachment('house_sample', 'picture');

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
            'info_table' => 'house_sample',
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
