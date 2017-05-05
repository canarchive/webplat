<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\Goods as GoodsModel;

class Goods extends GoodsModel
{
    public function search($params)
    {
        $query = GoodsModel::find()
            ->from(GoodsModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
