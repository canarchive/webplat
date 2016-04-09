<?php

namespace website\models;

use common\models\WebsiteModel;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "brand".
 */
class Brand extends WebsiteModel
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%brand}}';
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
            [['name'], 'required'],
			['code', 'unique', 'targetClass' => '\website\models\Brand', 'message' => '代码已经被使用。'],
            //[['orderlist'], 'integer'],
            [['orderlist', 'logo', 'status'], 'default', 'value' => 0],
			['description', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '品牌ID',
			'code' => '代码',
            'name' => '名称',
            'logo' => 'LOGO',
            'description' => '描述',
            'orderlist' => '排序',
            'status' => '是否显示',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

	public function afterSave($insert, $changedAttributes)
	{
        parent::afterSave($insert, $changedAttributes);

		$fields = ['logo'];
		$attachment = new \website\models\Attachment();
		$this->_updateSingleAttachment($attachment, 'brand', $fields);

		return true;
	}	

	public function getStatusInfos()
	{
		$datas = [
			'0' => '停用',
			'1' => '正常',
		];
		return $datas;
	}

	public function getInfosByCategoryId($categoryId)
	{
		if (empty($categoryId)) {
			return [];
		}

		$categoryModel = new \website\models\Category;
		$categoryInfo = $categoryModel->findOne(['id' => $categoryId]);
		if (empty($categoryInfo)) {
			return [];
		}
		$categoryIds = [$categoryId];

		$parentId = $categoryInfo['parent_id'];
		for (; $parentId > 0; ) {
		    $categoryInfo = $categoryModel->findOne(['id' => $parentId]);
			$parentId = empty($categoryInfo) ? 0 : $categoryInfo['parent_id'];
			$categoryIds[] = $categoryInfo['id'];
		}

		$categoryBrandModel = new \website\models\CategoryBrand;
		$infos = $categoryBrandModel->find()->where(['category_id' => $categoryIds])->indexBy('brand_code')->asArray()->all();

		$brandModel = new \website\models\Brand;
		$datas = $brandModel->find()->where(['code' => array_keys($infos)])->asArray()->all();
        $datas = ArrayHelper::map($datas, 'code', 'name');

		return $datas;
	}
}
