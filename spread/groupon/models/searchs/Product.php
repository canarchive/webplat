<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\Product as ProductModel;

class Product extends ProductModel
{
    public function search($params)
    {
        $query = ProductModel::find()
            ->from(ProductModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
