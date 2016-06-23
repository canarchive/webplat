<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Orderinfo as OrderinfoModel;

class OrderInfo extends OrderinfoModel
{
    public function search($params)
    {
        $query = OrderinfoModel::find()
            ->from(OrderinfoModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
