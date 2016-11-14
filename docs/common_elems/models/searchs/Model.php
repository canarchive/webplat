<?php
namespace spread\groupon\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use spread\groupon\models\Brand as BrandModel;

class Brand extends BrandModel
{
	public $company_id;
	public $created_at_start;
	public $created_at_end;

    public function rules()
    {
        return [
            [['keyword', 'groupon_id', 'created_at_start', 'created_at_end', 'template_code', 'from_type', 'channel'], 'safe'],
        ];
    }
    public function search($params)
    {
        $query = BrandModel::find();
        //$query = VisitLogSuccessModel::find()->orderBy('id DESC');
        $dataProvider = new ActiveDataProvider(['query' => $query]);
		if ($this->groupon_id > 0) {
            $query->andFilterWhere(['groupon_id' => $this->groupon_id]);
		}
        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

		if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
		}

		$startTime = strtotime($this->created_at_start);
		$endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);

		if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
		}

		$startTime = strtotime($this->created_at_start);
		$endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
		$query->andFilterWhere([
			'groupon_id' => $this->groupon_id,
			'from_type' => $this->from_type,
			'template_code' => $this->template_code,
			'channel' => $this->channel,
		]);
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);
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
	public function getSearchDatas()
	{
        $companyInfos = ArrayHelper::map(Company::find()->where(['and', 'company_is_opening=1', 'is_hidden=0'])->all(), 'company_id', 'company_name');
		$templateInfos = ArrayHelper::map(Template::find()->all(), 'code', 'name');
		$channelInfos = ['bd' => 'bd', '360' => '360', 'sg' => 'sg', 'sm' => 'sm'];
		$fromTypeInfos = ['pc' => 'pc', 'h5' => 'h5'];

		$datas = [
			'companyInfos' => $companyInfos,
			'templateInfos' => $templateInfos,
			'fromTypeInfos' => $fromTypeInfos,
			'channelInfos' => $channelInfos,
		];

		return $datas;
	}
}
