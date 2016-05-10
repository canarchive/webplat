<?php

namespace spread\decoration\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "goods".
 */
class Faq extends SpreadModel
{
	public $select;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%faq}}';
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
            [['name', 'owner'], 'required'],
            [['orderlist', 'status', 'company_id'], 'default', 'value' => 0],
			[['description'], 'safe'],
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
			'owner' => '业主',
			'company_id' => '公司ID',
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

	public function getCompanyInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Company::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getInfos($companyId)
	{
		/*$cache = \Yii::$app->cache;
		$keyCache = 'decoration_brand';
		$data = $cache->get($keyCache);
		if ($data) {
			return $data;
		}*/

		$infos = $this->find()->where(['company_id' => $companyId])->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit(4)->all();
		$infosExt = [];
		$count = count($infos);
		if ($count < 4) {
			$infosExt = $this->find()->where(['company_id' => 0])->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->limit(4 - $count)->all();
		}
		$infos = array_merge((array) $infos, (array) $infosExt);
        //$cache->set($keyCache, $infos);
		return $infos;
	}
}
