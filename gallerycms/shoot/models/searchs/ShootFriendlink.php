<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootFriendlink as ShootFriendlinkModel;

class ShootFriendlink extends ShootFriendlinkModel
{
    public function search($params)
    {
        $query = ShootFriendlinkModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
