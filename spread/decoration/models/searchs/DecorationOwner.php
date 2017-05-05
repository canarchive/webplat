<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\DecorationOwner as DecorationOwnerModel;

class DecorationOwner extends DecorationOwnerModel
{
    public function search($params)
    {
        $query = DecorationOwnerModel::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
