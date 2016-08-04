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
		<?php foreach ($infos as $info) { ?>
        <div class="subtitle">
			<span><a target="_blank" title="<?= $info['name']; ?>" href="<?= Url::to(['/house/region/region', 'city_code' => Yii::$app->params['currentCompany']['code_short'], 'county' => $info['spell_one'], 'vtown' => '']); ?>"><?= $info['name_short']; ?></a></span>
        </div>
        <div class="list">
            <?php foreach ($info['townInfos'] as $town) { ?>
            <dl class="list-hot">
				<dt><a target="_blank" title="<?= $town['name']; ?>" href="<?= Url::to(['/house/region/region', 'city_code' => Yii::$app->params['currentCompany']['code_short'], 'county' => $info['spell_one'], 'vtown' => 't_' . $town['spell_one']]); ?>"><?= $town['name_short']; ?></a>:</dt>
                <dd>
                    <?php foreach ($town['villageInfos'] as $village) { ?>
                    <span>
					    <a target="_blank" title="<?= $village['name']; ?>" href="<?= Url::to(['/house/region/region', 'city_code' => Yii::$app->params['currentCompany']['code_short'], 'county' => $info['spell_one'], 'vtown' => 'v_' . $village['spell_one']]); ?>"><?= $village['name_short']; ?></a>
                    </span>
                    <?php } ?>
                </dd>
            </dl>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>
