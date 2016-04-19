<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\DecorationGiftBag as DecorationGiftBagModel;

class DecorationGiftBag extends DecorationGiftBagModel
{
    public function search($params)
    {
        $query = DecorationGiftBagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
