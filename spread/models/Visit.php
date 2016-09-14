<?php

namespace spread\models;

use Yii;
use common\models\SpreadModel;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "template".
 */
class Visit extends SpreadModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%visit}}';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '访问日志ID',
			'channel' => '推广渠道',
			'from_type' => '客户端类型',
			'template_code' => '模板代码',
			'keyword' => '搜索关键字',
			'keywordid' => '关键字ID',
			'matchtype' => '匹配类型',
			'adposition' => '位置',
            'pagenum' => '页数',
			'url' => 'URL',
			'created_at' => '创建时间',
			'created_day' => '日期',
			'created_hour' => '小时',
			'ip' => 'IP',
			'city' => '城市',
        ];
    }

	public function writeVisitLog($isMobile)
	{
        $data = [];
        $attributeParams = $this->getAttributeParams();
        $channel = Yii::$app->getRequest()->get('channel');
        foreach ($attributeParams as $field => $param) {
            $paramValue = (Yii::$app->getRequest()->get($param, ''));
			if ($field == 'keyword') {
                if (!preg_match('%^(?:
                    [\x09\x0A\x0D\x20-\x7E]              # ASCII
                    | [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
                    | \xE0[\xA0-\xBF][\x80-\xBF]         # excluding overlongs
                    | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
                    | \xED[\x80-\x9F][\x80-\xBF]         # excluding surrogates
                    | \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
                    | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
                    | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
                    )*$%xs', $paramValue)
                ) {
                    //$paramValue = utf8_encode($paramValue);
				    $paramValue = mb_convert_encoding($paramValue, 'utf-8', 'gbk');
                }
				//$tmp = mb_convert_encoding($paramValue, 'utf-8');
				//$paramValue = $paramValue == $tmp ? $paramValue : mb_convert_encoding($paramValue, 'utf-8', 'gbk');
			}
            $data[$field] = $paramValue;
        }

        //$hostInfo = Yii::$app->request->hostInfo;
        //$url = urlencode(Yii::$app->request->getUrl());
		//$pathInfo = Yii::$app->request->pathInfo;
		//$queryString = Yii::$app->request->queryString;
		$urlFull = Yii::$app->request->referrer;
		$urlFull = empty($urlFull) ? '' : $urlFull;
		$urlBase = substr($urlFull, 0, strpos($urlFull, '?'));
		$urlBase = empty($urlBase) ? $urlFull : $urlBase;
		$data['url'] = $urlBase;
		$data['url_full'] = $urlFull;
        $data['from_type'] = $isMobile ? 'h5' : 'pc';

		$urlFullPre = Yii::$app->request->get('url_pre', '');
		$urlPre = substr($urlFullPre, 0, strpos($urlFullPre, '?'));
		$urlPre = empty($urlPre) ? $urlFullPre : $urlPre;
		$data['url_pre'] = $urlPre;
		$data['url_full_pre'] = $urlFullPre;
		$data['keyword_search'] = $this->_getKeywordSearch($urlFullPre);
		$data['city_code'] = Yii::$app->request->get('city_code', '');

        $this->insert(true, $data);

		$session = Yii::$app->session;
		$data['time'] = time();
		$session['session_spread_info'] = $data;

		$keywordModel = new \spread\models\Keyword();
		$keywordModel->recordKeyword($data['keyword'], $data['from_type']);

        return $data;		
	}

	public function insert($runValidation = true, $attributes = null)
	{
		$time = time();
		$day = date('Ymd', $time);
		$hour = date('H', $time);
		$attributes['created_at'] = $time;
		$attributes['created_day'] = date('Ymd', $time);
		$attributes['created_hour'] = date('H', $time);
		$attributes['ip'] = Yii::$app->getRequest()->getIP();
		//$attributes['ip'] = '123.57.148.73';
		$city = \common\components\IP::find($attributes['ip']);
		$city = is_array($city) ? implode('-', $city) : $city;
		$attributes['city'] = $city;

        if (($primaryKeys = static::getDb()->schema->insert($this->tableName(), $attributes)) === false) {
            return false;
        }

        return true;
    }	

	public function getAttributeParams()
	{
        return [
			'channel' => 'channel',
			'keyword' => 'kw',
			'keywordid' => 'kid',
			'matchtype' => 'a_matchtype',
			'adposition' => 'a_adposition',
            'pagenum' => 'a_pagenum',
        ];
	}

	protected function _search($params, $query)
	{
        $dataProvider = new ActiveDataProvider(['query' => $query]);

        if ($this->load($params) && !$this->validate()) {
            return $dataProvider;
        }

		if (!empty($this->keyword)) {
            $query->orFilterWhere(['like', 'keyword', $this->keyword]);
            //$query->orFilterWhere(['like', 'message', $this->keyword]);
		}

		$startTime = strtotime($this->created_at_start);
		$endTime = $this->created_at_end > 0 ? strtotime($this->created_at_end) : time();
		$query->andFilterWhere([
			//'info_id' => $this->info_id,
			'from_type' => $this->from_type,
			//'template_code' => $this->template_code,
			'channel' => $this->channel,
		]);
        $query->andFilterWhere(['>=', 'created_at', $startTime]);
        $query->andFilterWhere(['<', 'created_at', $endTime]);

        return $dataProvider;
    }	

	
	public function getSearchDatas()
	{
		$channelInfos = ['bd' => 'bd', '360' => '360', 'sg' => 'sg', 'sm' => 'sm'];
		$fromTypeInfos = ['pc' => 'pc', 'h5' => 'h5'];

		$datas = [
			'fromTypeInfos' => $fromTypeInfos,
			'channelInfos' => $channelInfos,
		];

		return $datas;
	}

	protected function _getKeywordSearch($url)
	{
		return '';
	}
}
