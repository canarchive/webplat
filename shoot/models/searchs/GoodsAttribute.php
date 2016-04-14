<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\GoodsAttribute as GoodsAttributeModel;

class GoodsAttribute extends GoodsAttributeModel
{
    public function search($params)
    {
        $query = GoodsAttributeModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
