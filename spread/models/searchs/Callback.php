<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\models\Callback as CallbackModel;

class Callback extends CallbackModel
{
    public function search($params)
    {
        $query = CallbackModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
