<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\ShowoffComment as ShowoffCommentModel;

class ShowoffComment extends ShowoffCommentModel
{
    public function search($params)
    {
        $query = ShowoffCommentModel::find()
            ->from(ShowoffCommentModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
