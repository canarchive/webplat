<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;

//$info = ['id' => 1, 'name' => '可猛的装修公司', 'address' => '北京中南海'];
$this->params['showPage'] = true;
?>
<div class="pd-header">
    <?php echo $this->render('../common/_nav_mini', []); // 内容页顶部 ?>
    <!-- <div class="pd-for-nav"></div> -->
    <!-- 面包屑导航主页样式 -->
    <div class="crumbs">
        <a href="/">首页</a><span class="sep">&gt;</span>
		<a href="<?= Url::to(['/house/decoration-company/index']); ?>">装修公司</a><span class="sep">&gt;</span>
        <a href="javascript:void(0);">
		    <span class="btn-crumbs"><?= $info['name']; ?><i class="i-del"></i></span>
        </a>
    </div>
    <section class="pd-h-header">
        <div class="pd-hh-logo">
			<img src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" class="pd-logo">
            <p class="pd-btn-design pd-btn free-order-pop">免费设计与报价</p>
            <p class="pd-hh-usercount">已服务&nbsp;&nbsp;<a>3620</a>&nbsp;&nbsp;位业主</p>
        </div>
        <div class="pd-hh-desc">
            <div class="pd-name"><h1><?= $info['name']; ?></h1></div>
            <div class="pd-current">
                <p>
                    <span class="pd-icon pd-icon-house">&nbsp;</span>实景作品:
					<a class="pd-current-cnt"><?= count($realcaseInfos); ?></a>
                </p>
                <p>
                    <span class="pd-icon pd-icon-carry"></span>直播工地:
					<a class="pd-current-cnt"><?= count($workingInfos); ?></a>
                </p>
            </div>
			<p class="pd-introduction"><?= $info['brief']; ?></p>
        </div>
        <div class="pd-hh-cert">
            <p class="pd-hc-item"><span class="pd-icon pd-icon-bao"></span>保障金先行赔付</p>
            <p class="pd-hc-item"><span class="pd-icon pd-icon-zheng"></span>施工资质权威认证</p>
            <p class="pd-hc-item"><span class="pd-icon pd-icon-huan"></span>环保用材，绿色施工</p>
            <p class="pd-contact"><span class="pd-icon pd-icon-phone"></span>预约热线</p>
			<a class="pd-contact"><?= Yii::$app->params['siteHotline']; ?></a>
        </div>
    </section>
</div>
<section class="pd-main">
    <div class="pd-main-body">
        <div class="pd-m-nav-box">
            <ul class="pd-m-nav">
                <li class="pd-nav-item pd-btn active" target="pd-index" id="show-index">
                    <a href="javascript: tabChange('index');">首页</a>
                    <span class="pd-caret-down" id="down-index"></span>
                    <a href="javascript: tabChange('index');" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-realcase" id="show-realcase">
                    <a href="javascript:tabChange('');">实景作品</a>
                    <span class="pd-caret-down" id="down-realcase"></span>
                    <a href="javascript: tabChange('realcase');" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-buildfield" id="show-working">
                    <a href="javascript:tabChange('working');">直播工地</a>
                    <span class="pd-caret-down" id="down-working"></span>
                    <a href="javascript:tabChange('working');" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-designer" id="show-designer">
                    <a href="javascript:tabChange('designer');">设计师</a>
                    <span class="pd-caret-down" id="down-designer"></span>
                    <a href="javascript:tabChange('designer');" class="pd-nav-link"></a>
                </li>
                <li class="pd-nav-item pd-btn" target="pd-selfintro" id="show-baseinfo">
                    <a href="javascript:tabChange('baseinfo');">品牌简介</a>
                    <span class="pd-caret-down" id="down-baseinfo"></span>
                    <a href="javascript:tabChange('baseinfo');" class="pd-nav-link"></a>
                </li>
            </ul>
        </div>
        <?php echo $this->render('_showindex', ['info' => $info, 'workingInfos' => $workingInfos, 'realcaseInfos' => $realcaseInfos]); ?>
        <?php echo $this->render('_realcase', ['infos' => $realcaseInfos]); ?>
        <?php echo $this->render('_working', ['infos' => $workingInfos]); ?>
        <?php echo $this->render('_designer', ['infos' => $designerInfos]); ?>
        <?php echo $this->render('_baseinfo', ['info' => $info]); ?>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<?php echo $this->render('../common/_pop_mask', []); ?>
<style type="text/css">
.beian{ width: 15px; height: 15px; display: inline-block; background: url(http://img.tugou.com/index/footer-beian.png) no-repeat; background-size: 100%; position: relative; top: 2px; }
</style>
<script>
function tabChange(elem)
{
	$('.pd-m-nav>li>span').hide();
	$('.pd-m-nav>li').removeClass('active');
	$('#down-' + elem).show();
	$('#show-' + elem).addClass('active');

	var elems = ['index', 'realcase', 'working', 'designer', 'baseinfo'];
	elems.forEach(function(e) {  
		$('#content-' + e).hide();
	});
	$('#content-' + elem).show();
}
tabChange('index');
</script>
