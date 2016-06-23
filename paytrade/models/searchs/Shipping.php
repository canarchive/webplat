<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Shipping as ShippingModel;

class Shipping extends ShippingModel
{
    public function search($params)
    {
        $query = ShippingModel::find()
            ->from(ShippingModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
