<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Shipment as ShipmentModel;

class Shipment extends ShipmentModel
{
    public function search($params)
    {
        $query = ShipmentModel::find()
            ->from(ShipmentModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
