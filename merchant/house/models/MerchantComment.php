<?php

namespace merchant\house\models;

use common\models\MerchantModel;
use yii\helpers\ArrayHelper;

class MerchantComment extends MerchantModel
{
	public $ownerInfo;
	public $totalScore;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%merchant_comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'photo', 'merchant_id', 'city_code'], 'required'],
            [['orderlist', 'status', 'merchant_id'], 'default', 'value' => 0],
			[['description', 'city_code', 'design_concept', 'score_praise', 'score_active', 'sample_num', 'title', 'record', 'aptitude'], 'safe'],
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
			'title' => '头衔',
			'aptitude' => '资质',
			'record' => '贡献',
			'merchant_id' => '公司ID',
            'photo' => '照片',
            'orderlist' => '排序',
            'description' => '商品描述',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '隐藏',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function getInfos($where, $limit = 10)
	{
		$infos = $this->find()->where($where)->indexBy('id')->orderBy(['id' => SORT_DESC])->limit($limit)->all();
		$ownerModel = new Owner();
		foreach ($infos as $key => & $info) {
		    $info['ownerInfo'] = $ownerModel->getInfo(['id' => $info->owner_id]);
			$info['totalScore'] = max($info['design_star'], $info['execution_star'], $info['service_star']);
		}

        //$cache->set($keyCache, $infos);
		//print_r($infos);
		return $infos;
	}		

	public function getMerchantInfos()
	{
		$infos = $this->_getMerchantInfos(['is_joined' => 1]);
		return $infos;
	}
}
