<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootArticle as ShootArticleModel;

class ShootArticle extends ShootArticleModel
{
    public function search($params)
    {
        $query = ShootArticleModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
