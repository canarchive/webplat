<?php

namespace spider\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spider\models\Tag as TagModel;

class Tag extends TagModel
{
    public function search($params)
    {
        $query = TagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
