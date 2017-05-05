<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\GoodsSku as GoodsSkuModel;

class GoodsSku extends GoodsSkuModel
{
    public function search($params)
    {
        $query = GoodsSkuModel::find()
            ->from(GoodsSkuModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
