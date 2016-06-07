<?php

namespace spread\shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\shoot\models\ActivityUser as ActivityUserModel;

class ActivityUser extends ActivityUserModel
{
    public function search($params)
    {
        $query = ActivityUserModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
