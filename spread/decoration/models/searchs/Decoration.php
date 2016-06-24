<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\Decoration as DecorationModel;

class Decoration extends DecorationModel
{
    public function search($params)
    {
        $query = DecorationModel::find()
            ->from(DecorationModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
