<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootTag as ShootTagModel;

class ShootTag extends ShootTagModel
{
    public function search($params)
    {
        $query = ShootTagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
