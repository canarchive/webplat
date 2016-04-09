<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\Type as TypeModel;

class Type extends TypeModel
{
    public function search($params)
    {
        $query = TypeModel::find()
            ->from(TypeModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
