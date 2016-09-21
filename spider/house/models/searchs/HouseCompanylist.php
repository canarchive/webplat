<?php

namespace spider\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spider\house\models\HouseCompanylist as HouseCompanylistModel;

class HouseCompanylist extends HouseCompanylistModel
{
    public function search($params)
    {
        $query = HouseCompanylistModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
