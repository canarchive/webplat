<?php
use yii\helpers\Url;
?>
<!--底部-->
<div class="footer">
    <div class="border">
        <div class="four-good main-cont">
            <div class="item1">
                <p>好设计</p>
                <p>精品设计，极致体验</p>
            </div>
            <div class="item2">
                <p>好材料</p>
                <p>环保主材，品质保障</p>
            </div>
            <div class="item3">
                <p>好施工</p>
                <p>标准工艺，细节严苛</p>
            </div>
            <div class="item4">
                <p>好服务</p>
                <p>权威监理，全程监控</p>
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
		            <a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">免费量房</a>
		            <a href="<?= Url::to(['/house/feature/index', 'view' => 'sheji', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">免费设计</a>
		            <a href="<?= Url::to(['/house/feature/index', 'view' => 'baojia', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" target="_blank">免费报价</a>
                </div>
            </div>
        </div>
        <div class="item contact fn-right">
            <p>客服热线：
				<span><?= Yii::$app->params['siteHotline']; ?></span>
            </p>
            <p>商家合作：
				<span><?= Yii::$app->params['siteJoinusTel']; ?></span>
            </p>
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3237822793&site=qq&menu=yes">在线咨询</a>
			<!--<a onclick="nTalk.im_openInPageChat();">在线咨询</a>-->
        </div>
        <div class="item code fn-right">
            <a>
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" border="0" alt="装修网"></a>
            <p>微信扫一扫&nbsp;&nbsp;装修没烦恼</p>
        </div>
    </div>
</div>
