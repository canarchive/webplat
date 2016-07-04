<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\HouseInternalChain as HouseInternalChainModel;

class HouseInternalChain extends HouseInternalChainModel
{
    public function search($params)
    {
        $query = HouseInternalChainModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
