<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'pages/index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'lib/bootstrap.carousel',
];
$this->params['controllerForJs'] = 'ProductsController@index';
$this->params['friendLink'] = true;

?>
</script>
<script type="text/javascript">
$(function() {
        setCookie('page_flag', 'index');
    });</script>
<style type="text/css">*{ padding: 0; margin: 0; } body{ font-family: "微软雅黑"; } /*success*/ .success{ width: 100%; background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/success-bg.jpg) no-repeat center top; } .success-con{ position: relative; width: 980px; height: 678px; margin: 0 auto; } .success-face{ width: 450px; height: 65px; background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/success-face.png) no-repeat left; } .success-text{ font-size:26px; color:#ff8c1b; padding-left: 85px; } .beizhu{ font-size: 14px; color: #ff8c1b; padding-left: 85px; } .success-gj{ position: absolute; width: 628px; font-size: 14px; left: 84px; top: 315px; text-align: center; color: #009973; } .ewm{ position: absolute; right: 193px; top: 160px; width: 163px; height: 339px; background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/ewm-bg.png) no-repeat center; } .ewm img{ margin: 109px 0 0 28px; } .ewm-zcb{ position: absolute; right: 90px; top: 160px; width: 347px; height: 345px; background: url(<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/ewm-bg-zcb.png) no-repeat left top; display: none; } .ewm-zcb img{ margin: 84px 0 0 82px; } .ewm-zcb p{ color: #444; font-size: 18px; } .ewm-zcb p span{ color: #ea6d23; } .ewm-zcb .ewm-title{ font-size: 24px; margin-top: 100px; } /*side*/ .sc-body{ margin-left:100px; padding-top:240px; font-size:14px; color:#00b1b7; } .sc-welcome{ font-size: 55px;color:#00b1b7; } .return-index{ color:#fff; display: inline-block; font-size: 20px; background-color: #00b1b7; text-decoration: none; text-align: center; padding:10px 80px; margin-top: 43px; margin-left: 50px; } .sc-hotline{ color:#444; margin:10px 0 0 95px; }</style></head>

<!--start success-->
<div class="success">
    <div class="success-con">
        <div class="sc-body">
            <div class="success-face">
                <p class="success-text">成功预约免费验房服务</p>
                <p class="beizhu">装修管家将在24小时之内联系您，请保持电话通畅哦！</p></div>
            <a class="return-index" href="javascript:history.go(-1)">返回上页</a>
			<p class="sc-hotline">咨询热线：<?= Yii::$app->params['siteHotline']; ?></p></div>
        <div class="ewm"></div>
    </div>
</div>
<!--end success-->
<script>
//获取url中的参数
/*$(function() {
    if (window.location.pathname == "/order/success/type/23/") {
        $(".ewm").hide();
        $(".ewm-zcb").show();
    }
});*/
</script>
