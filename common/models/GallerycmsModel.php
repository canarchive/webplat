<?php

namespace common\models;

class GallerycmsModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbGallerycms;
    }	

	public function getAttachmentModel()
	{
		return new \gallerycms\models\Attachment();
	}
<<<<<<< HEAD
=======

	public function getCategoryLevelInfos()
	{
		$category = new \gallerycms\models\ArticleCategory();
		$infos = $category->getSelectInfos();
		return $infos;
	}

	public function getCategoryInfos()
	{
		$category = new \gallerycms\models\ArticleCategory();
		$infos = $category->find()->indexBy('id')->orderBy(['orderlist' => SORT_DESC])->asArray()->all();
		return $infos;
	}

	public function getCategoryInfo()
	{
		$info = \gallerycms\models\ArticleCategory::findOne($this->category_id);

		return $info;
	}	
>>>>>>> gallerycms-shoot
}
