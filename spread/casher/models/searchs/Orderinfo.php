<?php

namespace spread\casher\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\casher\models\Orderinfo as OrderinfoModel;

class Orderinfo extends OrderinfoModel
{
    public function search($params)
    {
        $this->load($params);
        $query = OrderinfoModel::find();
		if ($this->groupon_id > 0) {
            $query->andFilterWhere(['groupon_id' => $this->groupon_id]);
		}		
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
	
	public function getSearchDatas()
	{
		$datas = [
			'companyInfos' => $this->companyInfos,
		];

		return $datas;
	}		
}
