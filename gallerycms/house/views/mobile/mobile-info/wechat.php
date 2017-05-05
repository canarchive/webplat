<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'dpl',
];
$this->params['jsFiles'] = [
    'jquery', 'rem50',
];
?>
<style type="text/css">
body{ max-width: 750px; } 
.return { position: absolute; left: 0.72rem; top: 50%; margin-top: -0.37rem; width: 0.41rem; height: 0.74rem; 
background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/return.png) no-repeat; background-size: 100%; display: inline-block; } 
.top a .position { position: absolute; height: 2.05rem; right: 0.6rem; top: 0; font-size: 0.55rem; line-height: 2.05rem; color: #707070; padding-left: 0.83rem; 
background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/iconall.png) no-repeat -14.24rem -12.57rem; background-size: 14.89rem 14.43rem; } 
.toptitle { width: 100%; height:2.05rem; line-height: 1.76rem; border-bottom: 1px solid #e5e5e5; 
background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/jz-logo.png) no-repeat center; background-size: 4.65rem 1.39rem; 
position: relative; background-color: #fff; } 
.weixin-img{ width: 15rem; } .weixin-img img{ width: 100%; display: block; }
</style>
<?php echo $this->render('../common/_top', ['title' => '']); ?>
<div class="weixin-img">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s1.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s2.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s3.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s4.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s5.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s6.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s7.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s8.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
	<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/qd_s9.png" alt="关注<?= Yii::$app->params['siteNameBase']; ?>微信">
</div>
