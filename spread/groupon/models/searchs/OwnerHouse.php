<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\OwnerHouse as OwnerHouseModel;

class OwnerHouse extends OwnerHouseModel
{
    public function search($params)
    {
        $query = OwnerHouseModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
