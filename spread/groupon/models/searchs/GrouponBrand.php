<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\GrouponBrand as GrouponBrandModel;

class GrouponBrand extends GrouponBrandModel
{
    public function search($params)
    {
        $this->load($params);
        $query = GrouponBrandModel::find();
		if ($this->groupon_id > 0) {
            $query->andFilterWhere(['groupon_id' => $this->groupon_id]);
		}

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }

    public function searchBrand($params)
    {
        $this->load($params);
		$this->groupon_id = Yii::$app->request->get('groupon_id', 0);
		$exists = GrouponBrandModel::find()->select('brand_id')->where(['groupon_id' => $this->groupon_id])->indexBy('brand_id')->asArray()->all();

		$query = Brand::find()->where(['not in', 'id', array_keys($exists)]);
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
