<?php
use yii\helpers\Url;

$cssFiles = ['styles_member'];
$jsFiles = ['modernizr.custom'];
$returnUrl = isset($this->params['returnUrl']) ? $this->params['returnUrl'] : '';
?>
<?php echo $this->render('@shoot/views/default/common/_header_base', ['cssFiles' => $cssFiles, 'jsFiles' => $jsFiles]); ?>
<header class='main-header login-header'>
    <?= $this->render('@shoot/views/default/common/_header_upper_area'); ?>
    <div class='bottom-area'>
        <div class='wrapper'>
            <a class='js-open-menu oppo-tj' data-tj="account|link|auth|openmenu" href='#'>
                <i class='js-open-menu-bar'>
                </i>
            </a>
            <div class='login-home'>
                <a href='<?= Yii::getAlias('@shooturl'); ?>' class='oppo-tj' data-tj="account|link|auth|home">
                    <span class='icons-plus icons-plus-home'></span>
                    <span>回到首页</span>
                </a>
                <a href='<?= Url::to(['site/signin', 'returnUrl' => $returnUrl]); ?>' class=' oppo-tj'>
                    <span class='icons-plus icons-plus-user'></span>
                    <span>登录</span>
                </a>
                <a href='<?= Url::to(['site/signup', 'returnUrl' => $returnUrl]); ?>' class=' oppo-tj'>
                    <span class='icons-plus icons-plus-user'></span>
                    <span>注册</span>
                </a>
            </div>
            <div class='logo'>
                <a href='<?= Yii::getAlias('@shooturl'); ?>'>
				    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/oppo_logo.png" alt="">
                </a>
            </div>
            <a class='js-open-user oppo-tj' data-tj="account|link|auth|openusermenu" href='#'>
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-menu-user.png" alt="">
            </a>
            <div class='login-breadcrumb'>登录SHOOT帐号</div>
            <?= $this->render('@shoot/views/default/common/_header_menu'); ?>
        </div>
    </div>
    <?= $this->render('@shoot/views/default/common/_header_search'); ?>
</header>
<main class="main-content slab-light">
    <?= $content; ?>
</main>
<?php echo $this->render('@shoot/views/default/common/_footer'); ?>
<?php echo $this->render('@shoot/views/default/common/_nav_right'); ?>

<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/jquery-1.9.1.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/custom_form.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/responsive.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/scripts.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/account.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/login.js"></script>
<script type="text/javascript">
var vm;
SHOOT.conf.BASE_URL = "<?= Yii::getAlias('@shooturl'); ?>";
SHOOT.conf.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
SHOOT.conf.ACCOUNT_URL = '<?= Yii::getAlias('@passporturl'); ?>';
SHOOT.conf.domains = [];
SHOOT.conf.jsonpDone = false;
SHOOT.conf.domains.push('http://www.opposhop.cn');
SHOOT.conf.domains.push('http://bbs.oppo.cn');
SHOOT.conf.domains.push('http://bbs.coloros.com');

SHOOT.conf.wxdomains = [];
SHOOT.conf.wxdomains.push('http://www.opposhop.cn');

(function() {
    var controllerNameWithAction = "AuthController@register".split('@');
    var controllerName = controllerNameWithAction[0];
    var actionName = controllerNameWithAction[1];
    var controller = SHOOT.controller[controllerName];
    if (controller) {
        action = controller()[actionName];
        if (action) {
            $(function() {
                vm = action();
            });
        }
    }
    // else console.log(controllerNameWithAction);
})();
</script>
<?php echo $this->render('@shoot/views/default/common/_footer_base'); ?>
