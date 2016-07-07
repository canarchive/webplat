<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'pages/provider/index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'lib/bootstrap.carousel',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;
//'中博装饰|【中博】杭州中博装饰工程有限公司-杭州兔狗官网';
//'中博装饰,【中博】杭州中博装饰工程有限公司,杭州兔狗官网';
//'中博装饰是杭州兔狗官网提供的装修设计公司。中博装饰免费为广大杭州业主提供专业的验房、设计、监理服务。了解中博装饰怎么样？速上杭州兔狗官网！';

$infos[] = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
$this->params['showPage'] = true;
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/lib/apply-form.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/components/arrow.css">
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-nav.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-common.css" />
<link type="text/css" rel="stylesheet" href="http://static.tugou.com/css/provider/pd-index.css" />
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-common.js"></script>
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-index.js"></script>
<div class="pd-header">
    <?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
    <!-- <div class="pd-for-nav"></div> -->
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
        <a href="/">首页</a>
        <span class="sep">&gt;</span>
        <a href="/provider/">杭州装修公司</a>
        <span class="sep">&gt;</span>
        <a href="/provider/92/">
            <span class="btn-crumbs">中博装饰
                <i class="i-del"></i></span>
        </a>
    </div>
    <section class="pd-h-header">
        <div class="pd-hh-logo">
            <img src="http://pic.tugou.com/provider/1450923590_735233.jpeg" alt="中博装饰" class="pd-logo">
            <p class="pd-btn-design pd-btn free-order-pop">免费设计与报价</p>
            <p class="pd-hh-usercount">已服务&nbsp;&nbsp;
                <a>3620</a>&nbsp;&nbsp;位业主</p>
        </div>
        <div class="pd-hh-desc">
            <div class="pd-name">
                <h1>中博装饰</h1></div>
            <div class="pd-current">
                <p>
                    <span class="pd-icon pd-icon-house">&nbsp;</span>实景作品:
                    <a class="pd-current-cnt">4</a></p>
                <p>
                    <span class="pd-icon pd-icon-carry"></span>直播工地:
                    <a class="pd-current-cnt">4</a></p>
            </div>
            <p class="pd-introduction">打造全环保精装品牌，浙江省连续10年环保抽检合格！</p></div>
        <div class="pd-hh-cert">
            <p class="pd-hc-item">
                <span class="pd-icon pd-icon-bao"></span>保障金先行赔付</p>
            <p class="pd-hc-item">
                <span class="pd-icon pd-icon-zheng"></span>施工资质权威认证</p>
            <p class="pd-hc-item">
                <span class="pd-icon pd-icon-huan"></span>环保用材，绿色施工</p>
            <p class="pd-contact">
                <span class="pd-icon pd-icon-phone"></span>预约热线</p>
            <a class="pd-contact">400-8617-000</a></div>
    </section>
</div>
<section class="pd-main">
    <div class="pd-main-body">
        <div class="pd-m-nav-box">
            <ul class="pd-m-nav">
                <li class="pd-nav-item pd-btn active" target="pd-index">
                    <a href="/provider/92/">首页</a>
                    <span class="pd-caret-down"></span>
                    <a href="/provider/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-realcase">
                    <a href="/realcase/92/">实景作品</a>
                    <span class="pd-caret-down"></span>
                    <a href="/realcase/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-buildfield">
                    <a href="/site/92/">直播工地</a>
                    <span class="pd-caret-down"></span>
                    <a href="/site/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-designer">
                    <a href="/design/92/">设计师</a>
                    <span class="pd-caret-down"></span>
                    <a href="/design/92/" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-selfintro">
                    <a href="/provider/92/tro.html">品牌简介</a>
                    <span class="pd-caret-down"></span>
                    <a href="/provider/92/tro.html" class="pd-nav-link"></a>
                </li>
            </ul>
        </div>
        <?php echo $this->render('_showindex', []); ?>
        <?php echo $this->render('_realcase', []); ?>
        <?php echo $this->render('_working', []); ?>
        <?php echo $this->render('_designer', []); ?>
        <?php echo $this->render('_baseinfo', []); ?>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<?php echo $this->render('../common/_pop_mask', []); ?>
<style type="text/css">
.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }
</style>
