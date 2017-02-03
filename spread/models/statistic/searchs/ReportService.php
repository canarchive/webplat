<?php

namespace spread\models\statistic\searchs;

use Yii;
use yii\data\ActiveDataProvider;
use spread\models\statistic\ReportService as ReportServiceModel;

class ReportService extends ReportServiceModel
{
	public $company_id;
	public $created_at_start;
	public $created_at_end;
	public $is_report_service = 1;

    public function rules()
    {
        return [
            [['channel_type', 'datetime_type', 'from_type'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = ReportServiceModel::find();//->orderBy('id DESC');

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
