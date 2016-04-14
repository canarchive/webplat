<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\GoodsFavour as GoodsFavourModel;

class GoodsFavour extends GoodsFavourModel
{
    public function search($params)
    {
        $query = GoodsFavourModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
