<?php

namespace merchant\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\house\models\Working as WorkingModel;

class Working extends WorkingModel
{
    public function search($params)
    {
        $query = WorkingModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
