<?php
use yii\helpers\Url;

$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
$communityCode = isset($this->params['communityCode']) ? $this->params['communityCode'] : '';
?>
<div class="logo-head">
    <div class="content">
        <div>
		    <a href="<?= Yii::getAlias('@gallerycmsurl'); ?>">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/jz-logo.png" alt="兔狗家装互联网家装平台"></a>
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/logo-word.png"></div>
        <ul class="nav">
		    <li data-tabid="index" <?php if ($currentNav == 'index') { echo 'class="on"'; } ?>>
			    <a href="<?= Yii::getAlias('@gallerycmsurl'); ?>">首页</a>
            </li>
		    <li data-tabid="provider" <?php if ($currentNav == 'yanfang') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang']); ?>">免费验房</a>
            </li>
		    <li data-tabid="guanjia" <?php if ($currentNav == 'sheji') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'sheji']); ?>">免费量房设计</a>
            </li>
		    <li data-tabid="jiancai" <?php if ($currentNav == 'jianli') { echo 'class="on"'; } ?>>
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'jianli']); ?>">免费监理设计</a>
            </li>
        </ul>
    </div>
</div>
