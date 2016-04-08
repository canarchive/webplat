<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\GoodsSnapup as GoodsSnapupModel;

class GoodsSnapup extends GoodsSnapupModel
{
    public function search($params)
    {
        $query = GoodsSnapupModel::find()
            ->from(GoodsSnapupModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
