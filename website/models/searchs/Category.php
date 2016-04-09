<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\Category as CategoryModel;

class Category extends CategoryModel
{
    public function search($params)
    {
        $query = CategoryModel::find()
            ->from(CategoryModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
