<?php

namespace merchant\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\house\models\Working as WorkingModel;

class Working extends WorkingModel
{
    public function rules()
    {
        return [
            [['city_code', 'is_joined', 'merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = WorkingModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

		$query->andFilterWhere([
			'city_code' => $this->city_code,
			'is_joined' => $this->is_joined,
			'merchant_id' => $this->merchant_id,
		]);

        return $dataProvider;
    }
}
