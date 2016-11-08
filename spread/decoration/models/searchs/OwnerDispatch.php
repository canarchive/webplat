<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\OwnerDispatch as OwnerDispatchModel;

class OwnerDispatch extends OwnerDispatchModel
{
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['mobile', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = OwnerDispatchModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

		$query->andFilterWhere(['like', 'mobile', $this->mobile]);
		$query->andFilterWhere([
			'service_id' => $this->service_id,
			//'status' => $this->status,
		]);

        return $dataProvider;
    }
}
