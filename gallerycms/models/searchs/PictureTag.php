<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\PictureTag as PictureTagModel;

class PictureTag extends PictureTagModel
{
    public function search($params)
    {
        $query = PictureTagModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
