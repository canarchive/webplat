<?php

namespace website\models;

use yii\helpers\ArrayHelper;
use common\models\WebsiteModel;

/**
 * This is the model class for table "goods".
 */
class Goods extends WebsiteModel
{
	public $picture;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
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
            [['name', 'category_id', 'price', 'main_photo'], 'required'],
            [['orderlist', 'status', 'brand_id'], 'default', 'value' => 0],
            [['price', 'market_price'], 'double'],
			[['picture'], 'safe'],
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
            'goods_number' => '商品库存',
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
			'99' => '手动下架',
		];	
		return $datas;
	}	

	public function afterSave($insert, $changedAttributes)
	{
		$attachment = new \website\models\Attachment();
		$fields = ['main_photo'];
		$this->_updateSingleAttachment($attachment, 'goods', $fields);

		$this->_updateMulAttachment($attachment, 'goods', 'picture');

        parent::afterSave($insert, $changedAttributes);
		return true;
	}

	public function getBrandInfos()
	{
		$datas = \website\models\Brand::getInfosByCategoryId($this->category_id);
		$datas[0] = '';

		return $datas;
	}

	public function getCategoryInfos()
	{
		$datas = ArrayHelper::map(\website\models\Category::find()->all(), 'id', 'name');
		return $datas;
	}

	public function getInfosByCat($catIds)
	{
		$infos = self::find()->where(['category_id' => $catIds])->orderBy(['orderlist' => SORT_DESC])->asArray()->limit(18)->all();
		foreach ($infos as $key => & $info) {
			$info['main_photo'] = rand(1, 7);
			$info['main_photo'] = $this->getAttachmentUrl($info['main_photo']);
		}

		return $infos;
	}
}
