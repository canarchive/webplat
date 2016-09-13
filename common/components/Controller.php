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
        $forceMobile = Yii::$app->getRequest()->get('force_mobile');
		if ($forceMobile) {
			Yii::$app->params['clientIsMobile'] = $forceMobile;
			return $forceMobile;
		}

		//return false;
        $detect = new \Mobile_Detect;
        $isMobile = $detect->isMobile();
		Yii::$app->params['clientIsMobile'] = $isMobile;

        return $isMobile;
    }

	public function beforeAction($action)
	{
		/*$spread = Yii::getAlias('@spread', false);
		$channel = Yii::$app->getRequest()->get('channel');
		$method = Yii::$app->getRequest()->method;
		$isMobile = $this->clientIsMobile();
		if ($spread && $channel && $method == 'GET') {
			$visit = new \spread\models\Visit();
			$visit->writeVisitLog($isMobile);
		}*/

		Yii::$app->params['statUrl'] = '';
        $channelSpread = Yii::$app->request->get('channel');
        if (!empty($channelSpread)) {
    		$urlPre = strval(Yii::$app->request->referrer);
			$cityCode = Yii::$app->request->get('city_code', '');
    		$statUrl = Yii::getAlias('@spreadurl') . '/stat.html?' . Yii::$app->request->queryString . '&city_code=' . $cityCode . '&url_pre=' . $urlPre;
    		//$statStr = "<img src='{$statUrl}' />";
			Yii::$app->params['statUrl'] = "<script type='text/javascript' src='{$statUrl}'></script>";
    	}

        return parent::beforeAction($action);
	}

	public function getSiteInfos()
	{
		$infoModel = new \shoot\info\models\Info();
		$infos = $infoModel->getInfos();

		return $infos;
	}
}
