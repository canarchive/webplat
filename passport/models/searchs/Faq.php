<?php

namespace passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use passport\models\Faq as FaqModel;

class Faq extends FaqModel
{
    public function search($params)
    {
        $query = FaqModel::find()
            ->from(FaqModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
