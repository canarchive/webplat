<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ArticleFavorite as ArticleFavoriteModel;

class ArticleFavorite extends ArticleFavoriteModel
{
    public function search($params)
    {
        $query = ArticleFavoriteModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
