<?php
namespace common\components;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller as YiiController;

class Controller extends YiiController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'common\components\ErrorAction',
                'view' => '@common/views/common/error',
            ],
        ];
    }

    public function init()
    {
        parent::init();
    }

    protected function clientIsMobile()
    {
        $forceMobile = \Yii::$app->getRequest()->get('force_mobile');
		if ($forceMobile) {
			return $forceMobile;
		}

		//return false;
        $detect = new \Mobile_Detect;
        $isMobile = $detect->isMobile();

        return $isMobile;
    }

	public function beforeAction($action)
	{
		$spread = \Yii::getAlias('@spread', false);
		$channel = \Yii::$app->getRequest()->get('channel');
		$method = \Yii::$app->getRequest()->method;
		$isMobile = $this->clientIsMobile();
		if ($spread && $channel && $method == 'GET') {
			$visit = new \spread\models\Visit();
			$visit->writeVisitLog($isMobile);
<<<<<<< Updated upstream
		}
=======
		}*/

		Yii::$app->params['statUrl'] = '';
        $channelSpread = Yii::$app->request->get('channel');
        if (!empty($channelSpread)) {
    		$urlPre = urlencode(strval(Yii::$app->request->referrer));
			$urlPre = 'https://m.baidu.com/baidu.php?sc.K600000-SwTdAzCGTTZDL7vjxeNhtGYkwAjlQPZrPCaEDMtViIfKgpf96eBXd1kjZIp6_vE4QtVuZh5pm58EJhxvbRwV6UpxJv1sjj1uLb_hlMMJUxayT374afBmc0bFJJJKfs2h33S43hvl05Nab1ehsN50oJV_J-iQpzvdDyxlcag-60.7Y_ipIve2qMzCrCFYG4c2obkRD1TSSapWzk8sHfGmbYSNNL-8Lug_C6EY4et_iXj5x-4q3phmCbYycYlUvTya81F_l_t8-h9jNfYmY_uro521IWIAS6qYHAh9gdu4TUrGnyjikgdu4UMuJjQvQrEUsnxdxtjqWOlOdO35t5OuO8xl5eEqxOQO1O1xOtOkOqLgKfYt_ipZ0lUVmoldn89XkOOqNn89xOOqoDseZZgugb_otyN9h9mzU_hHTC.U1Yk0ZDqYt5GEXhqsqxg_PjXYo8t4Pa91VH2YVjCYJJv3nMukl30IjLg_PjXYo8t4neRzV2v3nMukl30pyYqnWc10ATqIvRdn0KdpHY0TA-b5HD0mv-b5H00UgfqnH0kPdtknjD4g1nvnjD0pvbqn0KzIjYLn1b0uy-b5HDsPjn3nNtknj03njNxPj0Lg1Dknjc3ndtknH0vnHNxPH0vg1DsP1Rsn-tknj61P1NxnHDsP1D3g1Dknjm3P7tknH0YrH9xnH0Lrj0sg1DsP1nkr7tknH0vnjuxnHDsn1bdg1DknjfdPfKBpHYznjNxnW0vg1csnj0kg1csnjnk0AdW5Hc1Pjn1n1RdrNtsg100TgKGujYs0Z7Wpyfqn0KzuLw9u1Ys0AqvUjYdnHndQHKxrjRkQHFxrjR1QHR0mycqn7ts0ANzu1Ys0ZKs5HDsrjm1nWb4P1b0UMus5H08nj0snj0snj00Ugws5H00uAwETjYs0ZFJ5H00uANv5gIGTvR0uMfqn6KspjYs0Aq15HD0mMTqP6K8IjYY0ZPl5HD1nWKxnW0sP0KYIgnqPWbkrjcknHfLPjfkrH63nH0dPsKzug7Y5HDYP16snHmsnHcdP1c0mv6qUZNxIv-1ufKYIHddnHRkP1RYPfK15Hc4nj-WPHRdmvuhuHb1uHR0ph_quhD1nH9-rAfvPWTvrHN9nsKYUHYkPjT3n1nL0APh5HcL0ZFB5HD0UZNopHYk0AP8IA3qPW0sP1RknWKxmLKz0ZP1TjYk0ZP1Tjcqn6KYIZ0qnfKLpHYY0Au1mv9VujYz0Zwb5HDdnHTdPjR0IgF_5y9YIZ0lQzqLmgKLuy4oIi4Bmy-bIi4WUvYEIh--IztvrHwBrHTsPhPhrjwBryfdnW9-mHI9mHR8pZwVUjq1Tv-b5H0huMFEUHYkn0K1pyfqnWmLmyNhuHckn1DsPjRdrfKWTvYqfHbdfWDLwjujnjDdnWc4nsK9m1Yk0ZK85H00TydY5H00Tyd15H00XMfqn0KVmdqhThqV5HKxn7ts0AwYpyfqn0K-IA-b5Hc0mgPsmvnqnHnk0ZNspy4Wm1Ykn1D0Tydh5H00uhPdIjYs0ZGsUZN15H00mLFW5Hcdn1c&qid=267aefe213104559&sourceid=111&placeid=1&rank=1&shh=m.baidu.com&word=%E7%94%A8%E6%A6%BB%E6%A6%BB%E7%B1%B3%E8%A3%85%E4%BF%AE%E4%B8%80%E9%97%B4%E5%B0%8F%E5%8D%A7%E5%AE%A4%E9%9C%80%E8%A6%81%E5%A4%9A%E5%B0%91%E9%92%B1&sht=1012017a&ck=4314.67.279.31.414.145.0.0.2237461.279.31';
			$cityCode = Yii::$app->request->get('city_code', '');
			//$cityCode = empty($cityCode) ? Yii::$app->params['currentCompany']['code_short'] : '';
    		$statUrl = Yii::getAlias('@spreadurl') . '/stat.html?' . Yii::$app->request->queryString . '&city_code=' . $cityCode . '&url_pre=' . $urlPre;
			//.echo $statUrl;exit();
    		//$statStr = "<img src='{$statUrl}' />";
			Yii::$app->params['statUrl'] = "<script type='text/javascript' src='{$statUrl}'></script>";
    	}
>>>>>>> Stashed changes

        return parent::beforeAction($action);
	}

	public function getSiteInfos()
	{
		$infoModel = new \shoot\info\models\Info();
		$infos = $infoModel->getInfos();

		return $infos;
	}
}
