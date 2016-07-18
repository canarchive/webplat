<?php

namespace gallerycms\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\house\models\HouseCommunity as HouseCommunityModel;

class HouseCommunity extends HouseCommunityModel
{
    public function search($params)
    {
        $query = HouseCommunityModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
