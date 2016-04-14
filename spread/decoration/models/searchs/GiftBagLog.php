<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\GiftBagLog as GiftBagLogModel;

class GiftBagLog extends GiftBagLogModel
{
    public function search($params)
    {
        $query = GiftBagLogModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
