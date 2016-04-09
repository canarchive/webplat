<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\PictureComment as PictureCommentModel;

class PictureComment extends PictureCommentModel
{
    public function search($params)
    {
        $query = PictureCommentModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
