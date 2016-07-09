<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\MerchantDesigner as MerchantDesignerModel;

class MerchantDesigner extends MerchantDesignerModel
{
    public function search($params)
    {
        $query = MerchantDesignerModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
