<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\UserPaytrade as UserPaytradeModel;

class UserPaytrade extends UserPaytradeModel
{
    public function search($params)
    {
        $query = UserPaytradeModel::find()
            ->from(UserPaytradeModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
