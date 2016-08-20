<?php

namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\GrouponProduct as GrouponProductModel;

class GrouponProduct extends GrouponProductModel
{
    public function search($params)
    {
        $this->load($params);
        $query = GrouponProductModel::find();
		if ($this->groupon_id > 0) {
            $query->andFilterWhere(['groupon_id' => $this->groupon_id]);
		}		

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }

    public function searchProduct($params)
    {
        $this->load($params);
		$this->groupon_id = Yii::$app->request->get('groupon_id', 0);
		$exists = GrouponProductModel::find()->select('product_id')->where(['groupon_id' => $this->groupon_id])->indexBy('product_id')->asArray()->all();

		$query = Product::find()->where(['not in', 'id', array_keys($exists)]);
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }	
}
