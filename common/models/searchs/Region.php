<?php

namespace common\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use common\models\Region as RegionModel;

class Region extends RegionModel
{
	public $level_first;
    public function rules()
    {
        return [
            [['level_first', 'parent_code', 'name'], 'safe'],
        ];
    }

    public function search($params)
    {
        $this->load($params);
		$name = isset($this->name) ? $this->name : '';
		if (!empty($name)) {

            $query = RegionModel::find();
            $query->andFilterWhere(['like', 'name', $name]);
            $query->orFilterWhere(['like', 'code', $name]);
		} else {
		    $parentCode = !empty($this->parent_code) ? $this->parent_code : $this->level_first;
            $query = RegionModel::find()->where(['parent_code' => strval($parentCode)]);//->orderBy('id DESC');
		}
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
            'pagination' => ['pageSize' => 50],
		]);

        return $dataProvider;		
	}	
	
	public function getSearchDatas()
	{
		$levelFirstInfos = $this->getSubInfos('', false);
		$levelFirstInfos = ArrayHelper::map($levelFirstInfos, 'code', 'name');
		$datas = [
			'levelFirstInfos' => $levelFirstInfos,
		];

		return $datas;
	}	
}
