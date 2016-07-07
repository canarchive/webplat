<?php
use yii\helpers\Url;

$currentNav = isset($this->params['currentNav']) ? $this->params['currentNav'] : 'index';
?>
<!-- 兔狗主页导航栏 -->
<nav class="tugou-new-nav">
    <div class="nav-body">
        <ul>
            <li class="nav-logo">
                <a href="/"><span></span></a>
            </li>
            <li class="nav-cell" data-id="index">
			    <a href="<?= Url::to(['/house/site/index', 'company_code' => Yii::$app->params['currentCompany']['code']]); ?>">首页</a>
            </li>
            <li class="nav-cell" data-id="meitu">
				<a href="<?= Url::to(['/house/sample/index']); ?>">装修案例</a>
            </li>
            <li class="nav-cell" data-id="realcase">
				<a href="<?= Url::to(['/house/realcase/index']); ?>">实景作品</a>
            </li>
            <li class="nav-cell" data-id="provider">
				<a href="<?= Url::to(['/house/decoration-company/index']); ?>">装修公司</a>
            </li>
            <li class="nav-cell" data-id="keeper">
			    <a href="<?= Url::to(['/house/feature/index', 'view' => 'yanfang']); ?>">免费服务</a>
            </li>
        </ul>
        <div class="nav-mobile">
            <span data-icon="mobile"></span>
            <span role="desc">移动端窝窝家</span>
            <div class="dim-code">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/wechat.jpg" border="0" alt="装修网">
                <p>窝窝家官方微客服</p>
            </div>
        </div>
    </div>
</nav>
