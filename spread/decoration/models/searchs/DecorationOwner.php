<?php

namespace spread\decoration\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\decoration\models\DecorationOwner as DecorationOwnerModel;

class DecorationOwner extends DecorationOwnerModel
{
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['mobile', 'city_input', 'city_code', 'status', 'invalid_status', 'keyword', 'created_at_start', 'created_at_end',], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = DecorationOwnerModel::find()->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

		/*if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
		}*/

		$startTime = intval(strtotime($this->created_at_start));
		$endTime = $this->created_at_end > 0 ? intval(strtotime($this->created_at_end)) : time();
		$query->andFilterWhere(['like', 'mobile', $this->mobile]);
		if (isset($_GET['service_id'])) {
			$serviceIds = (array) $_GET['service_id'];
			foreach ($serviceIds as & $serviceId) {
				$serviceId = intval($serviceId);
			}
			$query->andFilterWhere(['service_id' => $serviceIds]);
		}
		$query->andFilterWhere([
			'service_id' => $this->service_id,
			'city_code' => $this->city_code,
			'city_input' => $this->city_input,
			'status' => $this->status,
			'invalid_status' => $this->invalid_status,
		]);
        //$query->andFilterWhere(['>=', 'signup_at', $startTime]);
		//$query->andFilterWhere(['<', 'signup_at', $endTime]);

        return $dataProvider;
    }
}
