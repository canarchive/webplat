<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootPosition as ShootPositionModel;

class ShootPosition extends ShootPositionModel
{
    public function search($params)
    {
        $query = ShootPositionModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
