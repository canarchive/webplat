<?php
$this->params['inSpread'] = true;
$this->params['bodyClass'] = 'bg-f2';
$this->params['formPosition'] = 'hd-baojia';
$this->params['formPositionName'] = '活动推广-报价';
?>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/h5_common.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/h5_icon_font.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/swiper.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/common.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/icon_font.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/mycom_part.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/css/decoration-budget.css?v=1">

<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/js/jquery-1.11.3.min.js"></script>
<header class="cWhite cMdGray clearfix">
    <div class="tit_top">
        <div class="left">
			<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/images/logo.png" alt="一起装修网">
        </div>
        <div class="f12 text_tit">
		    <p>找装修公司就选<?= Yii::$app->params['siteNameBase']; ?></p>
        </div>
    </div>
</header>
<!-- 正文 start -->
<div class="container" data-page="budget-index">
    <!-- 标题栏 start -->
    <a href="#"><img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/images/baojia-banner.jpg" alt=""></a>
    <div class="mask-layer1 zp-mask-layer1"></div>
    <!-- 标题栏 end -->
    <!-- 表格视图-->
    <ul class="msg-list pd-lr4 msg-list-icon bg-ff border-bottom" id="formStart">
        <li>
            <a data-target="zp-decoration-city">
                <i class="media-object iconfont icone684 l"></i>
                <label class="title">所在地区 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="dib r mr4 zp-city" id="selectcity">点击选择</span></a>
        </li>
        <li class="zp-area-focus">
            <a>
                <i class="media-object iconfont icone682 l"></i>
                <label class="title">房屋面积 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input id="txtarea" class="input-nounit zp-input1" type="tel" value="" placeholder="请输入您的房屋面积" />
                    <em class=" m2-unit hide zp-m-unit1">m
                        <i>2</i>
                    </em>
                </span>
            </a>
        </li>
        <li class="mobile-li zp-phone-focus">
            <a class="zp-tap-mobile">
                <i class="media-object iconfont icone665 l"></i>
                <label class="title">您的手机 :</label>
                <i class="iconfont icone60c r"></i>
                <span class="list-input-box">
                    <input id="txtmobile" class="input-nounit input_mobile" type="tel" value="" placeholder="输入手机号码接收报价结果" /></span>
            </a>
        </li>
        <input type="hidden" id="user_tel" value="" />
        <input type="hidden" id="info_id" value="1" />
        <input type="hidden" id="form_type" value="hd-liangfang" />
        <li class="last">
            <a id="ksjs" href="javascript:;" class="btn btn-block btn-orange btn-line f16 mt3 mb3 zp-btn-price">开始计算</a>
        </li>
    </ul>
    <div class="pd-lr4 bg-ff mt3 border-top border-bottom">
        <p class="msg-title border-bottom text-center f16">装修预算约
            <span class="cRed ml3 mr3 price-all">0</span>万元</p>
        <ul class="msg-list cGray">
            <li>
                <span class="w-25">卧室</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-shi">0</strong>元</span>
                <span class="w-25">客厅</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-ting">0</strong>元</span></li>
            <li>
                <span class="w-25">厨房</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-chu">0</strong>元</span>
                <span class="w-25">卫生间</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-wei">0</strong>元</span></li>
            <li>
                <span class="w-25">阳台</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-yangtai">0</strong>元</span>
                <span class="w-25">其他</span>
                <span class="w-25">
                    <strong class="cMdGray fN ml3 mr3 price-other">0</strong>元</span></li>
            <li class="text-center last"></li>
        </ul>
        <ul class="tips-info cGray mb3">
            <li>
                <i class="iconfont icone69c cOrange mr2 fl f16"></i>本价格为毛坯房半包估算价格（不含水电报价），旧房价格由实际工程量决定。</li>
            <li class="mt2">
                <i class="iconfont icone69c cOrange mr2 fl f16"></i>稍后装修管家将致电您，为您提供免费装修咨询服务。</li>
            <li class="text-center last"></li>
        </ul>
    </div>
    <a style="display: none" class="cGBlue block-more f16 no-bg" href="/baojia/b0a0o0/">点击查看其他人的报价
        <i class="iconfont icone60c"></i></a>
    <!-- 表格视图end-->
    <!-- 城市选择 start-->
    <div id="zp-decoration-city" class="fixed-bottom-list hide box-tag3 zp-brother ">
        <ul>
            <li>
                <a class="active" href="javascript:;">北京</a>
                <a href="javascript:;">上海</a>
                <a href="javascript:;">石家庄</a>
                <a href="javascript:;">天津</a>
                <a href="javascript:;">哈尔滨</a>
                <a href="javascript:;">成都</a>
                <a href="javascript:;">武汉</a>
                <a href="javascript:;">西安</a>
                <a href="javascript:;">大连</a>
                <a href="javascript:;">济南</a>
                <a href="javascript:;">杭州</a>
                <a href="javascript:;" class="other">
                    <select class="select" name="" id="">
                        <option value="">其他城市</option>
                        <option value="安徽">安徽</option>
                        <option value="重庆">重庆</option>
                        <option value="福建">福建</option>
                        <option value="广西">广西</option>
                        <option value="贵州">贵州</option>
                        <option value="广东">广东</option>
                        <option value="甘肃">甘肃</option>
                        <option value="海南">海南</option>
                        <option value="湖北">湖北</option>
                        <option value="河南">河南</option>
                        <option value="河北">河北</option>
                        <option value="湖南">湖南</option>
                        <option value="江苏">江苏</option>
                        <option value="吉林">吉林</option>
                        <option value="江西">江西</option>
                        <option value="黑龙江">黑龙江</option>
                        <option value="辽宁">辽宁</option>
                        <option value="宁夏">宁夏</option>
                        <option value="澳门">澳门</option>
                        <option value="内蒙古">内蒙古</option>
                        <option value="山东">山东</option>
                        <option value="山西">山西</option>
                        <option value="台湾">台湾</option>
                        <option value="西藏">西藏</option>
                        <option value="香港">香港</option>
                        <option value="新疆">新疆</option>
                        <option value="云南">云南</option>
                        <option value="浙江">浙江</option>
                        <select></a>
            </li>
        </ul>
    </div>
</div>
<!-- 正文 end -->
<script data-main="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/js/main.js?v=1" src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/baojia/js/require.js?v=1"></script>
