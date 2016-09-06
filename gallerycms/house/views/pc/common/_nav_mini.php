<?php
use yii\helpers\Url;

$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<!-- 主页导航栏 -->
<nav class="tugou-new-nav">
    <div class="nav-body">
        <ul>
            <li class="nav-logo">
			<a href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>"><span></span></a>
            </li>
			<li class="nav-cell <?php if ($currentNav == 'index') { echo 'active'; } ?>" data-id="index">
			    <a href="<?= Url::to(['/house/site/home', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">首页</a>
            </li>
			<li class="nav-cell <?php if ($currentNav == 'sample') { echo 'active'; } ?>" data-id="meitu">
				<a href="<?= Url::to(['/house/sample/index', 'page' => 1, 'tag' => '']); ?>">装修案例</a>
            </li>
			<li class="nav-cell <?php if ($currentNav == 'realcase') { echo 'active'; } ?>" data-id="realcase">
				<a href="<?= Url::to(['/house/realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">实景作品</a>
            </li>
			<li class="nav-cell <?php if ($currentNav == 'company') { echo 'active'; } ?>" data-id="provider">
				<a href="<?= Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修公司</a>
            </li>
			<li class="nav-cell <?php if ($currentNav == 'free') { echo 'active'; } ?>" data-id="keeper">
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'kaopu', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">装修服务</a>
            </li>
        </ul>
        <div class="nav-mobile">
            <span data-icon="mobile"></span>
            <span role="desc">关注官方微信号</span>
            <div class="dim-code">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" border="0" alt="装修网" width="103px" height="103px">
                <p>关注官方微信号</p>
            </div>
        </div>
    </div>
</nav>
