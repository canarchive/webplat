<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\GoodsFavour as GoodsFavourModel;

class GoodsFavour extends GoodsFavourModel
{
    public function search($params)
    {
        $query = GoodsFavourModel::find()
            ->from(GoodsFavourModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
