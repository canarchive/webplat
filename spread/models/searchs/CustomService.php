<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\models\CustomService as CustomServiceModel;

class CustomService extends CustomServiceModel
{
    public function search($params)
    {
        $query = CustomServiceModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
