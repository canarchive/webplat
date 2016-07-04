<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootFavorite as ShootFavoriteModel;

class ShootFavorite extends ShootFavoriteModel
{
    public function search($params)
    {
        $query = ShootFavoriteModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
