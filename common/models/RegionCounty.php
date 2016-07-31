<?php

namespace common\models;

use Yii;
use common\models\PassportModel;
use Overtrue\Pinyin\Pinyin;

class RegionCounty extends PassportModel
{
	public $provinceInfo;
	public $cityInfo;
	public $countyInfo;
	public $townInfo;
	public $villageInfo;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region_county}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbCommon;
    }	

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id' => '地区ID',
            'name' => '名称',
            'parent_code' => '父级地区ID',
            'level' => '级别',
            'listorder' => '排序',
            'status' => '状态',			
        ];
    }

    /**
     * Get region parent
     * @return \yii\db\ActiveQuery
     */
    public function getRegionParent()
    {
        return $this->hasOne(Region::className(), ['code' => 'parent_code']);
    }

	/**
	 * Get the islog
	 *
	 * @return array
	 */
	public function getStatusInfos()
	{
		$datas = [
			'0' => '不显示',
			'1' => '显示',
		];	
		return $datas;
	}

	public function getInfo($where)
	{
		$info = $this->findOne($where);
		return $info;
	}

	public function getInfos()
	{
		$infos = $this->find()->where(['status' => 1])->indexBy('region_id')->asArray()->all();
		$datas = ['province' => [], 'city' => [], 'county' => [], 'town' => [], 'village' => []];
		foreach ($infos as $info) {
			$datas[$info['level']][] = $info;
		}
		foreach ($datas['town'] as & $town) {
			foreach ($datas['village'] as $village) {
				if ($village['parent_id'] == $town['region_id']) {
					$town['villages'][] = $village;
				}
			}
		}
		foreach ($datas['county'] as & $county) {
			foreach ($datas['town'] as $town) {
				if ($town['parent_id'] == $county['region_id']) {
					$county['towns'][] = $town;
				}
			}
		}
		foreach ($datas['city'] as & $city) {
			foreach ($datas['county'] as $county) {
				if ($county['parent_id'] == $city['region_id']) {
					$city['countys'][] = $county;
				}
			}
		}
		foreach ($datas['province'] as & $province) {
			foreach ($datas['city'] as $city) {
				if ($city['parent_id'] == $province['region_id']) {
					$province['cities'][] = $city;
				}
			}
		}
		//print_r($datas['city']);exit();
		return $datas;
	}
}
