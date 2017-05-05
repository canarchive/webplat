<?php
use yii\helpers\Url;

$this->params['jsFooterFiles'] = [
	'jquery-2.1.0', 'foundation.min', 'highcharts.src',
	'footable', 'echarts.min', 'main_v2',
];
$merchantInfo = $this->context->merchantInfo;
Yii::$app->params['seoTitle'] = '商家面板-' . Yii::$app->params['seoTitle'];
?>
<div class="container">
	<?= $this->render('_nav', ['curAction' => 'index']); ?>
    <section class="main-wrap dash-main-wrap">
        <div class="pager-block">
            <div class="pager-title-block">
                <div class="title">服务概览</div></div>
        </div>
        <div class="row full-width dash-item-list">
            <div class="small-12 medium-8 large-9 columns">
                <div class="aside-section account-info">
                    <div class="hd">
					    <!--<a href="<?= Url::to(['/house/info/setting']); ?>" class="right">修改</a>-->
						<h5>商家信息</h5>
                    </div>
                    <div class="bd">
					    <label>商家名</label><?php $merchantName = isset($merchantInfo['name']) ? $merchantInfo['name'] : ''; echo $merchantName; ?>
					    <label>商家地址</label><?php $merchantAddress = isset($merchantInfo['address']) ? $merchantInfo['address'] : ''; echo $merchantAddress; ?>
						<div class="panel callout radius">请确保商家信息准确无误！</div>
                    </div>
                </div>
            </div>
            <div class="small-12 medium-4 large-3 columns">
                <div class="aside-section account-info">
                    <div class="hd">
					    <a href="<?= Url::to(['/house/info/setting']); ?>" class="right">修改</a>
						<h5>账户信息</h5>
                    </div>
                    <div class="bd">
					    <label>用户名</label><?= $userInfo['truename']; ?>
                        <label>电子邮件</label><?= $userInfo['email']; ?>
						<label>联系电话</label><?= $userInfo['mobile']; ?>
						<div class="panel callout radius">请确保联系方式正确及畅通,便于我们及时通知相关事务</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
