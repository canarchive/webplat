<?php

namespace merchant\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\house\models\Realcase as RealcaseModel;

class Realcase extends RealcaseModel
{
    public function search($params)
    {
        $query = RealcaseModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
