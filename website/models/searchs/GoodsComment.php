<?php

namespace website\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use website\models\GoodsComment as GoodsCommentModel;

class GoodsComment extends GoodsCommentModel
{
    public function search($params)
    {
        $query = GoodsCommentModel::find()
            ->from(GoodsCommentModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
