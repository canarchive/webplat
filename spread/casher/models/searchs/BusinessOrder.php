<?php

namespace spread\casher\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\casher\models\BusinessOrder as BusinessOrderModel;

class BusinessOrder extends BusinessOrderModel
{
    public function search($params)
    {
        $this->load($params);
        $query = BusinessOrderModel::find();
		if ($this->groupon_id > 0) {
            $query->andFilterWhere(['groupon_id' => $this->groupon_id]);
		}		
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
	
	public function getSearchDatas()
	{
		$datas = [
			'grouponInfos' => $this->grouponInfos,
		];

		return $datas;
	}	
}
