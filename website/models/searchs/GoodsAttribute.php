<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\GoodsAttribute as GoodsAttributeModel;

class GoodsAttribute extends GoodsAttributeModel
{
    public function search($params)
    {
        $query = GoodsAttributeModel::find()
            ->from(GoodsAttributeModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
