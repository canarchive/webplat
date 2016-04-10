<?php

namespace spider\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spider\models\ArticleTag as ArticleTagModel;

class ArticleTag extends ArticleTagModel
{
    public function search($params)
    {
        $query = ArticleTagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
