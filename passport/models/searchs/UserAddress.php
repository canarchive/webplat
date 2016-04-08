<?php

namespace passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use passport\models\UserAddress as UserAddressModel;

class UserAddress extends UserAddressModel
{
    public function search($params)
    {
        $query = UserAddressModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
