<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\LotteryLog as LotteryLogModel;

class LotteryLog extends LotteryLogModel
{
    public function search($params)
    {
        $query = LotteryLogModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
