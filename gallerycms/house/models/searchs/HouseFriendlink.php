<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\HouseFriendlink as HouseFriendlinkModel;

class HouseFriendlink extends HouseFriendlinkModel
{
    public function search($params)
    {
        $query = HouseFriendlinkModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
