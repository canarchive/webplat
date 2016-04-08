<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\GoodsStatistic as GoodsStatisticModel;

class GoodsStatistic extends GoodsStatisticModel
{
    public function search($params)
    {
        $query = GoodsStatisticModel::find()
            ->from(GoodsStatisticModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
