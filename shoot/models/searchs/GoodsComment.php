<?php

namespace shoot\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use shoot\models\GoodsComment as GoodsCommentModel;

class GoodsComment extends GoodsCommentModel
{
    public function search($params)
    {
        $query = GoodsCommentModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
