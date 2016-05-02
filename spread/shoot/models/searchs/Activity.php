<?php

namespace spread\shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\shoot\models\Activity as ActivityModel;

class Activity extends ActivityModel
{
    public function search($params)
    {
        $query = ActivityModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
