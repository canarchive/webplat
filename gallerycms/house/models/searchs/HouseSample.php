<?php

namespace gallerycms\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\house\models\HouseSample as HouseSampleModel;

class HouseSample extends HouseSampleModel
{
    public function search($params)
    {
        $query = HouseSampleModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
