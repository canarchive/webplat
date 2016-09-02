<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'free_index',
];
$this->params['jsFiles'] = [
	'jquery', 'free-index',
];
$this->params['bodyClass'] = 'design';
$this->params['formPosition'] = 'jianli';
$this->params['formPositionName'] = '免费监理';
?>
<div class="container">
    <?php echo $this->render('../common/_top', ['title' => '']); ?>
    <div class="box" style="display: none;">
        <div class="box-con">
            <a href="javascript:void(0);" class="close-box"></a>
            <p class="box-title">预约成功</p>
            <p class="box-text">请保持手机畅通哦</br>装修管家会在24小时内联系您哦！</p>
            <p class="box-time">
                <span>3</span>秒后自动关闭</p></div>
    </div>
    <div class="personality">
        <div class="header">
		    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/banner-monitor.jpg" width="100%" alt="" />
	     	<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/jianli02.jpg" width="100%" alt="" />
        </div>
        <div class="freeone">
            <p class="free" id="order">申请免费监理</p>
            <?php echo $this->render('../common/_form', ['title' => '免费申请', 'type' => 'jianli']); ?>
            <p class="apply-subdesc">需在装修开工前预约资深监理师傅，提前安排验房时间。</p>
        </div>
        <!--个性化装修方案-->
        <div class="image-show">
            <?php for ($i = 1; $i < 10; $i++) { ?>
            <div class="person">
                <div class="pic">
				    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/monitor_img_0<?= $i; ?>.jpg" width="100%" alt="" />
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php echo $this->render('../common/_footer_base', []); ?>
</div>
