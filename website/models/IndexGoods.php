<?php

namespace website\models;

use yii\helpers\ArrayHelper;
use common\models\WebsiteModel;

/**
 * This is the model class for table "goods".
 */
class IndexGoods extends WebsiteModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%index_goods}}';
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
            [['name', 'category_id', 'price', 'thumb'], 'required'],
            [['orderlist', 'status'], 'default', 'value' => 0],
            [['price', 'market_price'], 'double'],
			[['picture', 'description'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '商品ID',
            'category_id' => '分类ID',
            'name' => '产品名称',
            'thumb' => '商品主图',
            'orderlist' => '排序',
            'market_price' => '市场价格',
            'price' => '本站价格',
            'description' => '商品描述',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '暂停显示',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
		$attachment = new \website\models\Attachment();
		$fields = ['thumb', 'picture'];
		$this->_updateSingleAttachment($attachment, 'goods', $fields);

        parent::afterSave($insert, $changedAttributes);
		return true;
	}

	public function getIndexSortInfos()
	{
		$datas = ArrayHelper::map(\website\models\IndexSort::find()->all(), 'id', 'name');
		return $datas;
	}

	public function getInfos()
	{
		$sortInfos = IndexSort::find()->where(['status' => 1])->orderBy(['orderlist' => SORT_DESC])->indexBy('id')->asArray()->all();

		$infos = self::find()->where(['category_id' => array_keys($sortInfos)])->orderBy(['orderlist' => SORT_DESC])->all();
		foreach ($infos as $key => $info) {
			$info['thumb'] = $info->getAttachmentUrl($info->thumb);
			$info['picture'] = $info->getAttachmentUrl($info->picture);
			$sortInfos[$info['category_id']]['infos'][] = $info->toArray();
		}

		return $sortInfos;
	}
}
