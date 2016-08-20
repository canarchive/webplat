<?php

namespace spread\groupon\models;

use common\models\SpreadModel;

/**
 * This is the model class for table "goods".
 */
class GrouponBrand extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%groupon_brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['groupon_id', 'brand_id'], 'required'],
            [['orderlist'], 'default', 'value' => 0],
            [['price'], 'double'],
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
            'groupon_id' => '团购会ID',
            'brand_id' => '品牌ID',
			'orderlist' => '排序',
            'description' => '商品描述',
        ];
    }

	public function getInfos($grouponId)
	{
		/*$infos = $this->find()->where(['groupon_id' => $grouponId])->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		$model = new self();
		foreach ($infos as $key => & $info) {
			$brand = Brand::findOne($info['brand_id'])->toArray();
			$brand['logo'] = $model->getAttachmentUrl($brand['logo']);
			$info = array_merge($brand, $info);
		}*/
		$cache = \Yii::$app->cache;
		$keyCache = 'groupon_brand';
		$data = $cache->get($keyCache);
		if ($data) {
			return $data;
		}

		$infos = Brand::find()->orderBy(['orderlist' => SORT_DESC])->all();
		foreach ($infos as $key => $info) {
			$info['logo'] = $info->getAttachmentUrl($info['logo']);
			$infos[$key] = $info->toArray();
		}
        $cache->set($keyCache, $infos);

		return $infos;
	}	

	public function getGrouponInfo()
	{
		$info = \spread\groupon\models\Groupon::findOne($this->groupon_id);

		return $info;
	}	

	public function getBrandInfo()
	{
		$info = \spread\groupon\models\Brand::findOne($this->brand_id);

		return $info;
	}
}
