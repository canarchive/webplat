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
                'class' => 'yii\web\ErrorAction',
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
		}

        return parent::beforeAction($action);
	}
}
