<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\Attribute as AttributeModel;

class Attribute extends AttributeModel
{
    public function search($params)
    {
        $query = AttributeModel::find()
            ->from(AttributeModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
