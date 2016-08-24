<?php
use yii\helpers\Url;

$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<div class="logo-head">
    <div class="content">
        <div>
		    <a href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/jz-logo.png" alt="<?= Yii::$app->params['siteName']; ?>互联网家装平台"></a>
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/logo-word.png"></div>
        <ul class="nav">
		    <li data-tabid="index" <?php if ($currentNav == 'index') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">首页</a>
            </li>

			<li data-tabid="meitu" <?php if ($currentNav == 'sample') { echo 'class="on"'; } ?>>
				<a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => '']); ?>">装修案例</a>
            </li>
			<li data-tabid="realcase" <?php if ($currentNav == 'realcase') { echo 'class="on"'; } ?>>
				<a href="<?= Url::to(['/house/realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">实景作品</a>
            </li>
			<li data-tabid="provider" <?php if ($currentNav == 'company') { echo 'class="on"'; } ?>>
				<a href="<?= Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修公司</a>
            </li>
		    <li data-tabid="provider" <?php if ($currentNav == 'free') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修服务</a>
            </li>
        </ul>
    </div>
</div>
