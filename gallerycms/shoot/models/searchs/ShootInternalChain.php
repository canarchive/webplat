<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootInternalChain as ShootInternalChainModel;

class ShootInternalChain extends ShootInternalChainModel
{
    public function search($params)
    {
        $query = ShootInternalChainModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
