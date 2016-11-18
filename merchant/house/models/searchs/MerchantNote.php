<?php

namespace merchant\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\house\models\MerchantNote as MerchantNoteModel;

class MerchantNote extends MerchantNoteModel
{
    public function search($params)
    {
        $query = MerchantNoteModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
