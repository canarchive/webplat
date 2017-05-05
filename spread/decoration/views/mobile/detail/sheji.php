<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'free-index',
];
$this->params['bodyClass'] = 'design';
$this->params['formPosition'] = 'hd-sheji';
$this->params['formPositionName'] = '活动-设计';
?>
<div class="container sheji">
    <?php echo $this->render('../common/_top', ['title' => '免费户型设计与报价']); ?>
    <div class="personality">
        <div class="header">
		    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_banner.png" width="100%" alt="" />
			<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_01.png" width="100%" alt="" />
        </div>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_line.png" width="100%" alt="" style="display: block;" />
        <div class="freeone">
            <p class="free" id="order">免费获取设计报价</p>
            <p class="secrecy">您的信息将被严格保密，请准确填写</p>
            <?php echo $this->render('../common/_form', ['title' => '立即免费获取', 'type' => 'sheji']); ?>
            <p class="apply-subdesc" style="height: 1rem;"></p>
        </div>
        <!--个性化装修方案-->
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_02.png" width="100%" alt="" />
        <div>
            <div class="person">
                <div class="pic">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_03.png" width="100%" alt="" />
                </div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_04.png" width="100%" alt="" />
                </div>
            </div>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_line.png" width="100%" alt="" style="display: block;" />
            <div class="person">
                <div class="pic">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_05.png" width="100%" alt="" />
                </div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_06.png" width="100%" alt="" />
                </div>
            </div>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_line.png" width="100%" alt="" style="display: block;" />
            <div class="person">
                <div class="pic">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_07.png" width="100%" alt="" />
                </div>
            </div>
            <div class="person">
                <div class="pic">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/sheji_08.png" width="100%" alt="" />
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->render('../common/_footer_base', []); ?>
</div>
