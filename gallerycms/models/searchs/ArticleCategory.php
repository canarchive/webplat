<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ArticleCategory as ArticleCategoryModel;

class ArticleCategory extends ArticleCategoryModel
{
    public function search($params)
    {
        $query = ArticleCategoryModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
