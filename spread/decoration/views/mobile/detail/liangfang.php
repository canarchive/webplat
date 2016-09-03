<?php
$this->params['inSpread'] = true;
$this->params['formPosition'] = 'hd-liangfang';
$this->params['formPositionName'] = '活动推广-量房';
?>
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/css/swiper.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/css/common.css?v=1">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/css/mianfeibaomingV823.css" /></head>

<!--页头 end-->
<header class="cWhite cMdGray clearfix">
    <div class="tit_top">
        <div class="left">
            <a href="<?= Yii::getAlias('@m.gallerycmsurl'); ?>">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/logo.png" alt="<?= Yii::$app->params['siteNameBase']; ?>"></a>
        </div>
        <div class="f12 text_tit">
		    <p>找装修公司就选<?= Yii::$app->params['siteNameBase']; ?></p>
        </div>
    </div>
</header>
<?php //echo $this->render('_liangfang_nav', []); ?>
<div class="main">
    <input type="hidden" id="user_tel" value="" />
    <input type="hidden" id="info_id" value="1" />
    <input type="hidden" id="form_type" value="hd-liangfang" />
    <div class="banner">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/mfsjbanner.png" /></div>
    <div class="list" id="list">
        <dl>
            <dt>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/dtdtdt1.jpg" alt="标记" /></dt>
            <dd>免费预约</dd></dl>
        <div class="jt"></div>
        <dl>
            <dt>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/dtdtdt2.jpg" alt="标记" /></dt>
            <dd>上门量房</dd></dl>
        <div class="jt"></div>
        <dl>
            <dt>
                <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/dtdtdt3.jpg" alt="标记" /></dt>
            <dd>免费设计</dd></dl>
    </div>
    <!--滚动咨讯START-->
    <div class="news-info-box">
        <div class="news-info swiper-container f14 cGGray swiper-container-vertical">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/inform_icon.png" alt="通知">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, -210px, 0px);">
                <div class="swiper-slide swiper-no-swiping swiper-slide-duplicate" data-swiper-slide-index="8" style="height: 42px;">【最新】16秒钟前 王女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping" data-swiper-slide-index="0" style="height: 42px;">【最新】9分钟前 王女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping" data-swiper-slide-index="1" style="height: 42px;">【最新】10分钟前 周先生申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping" data-swiper-slide-index="2" style="height: 42px;">【最新】4秒钟前 高女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping swiper-slide-prev" data-swiper-slide-index="3" style="height: 42px;">【最新】15分钟前 董女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping swiper-slide-active" data-swiper-slide-index="4" style="height: 42px;">【最新】3分钟前 邓女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping swiper-slide-next" data-swiper-slide-index="5" style="height: 42px;">【最新】12秒钟前 张先生申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping" data-swiper-slide-index="6" style="height: 42px;">【最新】13分钟前 吕女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping" data-swiper-slide-index="7" style="height: 42px;">【最新】4分钟前 赵先生申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping" data-swiper-slide-index="8" style="height: 42px;">【最新】16秒钟前 王女士申请了装修服务</div>
                <div class="swiper-slide swiper-no-swiping swiper-slide-duplicate" data-swiper-slide-index="0" style="height: 42px;">【最新】9分钟前 王女士申请了装修服务</div></div>
        </div>
    </div>
    <!--滚动咨讯END-->
    <section>
        <div class="biao">
            <p class="num" id="num">已有
                <span>14732</span>人预约</p>
            <form method="post" action="" class="form6-yuyue form6-yuyue_on" id="form6-yuyue">
                <input type="text" name="rname" value="" class="ipt" maxlength="10" placeholder="请输入您的姓名">
                <input type="tel" name="mobile" value="" class="ipt" maxlength="11" placeholder="请输入手机号码">
                <div class="select">
                    <select name="rcity" class="ipt">
                        <option value="">请选择房屋所在城市</option>
                        <option value="北京">北京</option>
                        <option value="上海">上海</option>
                        <option value="石家庄">石家庄</option>
                        <option value="天津">天津</option>
                        <option value="哈尔滨">哈尔滨</option>
                        <option value="西安">西安</option>
                        <option value="武汉">武汉</option>
                        <option value="成都">成都</option>
                        <option value="大连">大连</option>
                        <option value="济南">济南</option></select>
                    <span></span>
                </div>
                <input type="submit" value="预约免费设计" class="ipt ipt-submit"></form>
            <div class="statement">
                <b class="cRedorange">我们承诺:</b>
                <br>为了您的利益以及我们的口碑，您的隐私将被严格保密。</div></div>
        <div class="tu-box">
            <div class="tu-box-list">
                <h2>免费的设计服务</h2>
                <ul class="clearfix tu-box-list-ul">
                    <li>
                        <div class="shade"></div>
                        <div class="tu-box-list-con">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/tuone.png" alt="" />
                            <span>资深设计师</span>
                            <p>根据您的需求及户型指派资深设计师</p>
                        </div>
                    </li>
                    <li>
                        <div class="shade"></div>
                        <div class="tu-box-list-con">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/tutwo.png" />
                            <span>免费上门量房</span>
                            <p>发布申请后15分钟内响应</p>
                        </div>
                    </li>
                    <li>
                        <div class="shade"></div>
                        <div class="tu-box-list-con">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/tuthree.png" alt="" />
                            <span>免费设计方案及报价</span>
                            <p>48小时内出方案</p>
                        </div>
                    </li>
                    <li>
                        <div class="shade"></div>
                        <div class="tu-box-list-con">
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/tufour.png" />
                            <span>设计修改到满意为止</span>
                            <p>持续修改设计到满意为止</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="tu-box-list">
                <h2>为您打造高品质家居生活</h2>
                <div class="tu-box-list-img">
                    <span>让您的家增加30㎡</span>
                    <p>合理的规划布局可将空间扩大30㎡左右</p>
                    <ul class="imglist clearfix">
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-chufang.png" alt="" />
                            <span>厨房</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-guodao.png" alt="" />
                            <span>过道</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-yangtai.png" alt="" />
                            <span>阳台</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-canting.png" alt="" />
                            <span>餐厅</span></li>
                    </ul>
                </div>
                <div class="tu-box-list-img">
                    <span>让您预算更加精准</span>
                    <p>房屋准确测量，装修预算精准把控</p>
                    <ul class="imglist clearfix">
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-shuidian.png" alt="" />
                            <span>水电改造</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-diaoding.png" alt="" />
                            <span>吊顶</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-chugui.png" alt="" />
                            <span>橱柜</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-diban.png" alt="" />
                            <span>地板</span></li>
                    </ul>
                </div>
                <div class="tu-box-list-img">
                    <span>为您讲解装修细节</span>
                    <p>资深设计师专业讲解，避免装修陷阱</p>
                    <ul class="imglist imglist3 clearfix">
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-woshikaiguan.png" alt="" />
                            <span>双控开关</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-matong.png" alt="" />
                            <span>马桶插座</span></li>
                        <li>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/sj-ganshifenli.png" alt="" />
                            <span>干湿分离</span></li>
                    </ul>
                </div>
            </div>
            <div class="tu-box-list">
                <h2>明星设计师团队</h2>
                <ul class="tu-box-list-star clearfix">
                    <li class="mr4">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/yangban1.png" alt="" />
                        <div class="star-people">
                            <p>
                                <span>周大卫</span>经验5年</p>
                            <p>擅长：简约、田园等风格</p>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/liduoduo.png" alt="" /></div>
                    </li>
                    <li>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/yangban2.png" alt="" />
                        <div class="star-people">
                            <p>
                                <span>曾飞</span>经验4年</p>
                            <p>擅长：田园、欧式等风格</p>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/lixianchuang.png" alt="" /></div>
                    </li>
                    <li class="mr4">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/yangban3.png" alt="" />
                        <div class="star-people">
                            <p>
                                <span>王明</span>经验6年</p>
                            <p>擅长：田园、欧式等风格</p>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/zhangke.png" alt="" /></div>
                    </li>
                    <li>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/yangban1.png" alt="" />
                        <div class="star-people">
                            <p>
                                <span>朱晓燕</span></span>经验5年</p>
                            <p>擅长：简约、欧式等风格</p>
                            <img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/images/renyan.png" alt="" /></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
<!-- 引入小猪js -->
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/js/zepto.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/js/swiper.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/js/common.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/liangfang/js/yuyueliangfang.js?v=8"></script>
