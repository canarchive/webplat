<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\Brand as BrandModel;

class Brand extends BrandModel
{
    public function search($params)
    {
        $query = BrandModel::find()
            ->from(BrandModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
