<?php

namespace backend\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Managerlog as ManagerlogModel;

class Managerlog extends ManagerlogModel
{
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['manager_id', 'created_at_start', 'created_at_end'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = ManagerlogModel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

		if (!empty($this->manager_id)) {
            $query->andFilterWhere(['=', 'manager_id', $this->manager_id]);
		}

		$startTime = strtotime($this->created_at_start);
		$endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);

        return $dataProvider;		
	}	
}
