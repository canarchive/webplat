<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\GrouponOwner as GrouponOwnerModel;

class GrouponOwner extends GrouponOwnerModel
{
    public function search($params)
    {
        $query = GrouponOwnerModel::find()
            ->from(GrouponOwnerModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
