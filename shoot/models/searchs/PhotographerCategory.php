<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\PhotographerCategory as PhotographerCategoryModel;

class PhotographerCategory extends PhotographerCategoryModel
{
    public function search($params)
    {
        $query = PhotographerCategoryModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
