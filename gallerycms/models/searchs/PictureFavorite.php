<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\PictureFavorite as PictureFavoriteModel;

class PictureFavorite extends PictureFavoriteModel
{
    public function search($params)
    {
        $query = PictureFavoriteModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
