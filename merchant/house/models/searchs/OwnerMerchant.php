<?php

namespace merchant\house\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use merchant\house\models\OwnerMerchant as OwnerMerchantModel;

class OwnerMerchant extends OwnerMerchantModel
{
    public function rules()
    {
        return [
            [['mobile', 'merchant_id'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = OwnerMerchantModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);
        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }
		echo $this->mobile;
		if (!empty($this->mobile)) {
            $query->andFilterWhere(['like', 'mobile', $this->mobile]);
		}

		$query->andFilterWhere([
			'status' => $this->status,
			'merchant_id' => $this->merchant_id,
		]);

        return $dataProvider;
    }
}
