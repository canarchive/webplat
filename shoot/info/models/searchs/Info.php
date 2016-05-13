<?php

namespace shoot\info\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\info\models\Info as InfoModel;

class Info extends InfoModel
{
    public function search($params)
    {
        $query = InfoModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
