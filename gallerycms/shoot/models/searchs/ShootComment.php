<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\ShootComment as ShootCommentModel;

class ShootComment extends ShootCommentModel
{
    public function search($params)
    {
        $query = ShootCommentModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
