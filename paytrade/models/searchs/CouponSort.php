<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\CouponSort as CouponSortModel;

class CouponSort extends CouponSortModel
{
    public function search($params)
    {
        $query = CouponSortModel::find()
            ->from(CouponSortModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
