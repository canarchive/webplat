<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'pages/meitu/common',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
?>
<style rel="stylesheet">
.page_header img, .page_footer img { display: inline; } 
.page_header, .page_footer_links { font-size: 12px; }
</style>
<script type="text/javascript">
$(function() {
    setCookie('page_flag', 'meitu');
});
</script>
<div class="wp">
    <div class="cont">
        <div class="main">
            <div class="crumbs">
                <a href="/">首页</a><span class="sep">&gt;</span>
				<a href="<?= Url::to(['/house/sample/index']); ?>">装修案例</a><span class="sep last">&gt;</span>
                <span class="sep">&gt;</span>
				<?php if (!empty($filterInfos['currentHouseType']) && isset($filterInfos['houseTypes'][$filterInfos['currentHouseType']])) { ?>
				<a href="<?= Url::to(['/house/sample/filter', 'house_type' => 'all', 'style' => $filterInfos['currentStyle']]); ?>"><span class="btn-crumbs"><?= $filterInfos['houseTypes'][$filterInfos['currentHouseType']]; ?><i class="i-del"></i></span></a>
                <?php } ?>
				<?php if (!empty($filterInfos['currentStyle']) && isset($filterInfos['styles'][$filterInfos['currentStyle']])) { ?>
				<a href="<?= Url::to(['/house/sample/filter', 'house_type' => $filterInfos['currentHouseType'], 'style' => 'all']); ?>"><span class="btn-crumbs"><?= $filterInfos['styles'][$filterInfos['currentStyle']]; ?><i class="i-del"></i></span></a>
                <?php } ?>
            </div>
            <?php echo $this->render('_filter', $filterInfos); ?>
            <div class="showlist">
                <ul class="showlist-ul clearfix">
                    <?php foreach ($infos as $info) { ?>
                    <li>
                        <div class="pictxtbox">
                            <div class="ptx-img">
							    <a href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>" target="_blank">
								    <img src="<?= $info['thumb']; ?>" alt="<?= $info['name']; ?>" />
									<span>7张</span>
                                </a>
                                <div class="handler hand_new">
                                    <a class="handler-design" href="javascript:;">免费户型设计</a>
									<a class="handler-price" href="javascript:;">免费获取报价</a>
                                </div>
                            </div>
                            <div class="ptx-info">
                                <h4 class="ptx-name">
                                    <i class="i-save"></i>
									<a href="<?= Url::to(['/house/sample/show', 'id' => $info['id']]); ?>" target="_blank" title="<?= $info['name']; ?>"><?= $info['name']; ?></a>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!--<div class="page">
                <p>
                    <a class="btnpage on">1</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_2/">2</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_3/">3</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_4/">4</a>
                    <a class="btnpage" href="http://meitu.tugou.com/case/p_5/">5</a>
                    <a href="http://meitu.tugou.com/case/p_2/">下一页</a>
                    <a href="http://meitu.tugou.com/case/p_54/">末页</a>
                </p>
            </div>-->
        </div>
    </div>
</div>
<div class="pop hide">
    <div class="popmain">
        <div class="popform apply_form">
            <h3>
                <!--免费获取报价--></h3>
            <p class="pop-tip">
                <!--10秒轻松获取3套报价方案--></p>
            <input name="apply_type" type="hidden" value="18" />
            <input name="item_id" type="hidden" value="" />
            <input class="inptxt" name="name" type="text" placeholder="您的姓名" />
            <input class="inptxt" name="phone" type="text" placeholder="手机号码" />
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input class="btn" name="apply" type="button" value="立即预约" />
            <!--<p style="line-height: 20px; color: #999;">注：每户业主可同时获取3份设计比较，挑选适合方案后个性化修改</p>--></div>
        <a class="btn-popclose" href="javascript:;" onclick="hidePopMask($('.pop'));">关闭</a></div>
</div>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
    })</script>

<script type="text/javascript" src="http://static.tugou.com/js/meitu.js"></script>
<script type="text/javascript">$(function() {
        bindPopupForm($('.handler a'));
        bindFilter();
    });</script>
<?php echo $this->render('../common/_signup', []); ?>
