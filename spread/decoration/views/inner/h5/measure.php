<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>免费量房</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/css/common.css?v=1">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/css/icon_font.css?v=1">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/css/free_design.css?v=1">

<script>
window.signupUrl = '<?= Yii::getAlias('@web'); ?>';
</script>
</head>

<body class="lf-body">
    <!--页头 start-->
    <header class="cWhite cMdGray ">
        <div class="top clearfix">
            <div class="left">
                <a href="/"><img src="http://s1.17house.com/common_h5/images/logo.png" alt="一起装修网"></a>
                <!-- <span class="cMdGray city f14">门店</span> -->
            </div>
            <div class="right">
                <span class="user"><a href="/my/"><img src="http://s1.17house.com/common_h5/images/user.png?v=1" alt="一起装修网"></a></span>
                <button type="button" class="menu menu-animate">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!--页头 end-->
    <!--主导航（默认隐藏） start-->
    <div class="main-nav-icon clearfix">
        <ul>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon.png" alt="首页"></a>
                <span class="f14"><a href="#">首页</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_01.png" alt="看效果图"></a>
                <span class="f14"><a href="#">看效果图</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_02.png" alt="装修流程"></a>
                <span class="f14"><a href="#">装修流程</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_03.png" alt="装修预算"></a>
                <span class="f14"><a href="#">装修预算</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_04.png" alt="选材攻略"></a>
                <span class="f14"><a href="#">选材攻略</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_05.png" alt="现场团购"></a>
                <span class="f14"><a href="#">现场团购</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_06.png" alt="建材家具"></a>
                <span class="f14"><a href="#">建材家具</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_07.png" alt="装修论坛"></a>
                <span class="f14"><a href="#">装修论坛</a></span></li>
            <li>
                <a href="#"><img src="http://s1.17house.com/common_h5/images/icon_08.png" alt="装修App"></a>
                <h3 class="f14"><a href="#">装修App</a></h3></li>
        </ul>
    </div>
    <!--主导航（默认隐藏） end-->
    <!--页面主体 start-->
    <section class="container f16">
        <!--tab 切换 start-->
        <ul class="tab-switch cGray clearfix">
            <li><a href="/design.html"><span class="icon"><i class="iconfont icone618"></i></span>免费设计</a></li>
            <li class="active"><a href="javascript:void(0);"><span class="icon"><i class="iconfont icone698"></i></span>免费量房</a></li>
            <li><a href="/price.html"><span class="icon"><i class="iconfont icone67a"></i></span>免费报价</a></li>
        </ul>
        <!--tab 切换 end-->
        <!--报名 start-->
        <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-01.jpg" alt="免费装修设计">
        <div class="lf-part01-bg pd4">
            <div class="signup bg-ff">
                <ul>
                    <li>
                        <input class="input name" type="text" placeholder="输入您的称呼">
                        <!--<a class="change-city" href="#">石家庄<i class="iconfont icone60d"></i></a>-->
                    </li>
                    <li class="mt3">
                        <input class="input mobile" type="tel" placeholder="输入您的手机号">
                        <p class="error-tips"></p>
                    </li>
                    <li class="mt3"><a href="#" class="btn btn-orange btn-block btn-block tijiao">预约免费上门量房</a></li>
                    <li class="mt3 f18 text-center cGray fB"><i class="iconfont icone64a mr2"></i>400-689-1717</li>
                    <li class="text-center cGray">
                        <div class="txt-box">
                            <div class="bg-line"></div>
                            <div class="title f16">已有<span class="cOrange">14672</span>人申请</div>
                        </div>
                    </li>
                </ul>
            </div>
            <form action="/zhuangxiu/signup" method="post" id="zhaungxiu" data-ajax="false">
                <input type="hidden" value="20" name="sid">
                <input type="hidden" value="0" name="kid">
                <input type="hidden" value="0" name="eid">
                <input type="hidden" value="2" name="cid">
                <input type="hidden" value="19" name="source">
                <input type="text" placeholder="您的称呼" class="realname" name="realname" value="">
                <input type="tel" placeholder="手机号码" name="mobile" value="">
            </form>
        </div>
        <!--报名 end-->
        <!--量房为什么很重要 start-->
        <div class="lf-part02-bg">
            <img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-02.png" alt="量房为什么很重要">
            <ul class="solve-problem cWhite">
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-03.png" alt="1">
                    <p class="ml22">做好量房才可以做到布局合理的房屋规划设计、施工严谨，无差错。</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-04.png" alt="2">
                    <p class="ml22">房屋测量跟你的装修预算的精准有直接关系</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-05.png" alt="3">
                    <p class="ml22">避免误差错误返工、浪费时间与金钱</p>
                </li>
            </ul>
        </div>
        <!-- 量房为什么很重要 end -->
        <!--通常你会遇到那些坎坷 start-->
        <div class="lf-part02-bg">
            <img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-06.png" alt="通常你会遇到那些坎坷">
            <ul class="problem-item cWhite f18">
                <li class="mt5"><i class="line"></i>量房人员迟迟不上门！</li>
                <li class="mt5"><i class="line"></i>测量不准确，装修遇困难！</li>
                <li class="mt5"><i class="line"></i>
                上门后又收钱！</li>
            </ul>
        </div>
        <!--通常你会遇到那些坎坷 end-->
        <!-- 我们帮你解决这一切 start -->
        <div class="lf-part03-bg">
            <img class="mt4 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-07.png" alt="我们帮你解决这一切">
        </div>
        <div class="lf-part04-bg pd4">
            <ul class="solve-problem cWhite">
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-08.png" alt="1">
                    <p>不管您在天涯海角，我们将承诺24小时内与您联系，免费上门量房</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-09.png" alt="2">
                    <p>房屋激光专业测量仪器、专业量
房专家，提供专业测量报告</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-10.png" alt="3">
                    <p>墙、顶、门窗、水电改造、 现场规划，提供采光规划、空间布局、功能优化的专业建议</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/lf-photo-11.png" alt="3">
                    <p>全程不收取任何费用，无任何增项，24小时接受业主投诉</p>
                </li>
            </ul>
        </div>
        <!-- 我们帮你解决这一切 end -->
        <!-- 五大免费 start -->
        <div class="lf-part01-bg h140">
            <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-01.png" alt="五大免费">
        </div>
        <div class="lf-part02-bg">
            <ul class="service-item cWhite">
                <li><i class="icon-num num-01"></i>上门量房</li>
                <li class="mt5"><i class="icon-num num-02"></i>装修设计</li>
                <li class="mt5"><i class="icon-num num-03"></i>装修效果图</li>
                <li class="mt5"><i class="icon-num num-04"></i>精准预算报价</li>
                <li class="mt5"><i class="icon-num num-05"></i>VR家装体验</li>
            </ul>
        </div>
        <!-- 五大免费 end -->
        <!-- 服务流程 start -->
        <div class="lf-part03-bg pd20">
            <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-02.png" alt="服务流程">
        </div>
        <div class="lf-part04-bg">
            <div class="service-process lf-service-process cWhite">
                <div class="service-p-item yy-bg">
                    <span class="icon"><i class="iconfont icone64a f20"></i></span>
                    <ul>
                        <li class="f22 fB mt2">免费预约</li>
                        <li>装修顾问即时响应，贴身了解您的装修需求</li>
                    </ul>
                </div>
                <div class="service-p-item fw-bg">
                    <span class="icon"><i class="iconfont icone699 f20"></i></span>
                    <ul>
                        <li class="f22 fB mt2">安排服务</li>
                        <li>资深设计师免费上门量房，现场深入沟通装修方案，精准测量</li>
                    </ul>
                </div>
                <div class="service-p-item fa-bg">
                    <span class="icon"><i class="iconfont icone696 f22"></i></span>
                    <ul>
                        <li class="f22 fB mt2">获得方案</li>
                        <li>免费获得装修报价，多套设计方案供您挑选，预算节省35%</li>
                    </ul>
                </div>
            </div>
            <!-- 五大免费 end -->
            <!-- 免费预约VR家装设计 start -->
            <div class="signup-nav">
                <a href="#" class="cWhite">免费预约VR家装设计</a>
            </div>
            <!-- 免费预约VR家装设计 end -->
        </div>
    </section>
<?php echo $this->render('_footer', ['info' => $info, 'host' => $host]); ?>
