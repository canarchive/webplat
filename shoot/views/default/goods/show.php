<?php
use yii\helpers\Url;

$this->params['cssFiles'] = ['styles_show'];
$this->params['jsFiles'] = ['my/jquery-1.9.1.min'];

$controllerForJs = isset($this->params['controllerForJs']) ? $this->params['controllerForJs'] : '';
?>
<script>
    var Yo = Yo || {};

    Yo.base_url = "";

    Yo.config = {
        product_id: 362,
        product_url: "",
        account_url: "",
        countdown_start: '',
        countdown_end: ''
    };

    var is_insurance_allowed = true;
</script>

<main class='main-content'>
    <div class='wrapper'>
        <ul class='breadcrumb'>
            <li>
			    <a href='<?= Yii::getAlias('@shooturl'); ?>'>首页<span>/</span></a>
            </li>
            <li>
			    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['goods/list']); ?>'>
                    商品列表<span>/</span>
                </a>
            </li>
			<li><?= $info['name']; ?></li>
        </ul>
    </div>

    <?php echo $this->render('_show_base', ['info' => $info]); ?>
    <div class="product-related">
        <div class="wrapper">
            <div class="related-tabs">
                <ul class="clearfix tabs" data-bind="related"></ul>
            </div>
            <div class="related-view" data-tab="related"></div>
        </div>
    </div>
    <?php echo $this->render('_show_content', ['info' => $info, 'sampleInfos' => $sampleInfos]); ?>
</main>
<!--<div class="purchase-advisory">
    <a href="" target="_blank" id="advisory">
        购机咨询
    </a>
</div>-->
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/show/global.min.js?20150820191148"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/show/opposhop.min.js?20160411163101"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/show/main.min.js?20160126153544"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/show/product.min.js?20160408172651"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/login.js?v=20160126153544"></script>
<script>
$(window).on('load',
function() {
    var stickyBuy = new Yo.Product.stickyBuy();
});
</script>
<script type="text/javascript">
$(function() {
    Yo.Product.swipe('product-swipe');
    Yo.Product.initCarousel();
    Yo.Product.initAmount();

    var Related = new Yo.Product.Related();

    //var Comments = Yo.Product.Comments = new Yo.Product.Comments(362, '#comments', '#comments-pagination', '#respond');

    Yo.Product.Tabs();

    Yo.Product.Tab.on('tab',
    function(tab) {
        var $tab = tab['tab'];

        $tab.parent().find('li').removeClass('clicked');

        if (!$tab.hasClass('clicked')) {
            $tab.addClass('clicked');

            var top = $('.product-view').offset().top || 0;

            $('html, body').animate({
                scrollTop: top
            },
            500);
        }

        if ($tab.data('hash') == 'comments' && !$tab.data('trigger')) {
            $tab.data('trigger', true);

            //Comments.render();
        }
    });
    if ($('#product-tabs').find('li').length == 1 && $('#product-tabs').find('li').data('hash') == 'comments') {
        //Comments.render();
    }

    //new Yo.Product.Suits();
});
</script>
