<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\MerchantBank as MerchantBankModel;

class MerchantBank extends MerchantBankModel
{
    public function search($params)
    {
        $query = MerchantBankModel::find()
            ->from(MerchantBankModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
