<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\HouseTag as HouseTagModel;

class HouseTag extends HouseTagModel
{
    public function search($params)
    {
        $query = HouseTagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
