<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootCategory as ShootCategoryModel;

class ShootCategory extends ShootCategoryModel
{
    public function search($params)
    {
        $query = ShootCategoryModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
