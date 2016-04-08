<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\MerchantContact as MerchantContactModel;

class MerchantContact extends MerchantContactModel
{
    public function search($params)
    {
        $query = MerchantContactModel::find()
            ->from(MerchantContactModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
