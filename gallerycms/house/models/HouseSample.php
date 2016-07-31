<?php

namespace gallerycms\house\models;

use yii\helpers\ArrayHelper;
use common\models\GallerycmsModel;

class HouseSample extends GallerycmsModel
{
	public $picture;
	public $tagHeaders = [
		'h' => 'house_type', 
		's' => 'style', 
		'a' => 'area', 
		'c' => 'color'
	];
    
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
		foreach ($infos as $key => & $info) {
			$info['thumb'] = $info->getAttachmentUrl($info['thumb']);
		}

        //$cache->set($keyCache, $infos);
		return $infos;
	}		

	public function getHouseSortInfos()
	{
		$datas = [
			'house_type' => [
				'name' => '户型',
			    'values' => $this->houseTypeInfos,
			],
			'style' => [
				'name' => '风格',
			    'values' => $this->styleInfos,
			],
			'area' => [
				'name' => '面积',
			    'values' => $this->areaInfos,
			],
			'color' => [
				'name' => '色系',
			    'values' => $this->colorInfos,
		    ],
		];
		return $datas;
	}

	public function formatTag($tag, $houseSortInfos)
	{
		$datas = [];
		foreach ($this->tagHeaders as $type) {
			$datas[$type] = '';
		}
		if (empty($tag)) {
			return $datas;
		}

		$infos = explode('-', $tag);
		if (empty($infos) || count($infos) > 5) {
			return false;
		}
		
		$formatInfos = [];
		$tagHeaders = array_keys($this->tagHeaders);
		foreach ($infos as $info) {
			if (strpos($info, '_') === false) {
				return false;
			}

			$subInfos = explode('_', $info);
			$key = isset($subInfos[0]) ? $subInfos[0] : false;
			$value = isset($subInfos[1]) ? $subInfos[1] : false;
			if (empty($key) || !in_array($key, $tagHeaders) || empty($value)) {
				return false;
			}

			$currentKeyValue = array_search($key, $tagHeaders);
			foreach ($tagHeaders as $tagKey => $tagValue) {
				if ($tagKey <= $currentKeyValue) {
					$tagHeaders[$tagKey] = 'exist';
				}
			}
			$typeKey = $this->tagHeaders[$key];
			if (!array_key_exists($value, $houseSortInfos[$typeKey]['values'])) {
				return false;
			}
			$datas[$typeKey] = $value;
		}

		return $datas;
	}

	public function createTag($tagInfos, $extInfo = [])
	{
		$tagInfos = array_merge($tagInfos, $extInfo);
		$tagStr = '';
		foreach ($tagInfos as $tag => $info) {
			if (empty($info)) {
				continue;
			}
			$tagStr .= substr($tag, 0, 1) . '_' . $info . '-';
		}
		return trim($tagStr, '-');
	}
}
