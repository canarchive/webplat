<?php

namespace merchant\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\models\Merchant as MerchantModel;

class Merchant extends MerchantModel
{
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['city_code',], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = MerchantModel::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

		$query->andFilterWhere([
			'city_code' => $this->city_code,
			'status' => $this->status,
		]);


        return $dataProvider;
    }
}
