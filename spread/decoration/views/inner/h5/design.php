<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>免费设计</title>
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

<body>
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
    <section class="container f16" data-page="store-list">
        <!--tab 切换 start-->
        <ul class="tab-switch cGray clearfix">
            <li class="active"><a href="javascript:void(0);"><span class="icon"><i class="iconfont icone618"></i></span>免费设计</a></li>
            <li><a href="/measure.html"><span class="icon"><i class="iconfont icone698"></i></span>免费量房</a></li>
            <li><a href="/price.html"><span class="icon"><i class="iconfont icone67a"></i></span>免费报价</a></li>
        </ul>
        <!--tab 切换 end-->
        <!--报名 start-->
        <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-17.jpg" alt="免费装修设计">
        <div class="part01-bg pd4">
            <div class="signup bg-ff">
                <ul>
                    <li>
                        <input class="input name" type="text" placeholder="输入您的称呼">
                        <!--<a class="change-city" href="#">石家庄<i class="iconfont icone60d"></i></a>-->
                    </li>
                    <li class="mt3">
                        <input class="input mobile" type="tel" placeholder="输入您的手机号">
                    </li>
                    <li class="mt3"><a href="javascript:;" class="btn btn-orange btn-block btn-block tijiao">免费预约VR家装设计</a></li>
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
                <input type="text" placeholder="您的称呼" class="realname" name="realname" value="dfsf">
                <input type="tel" placeholder="手机号码" name="mobile" value="">
            </form>
        </div>
        <!--报名 start-->
        <!--传统家装有哪些痛点 start-->
        <div class="part02-bg">
            <img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-18.png" alt="传统家装有哪些痛点">
            <ul class="problem-item cWhite f18">
                <li class="mt5"><i class="line"></i>设计图与装修完不一样</li>
                <li class="mt5"><i class="line"></i>设计效果不好,修改时间太长</li>
                <li class="mt5"><i class="line"></i>效果图太差,恨不得自己上手</li>
            </ul>
        </div>
        <!--传统家装有哪些痛点 end-->
        <!--VR家装设计我们帮您解决这一切！ start-->
        <div class="part03-bg">
            <img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-19.png" alt="VR家装设计我们帮您解决这一切！">
        </div>
        <div class="part04-bg">
            <ul class="solve-problem cWhite">
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-20.png" alt="1">
                    <h2 class="f20">您的爱屋设计图</h2>
                    <p>一对一 资深设计师，为您私人定制未来真实房屋效果VR虚拟现实设计图</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-21.png" alt="2">
                    <h2 class="f20">VR家装设计现场体验</h2>
                    <p>通过VR新时代黑科技，来体验您未来爱屋的真实效果</p>
                </li>
                <li><img class="mt10 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-22.png" alt="3">
                    <h2 class="f20">全景VR体验未来房屋设计</h2>
                    <p>720度全景体验， 效果不满意，3分钟修改完成，当然您也可以对设计快速个性DIY调整</p>
                </li>
            </ul>
        </div>
        <!-- VR家装设计我们帮您解决这一切 end -->
        <!-- VR家装设计到底哪里好 start -->
        <div class="part01-bg">
            <img class="mt14 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-06.png" alt="VR家装设计到底哪里好">
            <img class="mt4 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-07.png" alt="传统的3D设计VS新VR家装设计">
        </div>
        <div class="part02-bg pd4">
            <table class="table cWhite">
                <tbody>
                    <tr>
                        <td>120度 效果图支持少量角度观看</td>
                        <td class="fB">720度 视觉全景观看效果图</td>
                    </tr>
                    <tr>
                        <td>效果图与装修结果偏差10%-20%</td>
                        <td class="fB">效果图与装修结果偏差5%以内</td>
                    </tr>
                    <tr>
                        <td>效果图如需修改需要1-3天</td>
                        <td class="fB">现场修改,3分钟搞定</td>
                    </tr>
                    <tr>
                        <td>设计图、图纸按张收费</td>
                        <td class="fB">设计图、图纸全免费</td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="iconfont icone697"></i></td>
                        <td class="fB">支持用户简单游戏形式DIY</td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="iconfont icone697"></i></td>
                        <td class="fB">支持VR虚拟现实体验</td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="iconfont icone697"></i></td>
                        <td class="fB">支持上万种家具建材设计图即时更换</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- VR家装设计到底哪里好 end -->
        <!-- VR家装设计专业团队位您服务 start -->
        <div class="part03-bg">
            <img class="mt14 img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-08.png" alt="VR家装设计专业团队位您服务">
        </div>
        <div class="part04-bg">
            <div class="service-team cWhite clearfix">
                <ul>
                    <li class="img-circle"><img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-09.jpg" alt="12年设计总监"></li>
                    <li>12年设计总监</li>
                </ul>
                <ul>
                    <li class="img-circle"><img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-10.jpg" alt="5年资深设计师"></li>
                    <li>5年资深设计师</li>
                </ul>
                <ul>
                    <li class="img-circle"><img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-11.jpg" alt="8年装修顾问"></li>
                    <li>8年装修顾问</li>
                </ul>
                <ul>
                    <li class="img-circle"><img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-12.jpg" alt="5年资深体验师"></li>
                    <li>5年资深体验师</li>
                </ul>
            </div>
        </div>
        <div class="service-case cWhite clearfix">
            <ul>
                <li>
                    <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-13.jpg" alt="5年资深体验师">
                    <p>朝阳区康泉小区98㎡</p>
                </li>
            </ul>
            <ul>
                <li>
                    <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-14.jpg" alt="5年资深体验师">
                    <p>花雨汀小区92.75㎡</p>
                </li>
            </ul>
            <ul>
                <li>
                    <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-15.jpg" alt="5年资深体验师">
                    <p>海淀区中央党校120㎡</p>
                </li>
            </ul>
            <ul>
                <li>
                    <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-16.jpg" alt="5年资深体验师">
                    <p>通州区金隅花石匠89㎡</p>
                </li>
            </ul>
        </div>
        <!-- VR家装设计专业团队位您服务 start -->
        <!-- 五大免费 start -->
        <div class="part01-bg h140">
            <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-01.png" alt="五大免费">
        </div>
        <div class="part02-bg">
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
        <div class="part03-bg h140">
            <img class="img100" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/images/photo-02.png" alt="服务流程">
        </div>
        <div class="part04-bg">
            <div class="service-process cWhite">
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
    <input type="hidden" id="info_id" value="<?= $info['id']; ?>" />
    <input type="hidden" id="position" value="design" />
    <input type="hidden" id="position_name" value="免费设计" />
    <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf']); ?>

    <!--页面主体 end-->
    <script type="text/javascript" src="http://api.map.baidu.com/getscript?v=1.5&amp;ak=yUuYcLL6yWOI2FsMvbdKAo2P&amp;services=&amp;t=20150522094656"></script>
    <script data-main="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/js/free_design_main.js?v=5" src="<?= Yii::getAlias('@asseturl'); ?>/spread/h5inner/js/plugin/require.js"></script>
</body>

</html>
