<?php

namespace common\models;

use Yii;
use common\models\PassportModel;
use Overtrue\Pinyin\Pinyin;

class RegionVillage extends PassportModel
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
        return '{{%region_village}}';
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
}
