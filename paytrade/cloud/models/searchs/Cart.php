<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Cart as CartModel;

class Cart extends CartModel
{
    public function search($params)
    {
        $query = CartModel::find()
            ->from(CartModel::tableName());

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
