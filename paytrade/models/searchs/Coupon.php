<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Coupon as CouponModel;

class Coupon extends CouponModel
{
    public function rules()
    {   
        return [
            [['user_id'], 'safe'],
        ];  
    }  

    public function search($params)
    {
        $query = CouponModel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }   

        if (!empty($this->user_id)) {
            $query->andFilterWhere(['user_id' => $this->user_id]);
        }   

        return $dataProvider;
    }
}
