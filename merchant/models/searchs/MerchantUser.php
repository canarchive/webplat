<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\MerchantUser as MerchantUserModel;

class MerchantUser extends MerchantUserModel
{
    public function search($params)
    {
        $query = MerchantUserModel::find()
            ->from(MerchantUserModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
