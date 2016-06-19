<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Showoff as ShowoffModel;

class Showoff extends ShowoffModel
{
    public function search($params)
    {
        $query = ShowoffModel::find()
            ->from(ShowoffModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
