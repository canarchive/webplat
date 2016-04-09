<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Coupon as CouponModel;

class Coupon extends CouponModel
{
    public function search($params)
    {
        $query = CouponModel::find()
            ->from(CouponModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
