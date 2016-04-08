<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\Owner as OwnerModel;

class Owner extends OwnerModel
{
    public function search($params)
    {
        $query = OwnerModel::find()
            ->from(OwnerModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
