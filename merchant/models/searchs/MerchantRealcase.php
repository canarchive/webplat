<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\MerchantRealcase as MerchantRealcaseModel;

class MerchantRealcase extends MerchantRealcaseModel
{
    public function search($params)
    {
        $query = MerchantRealcaseModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
