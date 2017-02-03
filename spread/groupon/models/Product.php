<?php

namespace spread\groupon\models;

use common\models\SpreadModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "goods".
 */
class Product extends SpreadModel
{
	public $picture;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
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
            [['name', 'category_id', 'brand_id', 'main_photo'], 'required'],
            [['price', 'market_price', 'orderlist', 'number', 'status'], 'default', 'value' => 0],
            //[['price', 'market_price'], 'double'],
			[['description', 'number'], 'safe'],
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
            'brand_id' => '品牌ID',
            'name' => '产品民称',
            'main_photo' => '商品主图',
            'orderlist' => '排序',
            'market_price' => '市场价格',
            'price' => '本站价格',
            'number' => '商品库存',
            'keyword' => '商品关键词',
            'description' => '商品描述',
            'status' => '状态',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }

	public function getStatusInfos()
	{
		$datas = [
			'0' => '备货中',
			'1' => '正常',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['main_photo'];
		$attachment = new \spread\models\Attachment();
		$this->_updateSingleAttachment($attachment, 'product', $fields);

		return true;
	}

	public function getCategoryInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Category::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getBrandInfos()
	{
		$infos = ArrayHelper::map(\spread\groupon\models\Brand::find()->all(), 'id', 'name');
		return $infos;
	}

	public function getMerchantInfos()
	{
		$infos = ArrayHelper::map(\merchant\models\Merchant::find()->all(), 'id', 'name');
		return $infos;
	}
}
