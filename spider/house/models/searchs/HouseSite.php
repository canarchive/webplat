<?php

namespace spider\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spider\house\models\HouseSite as HouseSiteModel;

class HouseSite extends HouseSiteModel
{
    public function search($params)
    {
        $query = HouseSiteModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
