<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\Attribute as AttributeModel;

class Attribute extends AttributeModel
{
    public function search($params)
    {
        $query = AttributeModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
