<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\CustomService as CustomServiceModel;

class CustomService extends CustomServiceModel
{
    public function search($params)
    {
        $query = CustomServiceModel::find()
            ->from(CustomServiceModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
