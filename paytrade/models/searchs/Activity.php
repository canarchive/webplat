<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Activity as ActivityModel;

class Activity extends ActivityModel
{
    public function search($params)
    {
        $query = ActivityModel::find()
            ->from(ActivityModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
