<?php

namespace passport\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use passport\models\Region as RegionModel;

class Region extends RegionModel
{
    public function rules()
    {
        return [
            [['parent_code'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = RegionModel::find();//->orderBy('id DESC');

        $dataProvider = new ActiveDataProvider(['query' => $query]);

		if (!empty($params['parent_code'])) {
            $query->andFilterWhere(['=', 'parent_code', $params['parent_code']]);
		}

        return $dataProvider;		
	}	
	
}
