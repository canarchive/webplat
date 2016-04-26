<?php

namespace shoot\models;

use yii\helpers\ArrayHelper;
use common\models\ShootModel;

class PhotographerCategory extends ShootModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%photographer_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photographer_id', 'category_id'], 'required'],
            [['orderlist'], 'default', 'value' => 0],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '品牌ID',
			'photographer_id' => '摄影师ID',
			'category_id' => '分类ID',
            'orderlist' => '排序',
        ];
    }

	public function getPhotographerInfos()
	{
		$infos = ArrayHelper::map(\shoot\models\Photographer::find()->all(), 'id', 'name');
		return $infos;
	}	

	public function getCategoryInfos()
	{
		$category = new Category();
		$infos = $category->getSelectInfos();
		return $infos;
	}
}
