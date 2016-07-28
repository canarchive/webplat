<?php
use yii\helpers\Url;

?>
<div class="roof">
    <div class="content clearfix">
        <div class="fn-left">
            <span class="address fn-left">&nbsp;</span>
			<span class="fn-left" id="current_city"><?= Yii::$app->params['currentCompany']['name']; ?></span>
            <div class="check-address fn-left">切换城市
                <div class="cities-list">
                    <dl>
                        <!--<dt>[A-E]</dt>-->
                        <dd>
                            <?php foreach (Yii::$app->params['companyInfos'] as $info) { ?>
							<a href="<?= Url::to(['/house/site/home', 'city_code' => $info['code_short']]); ?>" title="<?= $info['name_full']; ?>"><?= $info['name']; ?>站</a>
                            <?php } ?>
                    </dl>
                </div>
            </div>
			<span class="border">全国领先互联网家装平台</span>
        </div>
        <ul class="login fn-right" id="roof-nav">
            <!--<li id="login-link" class="word hide no-icon">
				<a href="http://www.tugou.com/passport/UserLogin/">登录</a>
            </li>
            <li id="register-link" class="hide no-icon">
				<a href="http://www.tugou.com/passport/UserRegister/">免费注册</a>
            </li>-->
            <li id="phone-link" class="phone">
                <a href="javascript: void(0);" target="_blank">移动端窝窝家</a>
                <div class="code">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" border="0" alt="装修网">
                    <p>窝窝家官方微客服</p>
                </div>
            </li>
            <li class="number">
			    <a><?= Yii::$app->params['currentCompany']['hotline']; ?></a>
            </li>
        </ul>
    </div>
</div>
