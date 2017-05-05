<?php

namespace paytrade\cloud\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\cloud\models\OrderInfo as OrderInfoModel;

class OrderInfo extends OrderInfoModel
{
    public function search($params)
    {
        $query = OrderInfoModel::find()
            ->from(OrderInfoModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
