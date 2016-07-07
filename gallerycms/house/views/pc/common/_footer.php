<?php
use yii\helpers\Url;
?>
<!--底部-->
<div class="footer">
    <div class="border">
        <div class="four-good main-cont">
            <div class="item1">
                <p>好设计</p>
                <p>优秀设计，实景体验</p>
            </div>
            <div class="item2">
                <p>好材料</p>
                <p>优质主材，源头直供</p>
            </div>
            <div class="item3">
                <p>好施工</p>
                <p>标准工艺，严苛施工</p>
            </div>
            <div class="item4">
                <p>好服务</p>
                <p>装修管家，专业服务</p>
            </div>
        </div>
    </div>
    <div class="web-map main-cont clearfix">
        <div class="item fn-left">
            <div class="map padTop10 fn-left">
                <p>关于我们</p>
                <div>
				    <a href="<?= Url::to(['/house/info/aboutus']); ?>" rel="nofollow" target="_blank">关于我们</a>
					<a href="<?= Url::to(['/house/info/joinus']); ?>" rel="nofollow" target="_blank">加入我们</a>
                </div>
            </div>
            <div class="map padTop10 fn-left">
                <p>网站信息</p>
                <div>
				    <a href="<?= Url::to(['/house/site/map']); ?>">网站地图</a>
					<a href="<?= Url::to(['/house/info/statement']); ?>">声明</a></div>
            </div>
            <div class="map padTop10 fn-left">
                <p>网站服务</p>
                <div>
		            <a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang']); ?>" target="_blank">免费验房</a>
		            <a href="<?= Url::to(['/house/feature/index', 'view' => 'sheji']); ?>" target="_blank">免费设计报价</a>
		            <a href="<?= Url::to(['/house/feature/index', 'view' => 'jianli']); ?>" target="_blank">免费监理</a>
                </div>
            </div>
        </div>
        <div class="item contact fn-right">
            <p>客服热线：
				<span><?= Yii::$app->params['siteHotline']; ?></span>
            </p>
            <p>商家加盟：
				<span><?= Yii::$app->params['siteJoinusTel']; ?></span>
            </p>
			<a onclick="nTalk.im_openInPageChat();">在线咨询</a>
        </div>
        <div class="item code fn-right">
            <a>
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/togo_ewm.jpg" border="0" alt="装修网"></a>
            <p>微信扫一扫&nbsp;&nbsp;装修没烦恼</p>
        </div>
    </div>
</div>
