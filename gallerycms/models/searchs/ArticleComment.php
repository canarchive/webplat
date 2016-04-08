<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ArticleComment as ArticleCommentModel;

class ArticleComment extends ArticleCommentModel
{
    public function search($params)
    {
        $query = ArticleCommentModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
