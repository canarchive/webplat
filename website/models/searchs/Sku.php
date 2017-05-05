<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\Sku as SkuModel;

class Sku extends SkuModel
{
    public function search($params)
    {
        $query = SkuModel::find()
            ->from(SkuModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
