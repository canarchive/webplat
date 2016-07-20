<?php

namespace gallerycms\house\controllers;

use Yii;
use gallerycms\components\Controller as GallerycmsController;

class FeatureController extends GallerycmsController
{
	public function actionIndex()
	{
		$view = Yii::$app->request->get('view');
		$views = ['sheji', 'jianli', 'yanfang'];

		$view = in_array($view, $views) ? $view : 'yanfang';
		$datas = [
			'view' => $view,
			'communityInfo' => [],
		];
		$tdkInfos = $this->_tdkInfos($view);
		Yii::$app->params['tdkInfos'] = $tdkInfos;
		return $this->render($view, $datas);
	}

	protected function _tdkInfos($view)
	{
        $datas = [
			'yanfang' => [
                'title' => '【免费验房】验房注意事项_验房公司_验房流程-{{SITENAME}}免费验房',
                'keyword' => '免费验房,验房注意事项,验房公司,验房流程',
                'description' => '{{SITENAME}}免费验房服务,给您提供验房注意事项,最优质的验房公司,以及详细的验房流程,全方面检测房屋质量,让您装修有保障！',
			],
			'sheji' => [
                'title' => '免费设计_免费量房_免费报价-{{SITENAME}}免费设计量房报价',
                'keyword' => '免费设计,免费量房,免费报价',
                'description' => '{{SITENAME}}免费量房设计报价服务,为您提供免费设计,免费量房,免费报价,30秒快速发布需求,3家优质装修公司快速响应,明星设计师3套设计方案PK,3份报价清单免费获取,省40%装修款！',
			],
			'jianli' => [
                'title' => '【免费监理】家装工程监理_装修监理_施工监理-{{SITENAME}}免费监理',
                'keyword' => '免费监理,家装工程监理,装修监理,施工监理',
                'description' => '{{SITENAME}}免费监理服务,为您提供竣工收尾后的水电验收,泥工验收,油漆验收,竣工验收,家装工程监理,装修监理,施工监理给您全方面的装修保障服务！',
			],
		];

		return $datas[$view];
	}
}
