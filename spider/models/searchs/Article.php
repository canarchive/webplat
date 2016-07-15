<?php

namespace spider\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spider\models\Article as ArticleModel;

class Article extends ArticleModel
{
    public function search($params)
    {
        $query = ArticleModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
