<?php

namespace common\models;

use yii\helpers\ArrayHelper;

class ShootModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbShoot;
    }	

	public function getAttachmentModel()
	{
		return new \shoot\models\Attachment();
	}

	public function getGoodsInfos()
	{
		$infos = ArrayHelper::map(\shoot\models\Goods::find()->all(), 'id', 'name');
		return $infos;
	}	

	public function getPhotographerInfos()
	{
		$infos = ArrayHelper::map(\shoot\models\Photographer::find()->all(), 'id', 'name');
		return $infos;
	}	

	public function getGoodsInfo()
	{
		$info = \shoot\models\Goods::findOne($this->goods_id);

		return $info;
	}	

	public function getPhotographerInfo()
	{
		$info = \shoot\models\Photographer::findOne($this->photographer_id);

		return $info;
	}	

	public function getCategoryLevelInfos()
	{
		$category = new \shoot\models\Category();
		$infos = $category->getSelectInfos();
		return $infos;
	}

	public function getCategoryInfos()
	{
		$category = new \shoot\models\Category();
		$infos = $category->find()->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		return $infos;
	}

	public function getCategoryInfo()
	{
		$info = \shoot\models\Category::findOne($this->category_id);

		return $info;
	}	
}
