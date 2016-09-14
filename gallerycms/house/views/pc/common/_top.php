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
			<span class="border">找装修公司就上<?= Yii::$app->params['siteNameBase']; ?></span>
        </div>
        <ul class="login fn-right" id="roof-nav">
            <!--<li id="login-link" class="word hide no-icon">
				<a href="/passport/UserLogin/">登录</a>
            </li>
            <li id="register-link" class="hide no-icon">
				<a href="/passport/UserRegister/">免费注册</a>
            </li>-->
            <li id="phone-link" class="phone">
                <a href="javascript: void(0);" target="_blank">关注官方微信号</a>
                <div class="code">
				<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" border="0" alt="装修网">
                    <p>关注官方微信号</p>
                </div>
            </li>
            <li class="number">
			    <a><?= Yii::$app->params['currentCompany']['hotline']; ?></a>
            </li>
        </ul>
    </div>
</div>
