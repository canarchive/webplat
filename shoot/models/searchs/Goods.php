<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\Goods as GoodsModel;

class Goods extends GoodsModel
{
    public function search($params)
    {
        $query = GoodsModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
