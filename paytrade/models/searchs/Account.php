<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Account as AccountModel;

class Account extends AccountModel
{
    public function search($params)
    {
        $query = AccountModel::find()
            ->from(AccountModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
