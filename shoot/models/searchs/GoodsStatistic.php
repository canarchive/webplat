<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\GoodsStatistic as GoodsStatisticModel;

class GoodsStatistic extends GoodsStatisticModel
{
    public function search($params)
    {
        $query = GoodsStatisticModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
