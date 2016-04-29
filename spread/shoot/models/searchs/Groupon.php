<?php

namespace spread\shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\shoot\models\shoot as shootModel;

class shoot extends shootModel
{
    public function search($params)
    {
        $query = shootModel::find()
            ->from(shootModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
