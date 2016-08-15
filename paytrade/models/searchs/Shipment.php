<?php

namespace paytrade\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use paytrade\models\Shipment as ShipmentModel;

class Shipment extends ShipmentModel
{
    public function rules()
    {   
        return [
            [['user_id'], 'safe'],
        ];  
    }  

    public function search($params)
    {
        $query = ShipmentModel::find();
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
