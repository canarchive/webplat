<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\PictureCategory as PictureCategoryModel;

class PictureCategory extends PictureCategoryModel
{
    public function search($params)
    {
        $query = PictureCategoryModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
