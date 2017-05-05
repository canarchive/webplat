<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\Groupon as GrouponModel;

class Groupon extends GrouponModel
{
    public function search($params)
    {
        $query = GrouponModel::find()
            ->from(GrouponModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
