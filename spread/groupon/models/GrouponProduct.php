<?php

namespace spread\groupon\models;

use common\models\SpreadModel;

/**
 * This is the model class for table "goods".
 */
class GrouponProduct extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%groupon_product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['groupon_id', 'product_id'], 'required'],
            [['orderlist', 'status', 'price'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '商品ID',
			'groupon_id' => '团购会',
			'product_id' => '商品',
			'orderlist' => '排序',
            'price' => '本站价格',
            'description' => '商品描述',
            'status' => '状态',
        ];
    }

	public function getInfos($grouponId)
	{
		/*$infos = $this->find()->where(['groupon_id' => $grouponId])->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		$model = new self();
		foreach ($infos as $key => & $info) {
			$product = Product::findOne($info['product_id'])->toArray();
			$product['main_photo'] = $model->getAttachmentUrl($product['main_photo']);
			$info = array_merge($product, $info);
		}*/
		$cache = \Yii::$app->cache;
		$keyCache = 'groupon_product';
		$data = $cache->get($keyCache);
		if ($data) {
			return $data;
		}

		$infos = Product::find()->orderBy(['orderlist' => SORT_DESC])->all();
		foreach ($infos as $key => $info) {
			$info['main_photo'] = $info->getAttachmentUrl($info->main_photo);
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

	public function getProductInfo()
	{
		$info = \spread\groupon\models\Product::findOne($this->product_id);

		return $info;
	}
}
