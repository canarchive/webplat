<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'index', 'components/bxslider',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['friendLink'] = true;
$this->params['formPosition'] = 'index';
$this->params['formPositionName'] = '首页量房';
$this->context->mobileMappingUrl = Url::to(['/house/mobile-site/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>

<div class="main-cont">
    <!-- sss -->
    <!--报名 轮播部分-->
    <?php echo $this->render('_signup_slice', []); ?>
    <!--找装修公司 388主材包 一口价模块-->
    <?php echo $this->render('_product', []); ?>
    <!--服务保障-->
    <?php echo $this->render('_service', []); ?>
    <!--实景作品-->
    <?php echo $this->render('_realcase', ['infos' => $realcaseInfos]); ?>
    <!--直播工地-->
    <?php echo $this->render('_working', ['infos' => $workingInfos]); ?>
    <!--最新签约-->
    <?php //echo $this->render('_newowner', []); ?>
    <!--装修效果图-->
    <?php echo $this->render('_sample', ['infos' => $sampleInfos]); ?>
    <!--装修经验-->
    <?php //echo $this->render('_experience', []); ?>
    <!--PK-->
    <?php echo $this->render('_pk', []); ?>
    <!--服务流程-->
    <?php echo $this->render('_service_flow', []); ?>
</div>
<!--首页底部浮动报名条-->
<?php echo $this->render('../common/_signup', ['type' => 'index-bottom', 'positionName' => '首页底部']); ?>
