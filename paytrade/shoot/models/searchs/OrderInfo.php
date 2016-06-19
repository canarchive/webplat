<?php

namespace paytrade\shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\shoot\models\Orderinfo as OrderinfoModel;

class Orderinfo extends OrderinfoModel
{
    public function search($params)
    {
        $query = OrderinfoModel::find()
            ->from(OrderinfoModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
