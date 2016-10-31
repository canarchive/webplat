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
	public $updated_at_start;
	public $updated_at_end;

    public function rules()
    {
        return [
            [['name', 'city_code', 'is_joined', 'status', 'created_at_start', 'created_at_end', 'updated_at_start', 'updated_at_end'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = MerchantModel::find();//->orderBy('id DESC');

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
			//'sort' => ['attributes' => ['num_owner', 'status']],
		]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }
		$this->load($params);
		if (!empty($this->name)) {
            $query->andFilterWhere(['like', 'name', $this->name]);
		}

		$query->andFilterWhere([
			'city_code' => $this->city_code,
			'status' => $this->status,
			'is_joined' => $this->is_joined,
		]);

		$this->searchTimeElem($query);
		$this->searchTimeElem($query, 'updated_at');

        return $dataProvider;
    }
}
