<?php

namespace spread\models\statistic\searchs;

use Yii;
use yii\data\ActiveDataProvider;
use spread\models\statistic\Dispatch as DispatchModel;

class Dispatch extends DispatchModel
{
	public $company_id;
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['datetime_type'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = DispatchModel::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params, '') && !$this->validate()) {
            return $dataProvider;
        }

		/*if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
		}

		$startTime = strtotime($this->created_at_start);
		$endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
		$query->andFilterWhere(['<', 'created_at', $endTime]);*/

        return $dataProvider;		
	}	
}
