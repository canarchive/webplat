<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\IndexGoods as IndexGoodsModel;

class IndexGoods extends IndexGoodsModel
{
    public function search($params)
    {
        $query = IndexGoodsModel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
