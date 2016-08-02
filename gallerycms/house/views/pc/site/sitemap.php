<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'map',
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 
];
?>
<div class="content">
    <div class="crumbs">
	<a href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">首页</a><span class="sep">&gt;</span>
		<span>网站地图</span>
    </div>
    <div class="center">
        <h1 class="title">网站地图</h1>
        <div class="subtitle">
			<span>城市分站</span>
        </div>
        <div class="list">
            <?php foreach (Yii::$app->params['companyInfos'] as $info) { ?>
            <dl>
                <dt><?= $info['name']; ?>:</dt>
                <dd>
				    <span>
					    <a href="<?= Url::to(['/house/site/home', 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>站</a>
                    </span>
                    <span>
					    <a href="<?= Url::to(['/house/decoration-company/index', 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>装修公司</a>
                    </span>
                    <span>
					    <a href="<?= Url::to(['/house/realcase/index', 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>实景案例</a>
                    </span>
                    <?php foreach (['sheji' => '免费设计', 'yanfang' => '免费验房', 'jianli' => '免费监理'] as $keyView => $valueView) { ?>
                    <span>
					    <a href="<?= Url::to(['/house/feature/index', 'view' => $keyView, 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>北京<?= $valueView; ?></a>
                    </span>
                    <?php } ?>
                </dd>
            </dl>
            <?php } ?>
        </div>
        <div class="subtitle">
		    <span><a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => '']); ?>">装修案例</a></span>
        </div>
        <div class="list">
            <?php foreach ($houseSortInfos as $sortKey => $sortInfo) { ?>
            <dl class="list-hot">
			    <dt><?= $sortInfo['name']; ?>：</dt>
                <dd>
                    <?php foreach ($sortInfo['values'] as $subKey => $subValue) { ?>
                    <span>
					    <a target="_blank" title="<?= $subValue; ?>" href="<?= Url::to(['/house/sample/index', 'tag' => $modelSample->createTag([$sortKey => $subKey]), 'page' => 1]); ?>"><?= $subValue; ?></a>
                    </span>
                    <?php } ?>
                </dd>
            </dl>
            <?php } ?>
        </div>
        <div class="subtitle">
		    <span>装修热搜</span>
        </div>
        <div class="list">
            <?php foreach ($regionInfos as $info) { ?>
            <dl class="list-hot">
                <dt><?= $info['name']; ?>:</dt>
                <dd>
                    <?php foreach ($info['countyInfos'] as $countyInfo) { ?>
                    <span>
					    <a target="_blank" title="<?= $countyInfo['name']; ?>" href="<?= Url::to(['/house/region/region', 'city_code' => $info['code_short'], 'county' => $countyInfo['spell_one'], 'vtown' => '']); ?>"><?= $countyInfo['name_short']; ?></a>
                    </span>
                    <?php } ?>
                    <span>
					    <a target="_blank" title="" href="<?= Url::to(['/house/site/map-more', 'city_code' => $info['code_short']]); ?>">更多>>></a>
                    </span>
                </dd>
            </dl>
            <?php } ?>
        </div>
    </div>
</div>
