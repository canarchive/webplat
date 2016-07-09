<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\MerchantWorking as MerchantWorkingModel;

class MerchantWorking extends MerchantWorkingModel
{
    public function search($params)
    {
        $query = MerchantWorkingModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
