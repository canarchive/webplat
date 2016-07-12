<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\WorkingStatus as WorkingStatusModel;

class WorkingStatus extends WorkingStatusModel
{
    public function search($params)
    {
        $query = WorkingStatusModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
