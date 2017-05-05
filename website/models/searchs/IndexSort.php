<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\IndexSort as IndexSortModel;

class IndexSort extends IndexSortModel
{
    public function search($params)
    {
        $query = IndexSortModel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
