<?php

namespace gallerycms\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\house\models\HousePosition as HousePositionModel;

class HousePosition extends HousePositionModel
{
    public function search($params)
    {
        $query = HousePositionModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
