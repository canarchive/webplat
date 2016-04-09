<?php

namespace passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use passport\models\UserPlat as UserPlatModel;

class UserPlat extends UserPlatModel
{
    public function search($params)
    {
        $query = UserPlatModel::find()
            ->from(UserPlatModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
