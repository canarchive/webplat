<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\InternalChain as InternalChainModel;

class InternalChain extends InternalChainModel
{
    public function search($params)
    {
        $query = InternalChainModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
