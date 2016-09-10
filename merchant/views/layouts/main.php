<?php
use yii\helpers\Url;

?>
<?php $this->beginContent('@merchant/views/layouts/main-base.php'); ?>
<div class="off-canvas-wrap">
    <div class="inner-wrap">
        <div class="index-header">
            <div class="header hide-for-small">
                <div class="row doc-width">
                    <div class="small-12 columns">
                        <div class="logo">
							<a href="<?= Yii::getAlias('@merchanturl'); ?>" title="返回首页">tuanjiahui</a>
                        </div>
                        <div class="menu right">
                            <?php if (Yii::$app->user->isGuest) { ?>
						    <a href="<?= Url::to(['/site/signin']); ?>" class="button tiny radius success" title="登录">登录</a>
							<a href="<?= Url::to(['/site/signup']); ?>" class="button tiny radius info" title="注册tuanjiahui会员">注册</a>
                            <?php } else { ?>
                            <span class="is-login">
							    <a href="<?= Url::to(['/info/index']); ?>" class="button radius success tiny" title="进入管理中心">进入管理中心</a>
                            </span>
                            <?php } ?>
                        </div>
                        <nav class="nav right">
						    <a href="<?= Yii::getAlias('@merchanturl'); ?>" title="首页" class="active">首页</a>
							<a href="<?= Url::to(['/document/index']); ?>" title="Tuanjiahui平台使用指南">使用指南</a>
                        </nav>
                    </div>
                </div>
            </div>
            <header class="header-mini show-for-small">
                <div class="left logo"><a href="<?= Yii::getAlias('@merchanturl'); ?>"></a></div>
                <div class="menu right">
                    <a href="#" class="right-off-canvas-toggle"><i class="fa fa-bars"></i></a>
                </div>
            </header>
            <aside class="right-off-canvas-menu side-panel">
                <?php if (!Yii::$app->user->isGuest) { ?>
                <div class="user-block"><span class="name">iamwangcan</span></div>
                <?php } ?>
                <nav class="nav">
                    <ul class="nav-list">
                        <li>
						    <a href="<?= Yii::getAlias('@merchanturl'); ?>" title="首页">首页</a>
                        </li>
                        <li>
						<a href="<?= Url::to(['/document/index']); ?>" title="Tuanjiahui平台使用指南">使用指南</a>
                        </li>
                        <?php if (Yii::$app->user->isGuest) { ?>
                        <li>
							<a href="<?= Url::to(['/site/signin']); ?>" class="button small radius success expand" title="登录">登录</a>
                        </li>
                        <li>
							<a href="<?= Url::to(['/site/signup']); ?>" class="button small radius info expand" title="注册tuanjiahui会员">注册</a>
                        </li>
                        <?php } else { ?>
						<li><a href="<?= Url::to(['/info/index']); ?>" class="button radius success small expand" title="进入管理中心">进入管理中心</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </aside>
        </div>
        <?= $content; ?>
        <footer class="footer">
            <div class="row site-width">
                <div class="small-12 columns">
                    <div class="footer-inner">
                        <div class="bottom-link">
						    <a href="<?= Yii::getAlias('@gallerycmsurl') . '/info-aboutus.html'; ?>" title="关于我们">关于我们</a>
							<a href="<?= Url::to(['/document/index', 'code' => 'yszc']); ?>" title="隐私政策">隐私政策</a>
							<a href="<?= Url::to(['/document/index', 'code' => 'fwtk']); ?>" title="隐私政策">隐私政策</a>
                        </div>
                        <div class="company-info ">
                            <div class="footer-tips ">
							    <span class="bottom-tips">客服热线 <?= Yii::$app->params['siteHotline']; ?> &nbsp;</span>
								<span class="bottom-tips">客服工作时间 9:00-18:00（周日和节日除外）</span>
							</div>
							<a href="javascript: void(0);"><?= Yii::$app->params['siteIcpInfo']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="exit-off-canvas"></a>
    </div>
</div>
<?php $this->endContent(); ?>
