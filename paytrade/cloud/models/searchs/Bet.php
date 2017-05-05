<?php

namespace paytrade\cloud\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\cloud\models\Bet as BetModel;

class Bet extends BetModel
{
    public function search($params)
    {
        $query = BetModel::find()
            ->from(BetModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
