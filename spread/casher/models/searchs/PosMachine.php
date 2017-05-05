<?php

namespace spread\casher\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\casher\models\PosMachine as PosMachineModel;

class PosMachine extends PosMachineModel
{
    public function search($params)
    {
        $query = PosMachineModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
