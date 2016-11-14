<?php

class Controller
{
    protected function getGrouponInfo()
    {
		$city = \Yii::$app->getRequest()->get('city');
        $id = \Yii::$app->getRequest()->get('id');
		$forceId = \Yii::$app->getRequest()->get('force_id');
		
        $model = new \spread\groupon\models\Groupon();
		if ($id && $forceId) {
			$where = ['id' => $id];
		} else {
		    $company = new \merchant\models\Company();
		    $companyInfo = $company->findOne(['code' => $city]);
			if (empty($companyInfo)) {
				return [];
			}
			$currentTime = time();
			$where = ['and', "company_id = {$companyInfo['id']}", "start_at > $currentTime"];
		}

		$info = $model->getInfo($where);
		
        return $info;
    }

    protected function getCache($key)
    {
        $infos = \Yii::$app->cacheRedis->get($key);

        return $infos;
    }

    protected function setCache($key, $data)
    {
        \Yii::$app->cacheRedis->set($key, $data);

        return ;
    }
}
