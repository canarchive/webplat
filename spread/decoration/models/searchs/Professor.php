<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\Professor as ProfessorModel;

class Professor extends ProfessorModel
{
    public function search($params)
    {
        $query = ProfessorModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
