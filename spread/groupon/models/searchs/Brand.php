<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\Brand as BrandModel;

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
