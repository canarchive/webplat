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

	public function publish()
	{
		$companyInfos = Yii::$app->params['companyInfos'];
		foreach ($companyInfos as $key => $info) {
			if ($info['is_publish']) {
				unset($companyInfos[$key]);
			}
		}
		if (empty($companyInfos)) {
			return false;
		}

		$publishNum = ceil(20 / count($companyInfos));
		foreach ($companyInfos as $info) {
			$prefix = substr($info['region_code'], 0, 3);
		    $sql = "UPDATE `wc_region_village` SET `status` = 1 WHERE `status` = 0 AND `region_id` LIKE '{$prefix}%' LIMIT {$publishNum}";
			$r = $this->db->createCommand($sql)->execute();
			if (empty($r)) {
				$info->is_publish = 1;
				$info->update(false);
			}
		}

		$sql = "UPDATE `wc_region_town` AS `t`, `wc_region_village` AS `v` SET `t`.`status` = 1 WHERE `t`.`status` = 0 AND `t`.`region_id` = `v`.`parent_id` AND `v`.`status` = 1";
		$r = $this->db->createCommand($sql)->execute();
		var_dump($r);

		$sql = "UPDATE `wc_region_county` AS `c`, `wc_region_town` AS `t` SET `c`.`status` = 1 WHERE `c`.`status` = 0 AND `c`.`region_id` = `t`.`parent_id` AND `t`.`status` = 1";
		$r = $this->db->createCommand($sql)->execute();
		var_dump($r);
	}
}
