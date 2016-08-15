<?php

namespace passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use passport\models\UserAddress as UserAddressModel;

class UserAddress extends UserAddressModel
{
    public function rules()
    {   
        return [
            [['user_id'], 'safe'],
        ];  
    }  

    public function search($params)
    {
        $query = UserAddressModel::find();
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
