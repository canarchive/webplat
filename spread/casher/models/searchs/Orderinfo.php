<?php

namespace spread\casher\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\casher\models\Orderinfo as OrderinfoModel;

class Orderinfo extends OrderinfoModel
{
    public function search($params)
    {
        $query = OrderinfoModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
