<?php

namespace spread\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\models\User as UserModel;

class User extends UserModel
{
	public $company_id;
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['name', 'mobile'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = UserModel::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

		if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'name', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
		}

		$startTime = strtotime($this->created_at_start);
		$endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);

        return $dataProvider;		
	}	
}
