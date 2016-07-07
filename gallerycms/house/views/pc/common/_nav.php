<?php
use yii\helpers\Url;

$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<div class="logo-head">
    <div class="content">
        <div>
		    <a href="<?= Yii::getAlias('@gallerycmsurl'); ?>">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/jz-logo.png" alt="窝窝家互联网家装平台"></a>
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/logo-word.png"></div>
        <ul class="nav">
		    <li data-tabid="index" <?php if ($currentNav == 'index') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/site/index', 'company_code' => Yii::$app->params['currentCompany']['code']]); ?>">首页</a>
            </li>

            <li data-tabid="meitu">
				<a href="<?= Url::to(['/house/sample/index']); ?>">装修案例</a>
            </li>
            <li data-tabid="realcase">
				<a href="<?= Url::to(['/house/realcase/index']); ?>">实景作品</a>
            </li>
            <li data-tabid="provider">
				<a href="<?= Url::to(['/house/decoration-company/index']); ?>">装修公司</a>
            </li>
		    <li data-tabid="provider" <?php if ($currentNav == 'free') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang']); ?>">免费服务</a>
            </li>
        </ul>
    </div>
</div>
