<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\models\CallbackLog as CallbackLogModel;

class CallbackLog extends CallbackLogModel
{
    public function search($params)
    {
        $query = CallbackLogModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
