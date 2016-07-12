<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\Merchant as MerchantModel;

class Merchant extends MerchantModel
{
    public function search($params)
    {
        $query = MerchantModel::find()
            ->from(MerchantModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
