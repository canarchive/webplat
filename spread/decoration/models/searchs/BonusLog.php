<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\BonusLog as BonusLogModel;

class BonusLog extends BonusLogModel
{
    public function search($params)
    {
        $query = BonusLogModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
