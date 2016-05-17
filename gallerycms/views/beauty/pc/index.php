<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit">
<title>
    Yestar艺星整形美容医院-最好的韩国整形医院【中国官方网站】
</title>
<meta name="description" content="Yestar艺星整形医院，源自韩国整形审美艺术，将整形美容高端时尚审美带入中国，2014年进入北京整形。作为北京整形美容医院唯一的韩国整形，北京Yestar艺星整形肩负高端时尚韩国整形使命，坚持为每一位北京整形爱美人士带来最好的整形技术审美及服务——北京最好的整形医院-北京艺星。"
/>
<meta name="keywords" content="艺星整形，Yestar艺星整形，北京艺星整形美容医院，北京Yestar，北京艺星医疗美容医院，北京整形医院，北京整形医院排行榜，北京韩国整形医院"
/>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/css/style_cs_index.css"
/>
<link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/css/top.css" />
<script src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8">
</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/js/slick.min.js" type="text/javascript" charset="utf-8">
</script>
<base target="_blank" />
<script>
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
</script>
</head>

<body>
<div class="wrap" id="home">
    <!--公用头部开始-->
    <link href="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/css/style_head_footer.css" rel="stylesheet" type="text/css">
    <div id="head" class="wp bg100">
        <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/js/custom.modernizr.js">
        </script>
        <script type="text/javascript">
            // JavaScript Document
            $(document).ready(function(e) {
                $('ul li:first-child').addClass('first_child').css({
                    'margin-left': '0px !important'
                });
                $('ul li:last-child').addClass('last_child').css({
                    'margin-right': '0px !important'
                }).after('<div class="clear"></div>');

                $('ul#links li, .video_list ul li, #imageGallery li,.cSGallery li').removeClass('first_child');
                $('ul#links li, .video_list ul li,#imageGallery li,.cSGallery li').removeClass('last_child');

                $('#mainnav .dropdown').mouseover(function() {
                    $(this).addClass('active').siblings('#mainnav .dropdown,.concierge').removeClass('active');
                    var index = $(this).index();
                    if (index == 2) {
                        s_index = 0;
                    }
                    if (index == 3) {
                        s_index = 2;
                    }
                    if (index == 4) {
                        s_index = 1;
                    }
                    if (index == 5) {
                        s_index = 3;
                    }
                    $('#submenusnew #submenu' + s_index).fadeIn().siblings('#submenusnew .submenu').fadeOut();
                })

                $('#head').mouseleave(function() {
                    $('#mainnav .dropdown,.concierge').removeClass('active');
                    $('#submenusnew .submenu').fadeOut();
                })

                $('.concierge').mouseover(function() {
                    $(this).addClass('active').siblings('#mainnav .dropdown,.concierge').removeClass('active');
                    $('#submenusnew .submenu').fadeOut();
                })

                $('#customize .chain').click(function() {
                    $('#chain-nav').stop(true);
                    $(this).toggleClass('hover');
                    $('#chain-nav').slideToggle(); //  css('display','block');
				});
			   	$('#chain-nav').mouseleave(function() {
                    $(this).removeClass('hover');
                    $('#chain-nav').slideUp(); //.css('display','none');
                })

                $('.sc_bottom.to_bottom').click(function() {
                    var sc_top = $(".bottom_con").offset().top;
                    $("html, body").animate({
                        scrollTop: sc_top
                    },
                    250);
                })

                var sc_top = 500;
                $('.scroll_down').addClass('to_down');
                $(window).scroll(function() {　　
                    var scrollTop = $(this).scrollTop();　　
                    var scrollHeight = $(document).height();　　
                    var windowHeight = $(this).height();
                    sc_top = $(window).scrollTop();　　
                    if (scrollTop + windowHeight == scrollHeight) {
                        $('.scroll_down').removeClass('to_down').addClass('to_up');
                    }
                    if (scrollTop == 0) {
                        $('.scroll_down').removeClass('to_up').addClass('to_down');
                    }

                    if ($('.scroll_down').hasClass('to_up')) {
                        sc_top = sc_top - 500;
                    }
                    if ($('.scroll_down').hasClass('to_down')) {
                        sc_top = sc_top + 500;
                    }
                });

                $('.scroll_down').click(function() {
                    $("html, body").stop(true);
                    $("html, body").animate({
                        scrollTop: sc_top
                    },
                    250);
                })

            })
        </script>
        <header id="top" class="scrollstep skipscroll">
            <div class="wrapper">
                <div class="logo">
                    <a>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/img_logo.png" class="retina" alt="Luxury Watches and Fine Watches">
                    </a>
                </div>
                <nav id="mainnav">
                    <i class="seps sprite-v">
                    </i>
                    <div class="concierge">
                        <a target="_self" href="/">
                            <span class="label">
                                首页
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <!-- <a target="_self" href="#submenu0">-->
                        <a target="_self" href="/zt/">
                            <span class="label" style="background: #937344 none repeat scroll 0 0;border-radius: 5px;color: #fff;padding: 0 15px;">
                                项目系列
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a target="_self" href="#submenu2">
                            <span class="label">
                                专家
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a target="_self" href="#submenu1">
                            <span class="label">
                                品牌
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="dropdown">
                        <a target="_self" href="#submenu3">
                            <span class="label">
                                服务
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="concierge">
                        <a target="_self" href="/pp/weixin/">
                            <span class="label">
                                官微
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="concierge">
                        <a target="_self" href="/link/720.html">
                            <span class="label">
                                联系我们
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="concierge">
                        <a href="/zt/201604/">
                            <span class="label" style="display: block;background: #937344 none repeat scroll 0 0;border-radius: 5px;color: #fff;padding: 0 15px;">
                                本月活动
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                    <div class="concierge">
                        <a href="/swt">
                            <span class="label">
                                QQ咨询
                            </span>
                            <span class="sprite-h checkerboard">
                            </span>
                            <i class="seps sprite-v">
                            </i>
                        </a>
                    </div>
                </nav>
            </div>
            <div id="customize">
                <!-- <div class="switch_versions"><a href="http://baidu.bjyestar.com/">切换到旧版</a></div> -->
                <div class="chain">
                    <div>
                        艺星连锁
                    </div>
                    <!--<a href="#chain"><span></span></a>-->
                    <b>
                        <span>
                        </span>
                    </b>
                </div>
            </div>
            <div id="submenusnew">
                <div id="submenu0" class="submenu clearfix" style="display:none">
                    <div class="bg clearfix">
                        <div class="wrapper">
                            <nav class="subcollections">
                                <a href="/ybzx/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_2.jpg" width="149px" height="147px"
                                        alt="眼部整形">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        眼部整形
                                    </span>
                                </a>
                                <a href="/bbzx/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_3.jpg" width="149px" height="147px"
                                        alt="鼻部整形">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        鼻部整形
                                    </span>
                                </a>
                                <a href="/hmbzx/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_4.jpg" width="149px" height="147px"
                                        alt="面部整形">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        面部整形
                                    </span>
                                </a>
                                <a href="/xbzx/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_5.jpg" width="149px" height="147px"
                                        alt="胸部整形">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        胸部整形
                                    </span>
                                </a>
                                <a href="/xzss/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_6.jpg" width="149px" height="147px"
                                        alt="瘦身塑形">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        瘦身塑形
                                    </span>
                                </a>
                                <a href="/jfcz/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_236.jpg" width="149px" height="147px"
                                        alt="紧肤除皱">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        紧肤除皱
                                    </span>
                                </a>
                                <a href="/wzx/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_8.jpg" width="149px" height="147px"
                                        alt="微整形">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        微整形
                                    </span>
                                </a>
                                <a href="/cpxl/pfmr/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_349.jpg" width="149px" height="147px"
                                        alt="皮肤美容">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        皮肤美容
                                    </span>
                                </a>
                                <a href="/wxmr/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_10.jpg" width="149px" height="147px"
                                        alt="纹绣美容">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        纹绣美容
                                    </span>
                                </a>
                                <a href="/mfzz/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_196.jpg" width="149px" height="147px"
                                        alt="毛发种植">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        毛发种植
                                    </span>
                                </a>
                                <a href="/cpxl/hywz/" target="_blank" class="container trans">
                                    <div class="visu">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_cp_img_466.jpg" width="149px" height="147px"
                                        alt="行业文章">
                                    </div>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                    <span class="subcollection-nav-title">
                                        行业文章
                                    </span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id="submenu1" class="submenu clearfix" style="display:none">
                    <div class="bg">
                        <div class="wrapper">
                            <div class="parsys_column cq-ctrl-4c">
                                <div class="parsys_column cq-ctrl-4c-c0">
                                    <div class="ctablk first">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a href="/pp/ppqy/">
                                                    <div class="h3">
                                                        品牌起源
                                                    </div>
                                                    <p>
                                                        国际连锁，源自韩国
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                探索
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_pp_img_01.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-4c-c1">
                                    <div class="ctablk">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a href="/pp/cxwm/">
                                                    <div class="h3">
                                                        美丽故事
                                                    </div>
                                                    <p>
                                                        定制专属于你的美
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                更多信息
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_pp_img_02.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-4c-c2">
                                    <div class="ctablk">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a href="/pp/ppzz/">
                                                    <div class="h3">
                                                        品牌杂志
                                                    </div>
                                                    <p>
                                                        墨香里的Yestar
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                探索
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_pp_img_03.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-4c-c3">
                                    <div class="ctablk">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a href="/ppsp/">
                                                    <div class="h3">
                                                        品牌视频
                                                    </div>
                                                    <p>
                                                        记实中国连锁之路
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                探索
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_pp_img_04.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both">
                            </div>
                            <div class="heritageScetion clearfix">
                                <div class="parsys_column cq-ctrl-4c">
                                    <div class="parsys_column cq-ctrl-4c-c2">
                                        <div class="blk top-news subactu tmpblk">
                                            <a href="/pp/zxzx/">
                                                <span class="ttl">
                                                    &#26368;&#26032;&#36164;&#35759;
                                                    <i class="sprite-h checkerboard below">
                                                    </i>
                                                </span>
                                            </a>
                                            <a href="/pp/zxzx/2016/2016/0421/1078.html" class="last">
                                                <div class="visu">
                                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_pp_img_news_01.jpg">
                                                </div>
                                                <div class="h3 ajax">
                                                    <b>
                                                        Yestar艺星与韩亚银行战
                                                    </b>
                                                </div>
                                                <p class="ajax">
                                                    2016年3月4日下午，Yestar艺星韩亚银行战略升级合作签
                                                </p>
                                            </a>
                                            <i class="sprite-h gtitle-deco above">
                                            </i>
                                            <a href="/pp/zxzx/" class="all">
                                                <strong>
                                                    查看更多资讯
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="parsys_column cq-ctrl-4c-c3">
                                    </div>
                                </div>
                                <div style="clear:both">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="submenu2" class="submenu clearfix" style="display:none">
                    <div class="bg">
                        <div class="wrapper">
                            <div class="parsys_column cq-ctrl-4c">
                                <div class="parsys_column cq-ctrl-4c-c0">
                                    <div class="ctablk first">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a href="/zj/">
                                                    <div class="h3">
                                                        中韩整形巨擘联袂献技
                                                    </div>
                                                    <p>
                                                        自然塑美，领先中国
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                探索
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_zj_img_01.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-4c-c1">
                                    <div class="ctablk">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a href="/zj/xsjl/">
                                                    <div class="h3">
                                                        学术发表与交流
                                                    </div>
                                                    <p>
                                                        专利、论文，著作等身
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                更多信息
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_zj_img_02.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-4c-c2">
                                    <div class="ctablk">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a>
                                                    <div class="h3">
                                                        专家微课堂
                                                    </div>
                                                    <p>
                                                        行业教育与社会科普
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                探索
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_zj_img_03.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-4c-c3">
                                    <div class="ctablk">
                                        <div class="wr">
                                            <div class="container trans">
                                                <a>
                                                    <div class="h3">
                                                        韩国专家巡诊
                                                    </div>
                                                    <p>
                                                        专家预约制，纯韩高端
                                                    </p>
                                                    <div class="cta">
                                                        <div>
                                                            <span class="label">
                                                                探索
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="visu">
                                                        <span class="checkerboard">
                                                        </span>
                                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_zj_img_04.jpg" alt="" />
                                                    </div>
                                                    <i class="sprite-h gtitle-deco below">
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="submenu3" class="submenu" style="display:none">
                    <div class="bg">
                        <div class="wrapper">
                            <div class="parsys_column cq-ctrl-3c">
                                <div class="parsys_column cq-ctrl-3c-c0">
                                    <div class="blk serviceclient">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_service_img_01.jpg" alt="">
                                        <span class="ttl">
                                            精心呵护您的美丽
                                            <i class="sprite-h checkerboard below">
                                            </i>
                                        </span>
                                        <nav>
                                            <a href='/fuwu/fwzx/'>
                                                服务中心
                                            </a>
                                            <a href='/fuwu/wmdcn/'>
                                                我们的承诺
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-3c-c1">
                                    <div class="blk prendresoin">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_service_img_02.jpg" alt="">
                                        <span class="ttl">
                                            检查、跟踪术后恢复情况
                                            <i class="sprite-h checkerboard below">
                                            </i>
                                        </span>
                                        <nav>
                                            <a href='/fuwu/sslc/'>
                                                接待流程
                                            </a>
                                            <a href='/fuwu/hlts/'>
                                                护理贴士
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                                <div class="parsys_column cq-ctrl-3c-c2">
                                    <div class="blk documents">
                                        <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/dh_service_img_03.jpg" alt="">
                                        <span class="ttl">
                                            艺星荟
                                            <i class="sprite-h checkerboard below">
                                            </i>
                                        </span>
                                        <nav>
                                            <a href='/fuwu/viptq/'>
                                                VIP特权
                                            </a>
                                            <a href='/fw/yxh/YestargunBOTOX_yi__11753____130148___103465/'>
                                                Yestar丨BOTOX 艺·适俱乐部
                                            </a>
                                            <a href='/fw/yxh/YestargunYVOIRE_xing__11749___37476___13014/'>
                                                Yestar丨YVOIRE 星·婉俱乐部
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="chain-nav" class="body-darkblk">
                    <div class="chain-tab">
                        <!--<ul>
                        <li><a href="/pp/lszg/" target="_blank">首尔</a></li>
                        <li><a href="http://www.bjyestar.com/" target="_blank">北京</a></li>
                        <li><a href="http://baidu.yestar1992.cn/" target="_blank">上海</a></li>
                        <li><a href="http://baidu.hzyestar.com/" target="_blank">杭州</a></li>
                        <li><a href="http://www.wzyestar.com/" target="_blank">温州</a></li>
                        <li><a href="http://www.whyestar.com/" target="_blank">武汉</a></li>
                        <li><a href="http://baidu.csyestar.com/" target="_blank">长沙</a></li>
                        <li><a href="http://mr.dlyestar.com/" target="_blank">大连</a></li>
                        <li><a href="http://www.hfyestar.com/" target="_blank">合肥</a></li>
                        <li><a href="http://www.hljyestar.com/" target="_blank">哈尔滨</a></li>
                        <li><a href="http://baidu.cdyestar.com/" target="_blank">成都</a></li>
                        <li><a href="http://baidu.jnyestar.com/" target="_blank">济南</a></li>
                        <li><a href="http://www.cqyestar.com/" target="_blank">重庆</a></li>
                        <li><a href="http://www.xayestar.com/" target="_blank">西安</a></li>
                        <li><a href="http://www.kmyestar.com/" target="_blank">昆明</a></li>
                        </ul>-->
                        <ul>
                            <li>
                                <b>
                                    首尔
                                </b>
                            </li>
                            <li>
                                <b>
                                    北京
                                </b>
                            </li>
                            <li>
                                <b>
                                    上海
                                </b>
                            </li>
                            <li>
                                <b>
                                    杭州
                                </b>
                            </li>
                            <li>
                                <b>
                                    温州
                                </b>
                            </li>
                            <li>
                                <b>
                                    武汉
                                </b>
                            </li>
                            <li>
                                <b>
                                    长沙
                                </b>
                            </li>
                            <li>
                                <b>
                                    大连
                                </b>
                            </li>
                            <li>
                                <b>
                                    合肥
                                </b>
                            </li>
                            <li>
                                <b>
                                    哈尔滨
                                </b>
                            </li>
                            <li>
                                <b>
                                    成都
                                </b>
                            </li>
                            <li>
                                <b>
                                    济南
                                </b>
                            </li>
                            <li>
                                <b>
                                    重庆
                                </b>
                            </li>
                            <li>
                                <b>
                                    西安
                                </b>
                            </li>
                            <li>
                                <b>
                                    昆明
                                </b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear">
        </div>
    </div>
    <!--公用头部结束-->
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/css/index_banner1.css"
    type="text/css">
    <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/js/index_banner1.js">
    </script>
    <script type="text/javascript">
        var analytics_zone = "asia";
        var analytics_language = "zh";
        var analytics_section = "home";
        var analytics_subsection = "";
    </script>
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/css/index_banner2.css"
    type="text/css">
    <script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/js/index_banner2.js">
    </script>
    <script type="text/javascript">
        var dataLayer = [{}];

        function getAjaxURLFromSelector(selector) {
            var path = window.location.pathname;
            var strSub = path.substring(0, path.indexOf("."));
            return strSub.concat("." + selector + ".html");
        };

        (function(t, r, a, c, k, i, n, g) {
            t["AnalyticsBy55"] = c;
            t[c] = t[c] ||
            function() { (t[c].q = t[c].q || []).push(arguments)
            };
            t[c]("config", "dataLayer", k);
            t[c].dln = k;
            if ((n || []).length) t[c].r = n;
            t[c].dl = t[k] = t[k] || [];
            t[k] = [{
                event: "core.js"
            }]; (function(w, d, s, l, i) {
                var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l: "";
                j.async = true;
                j.src = "//www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f)
            })(t, r, a, k, i)
        })(window, document, "script", "_55", "dataLayer", "GTM-NLR4HH", []);
    </script>
    <div class="bodywrapper">
        <div role="main" id="home1" class="body">
            <div id="slider-sliders" class="body-darkblk">
                <div id="slider-slides">
                    <style type='text/css'>
                        #home1 #slider-sliders .slidebanner05 .txtwrap {top:40%;left: 42%; } #home1
                        #slider-sliders .slidebanner05 .txtwrap p{padding: 20px 0px 40px 0; width:55%;
                        margin:0px auto;line-height:2em;color:#937344;}
                    </style>
                    <div id="slider-slide2" class="slide slidebanner05" data-menu="Yestar的审美艺术">
                        <div class="txtwrap clickable">
                            <div class="titleblk">
                                <div class="titlewrap">
                                    <p>
                                        <img width="98%" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/index_banner06_1.png">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img src="/img/blank.gif" data-source="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/index_banner06.jpg"
                        class="bg">
                    </div>
                    <style type='text/css'>
                        #home1 #slider-sliders .slidebanner04 .txtwrap {top:45%;left: 38%; } #home1
                        #slider-sliders .slidebanner04 .txtwrap p{padding: 20px 0px 40px 0;line-height:
                        2em;color:#e6c49c;}
                    </style>
                    <div id="slider-slide3" class="slide slidebanner04 slideOverseas3" data-menu="艺星纯正韩国血统">
                        <div class="txtwrap clickable">
                            <div class="titleblk">
                                <div class="titlewrap">
                                    <p>
                                        1992年起源首尔
                                        <br />
                                        2005年进驻中国上海
                                        <br />
                                        15连城全国高端连锁
                                        <br />
                                        24年-演绎纯韩整形技艺
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img src="/img/blank.gif" data-source="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/index_banner01.jpg"
                        class="bg">
                    </div>
                    <style type='text/css'>
                        #home1 #slider-sliders .slidebanner01 .txtwrap {top:40%;left:68%; } #home1
                        #slider-sliders .slidebanner01 .txtwrap p{padding: 20px 0px 40px 0;line-height:2em;color:#e6c49c;}
                    </style>
                    <div id="slider-slide4" class="slide slidebanner01" data-menu="Yestar艺星极致塑美">
                        <div class="txtwrap clickable">
                            <div class="titleblk">
                                <div class="titlewrap">
                                    <p>
                                        汇聚顶级名家
                                        <br />
                                        尖端整形设备
                                        <br />
                                        苛求0.01mm的精细
                                        <br />
                                        把握细节极致
                                        <br />
                                        Yestar艺星，成就完美女性!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img src="/img/blank.gif" data-source="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/index_banner02.jpg"
                        class="bg">
                    </div>
                    <style type='text/css'>
                        #home1 #slider-sliders .slidebanner03 .txtwrap {top:45%;left: 49%; } #home1
                        #slider-sliders .slidebanner03 .txtwrap p{padding: 20px 0px 40px 0;line-height:2em;color:#937344;}
                    </style>
                    <div id="slider-slide5" class="slide slidebanner03" data-menu="时尚整形领导品牌">
                        <div class="txtwrap clickable">
                            <div class="titleblk">
                                <div class="titlewrap">
                                    <p>
                                        艺星 时尚整形领导者
                                        <br />
                                        尽享潮流 诠释真我
                                        <br />
                                        不忘初心 悦享臻美
                                        <br />
                                        闪耀10年 因美而生
                                        <br />
                                        始终坚持“你就是明星”的品牌主张
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img src="/img/blank.gif" data-source="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/index_banner03.jpg"
                        class="bg">
                    </div>
                    <style type='text/css'>
                        #home1 #slider-sliders .slidebanner02 .txtwrap {top:36%;left:70%; } #home1
                        #slider-sliders .slidebanner02 .txtwrap p{padding: 20px 0px 40px 0;line-height:2em;color:#937344;}
                    </style>
                    <div id="slider-slide6" class="slide slidebanner02" data-menu="你就是明星">
                        <div class="txtwrap clickable">
                            <div class="titleblk">
                                <div class="titlewrap">
                                    <p>
                                        爱自己，是女人最好的投资
                                        <br />
                                        宠爱自己，做自己的女王
                                        <br />
                                        Yestar，你就是明星！
                                    </p>
                                </div>
                            </div>
                        </div>
                        <img src="/img/blank.gif" data-source="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/index_banner04.jpg"
                        class="bg">
                    </div>
                    <div class="loaderAnim" id="slider-loader" data-loadtitle="Yestar艺星|美力">
                    </div>
                </div>
                <div id="downScroller" style="display:block;opacity:1;bottom:70px;">
                    <span class="button">
                        <span class="text">
                            向下滚动
                        </span>
                        <span class="buttonOver" style="color:#e6c49c;">
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            TextsTools.applyCufon("#slider-sliders .lightbgblack .ttl", {
                fontFamily: "Georg",
                color: "#2b2d28",
                textShadow: "none"
            });
            TextsTools.applyCufon("#slider-sliders .lightbgblack p", {
                fontFamily: "Georg",
                color: "#2e2615",
                textShadow: "none"
            });
            Cufon.replace('#slider-slide1 .description', {
                fontFamily: "Georg",
                textShadow: "2px 2px rgba(0, 0, 0, 0.5)"
            });
        },
        500);
    </script>
    <script>
        $('#downScroller').click(function() {
            var sc_top = $(window).scrollTop() + 500;
            $("html, body").animate({
                scrollTop: sc_top
            },
            250);
        })
    </script>
    <style>
        #home #downScroller { bottom: 50px; color: #c3a07d; cursor: pointer; display:
        none; font-size: 11px; font-weight: bold; height: 92px; opacity: 0; overflow:
        hidden; position: fixed; right: 13px; text-align: center; text-transform:
        uppercase; width: 92px; z-index: 1001; } #home #downScroller .button, #home
        #downScroller .buttonOver { background: transparent url("<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/sprite.png")
        no-repeat scroll -4px -794px; display: block; height: 92px; left: 0; position:
        absolute; top: 0; width: 92px; } #home #downScroller .button:hover { background-position:
        -101px -794px; color: black; opacity: 1; } #home #downScroller .text {
        display: block; height: 72px; padding: 20px 0 0; text-align: center; width:
        92px; }
    </style>
    <div class="hometeaser body-darkblk collections" id="homecollections">
        <div class="wrapper">
            <div class="georgia-title">
                <i class="sprite-h gtitle-deco above">
                </i>
                <h2>
                    Yestar艺星起源
                    <br>
                    与品牌艺术
                </h2>
                <i class="sprite-h gtitle-deco below">
                </i>
            </div>
            <div class="blk">
                <div class="ctablk first">
                    <div class="wr">
                        <div class="container trans" id="homecollecbloc1">
                            <a href="/pp/ppqy/" data-analytics="discover">
                                <div class="georgia-title">
                                    <h3>
                                        探索Yestar艺星
                                        <br />
                                        品牌起源
                                    </h3>
                                    <i class="sprite-h gtitle-deco">
                                    </i>
                                </div>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            探索
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <span class="checkerboard">
                                    </span>
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_hometeaser_img_01.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk">
                    <div class="wr">
                        <div class="container trans" id="homecollecbloc1">
                            <a href="/pp/cxwm/" data-analytics="discover">
                                <div class="georgia-title">
                                    <h3>
                                        个性化定制
                                        <br />
                                        您的专属之美
                                    </h3>
                                    <i class="sprite-h gtitle-deco">
                                    </i>
                                </div>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            个性化定制
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <span class="checkerboard">
                                    </span>
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_hometeaser_img_02.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk">
                    <div class="wr">
                        <div class="container trans" id="homecollecbloc1">
                            <a href="/pp/lszg/" data-analytics="discover">
                                <div class="georgia-title">
                                    <h3>
                                        寻找离你最近的
                                        <br />
                                        Yestar艺星连锁
                                    </h3>
                                    <i class="sprite-h gtitle-deco">
                                    </i>
                                </div>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            定位
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <span class="checkerboard">
                                    </span>
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_hometeaser_img_03.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="homemetiersdart" class="hometeaser goldTexture metiersdart" style="">
        <div class="wrapper">
            <div class="georgia-title">
                <i class="sprite-h gtitle-deco above">
                </i>
                <h2>
                    Yestar的精湛整形技艺
                </h2>
                <i class="sprite-h gtitle-deco below">
                </i>
            </div>
            <div class="blk">
                <div class="ctablk first ma">
                    <div class="wr">
                        <div class="container trans">
                            <a href="/zt/">
                                <h3>
                                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/zi.gif">
                                </h3>
                                <i class="sprite-h gtitle-deco">
                                </i>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            探索
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img class="anim" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_metiersdart_img_01.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk ac">
                    <div class="wr">
                        <div class="container trans">
                            <a href="/zj/">
                                <h3>
                                    韩国专家与国内菁英专家
                                </h3>
                                <i class="sprite-h gtitle-deco">
                                </i>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            查阅
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img class="anim" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_metiersdart_img_02.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk pg">
                    <div class="wr">
                        <div class="container trans">
                            <a href="/swt">
                                <h3>
                                    承担教育重任的专家微课堂
                                </h3>
                                <i class="sprite-h gtitle-deco">
                                </i>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            探索
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img class="anim" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_metiersdart_img_03.jpg">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <div id="homecommunautes" class="hometeaser scrollstep skipscroll body-darkblk communautes">
        <div class="wrapper">
            <div class="georgia-title">
                <i class="sprite-h gtitle-deco above">
                </i>
                <h2>
                    Yestar艺星互动
                </h2>
                <i class="sprite-h gtitle-deco below">
                </i>
            </div>
            <div class="blk">
                <a id="homeTHLlink" href="/pp/ppzz/" class="external">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_communautes_img_01.png">
                    <div class="georgia-title">
                        <i class="sprite-h gtitle-deco">
                        </i>
                        <h3>
                            查阅Yestar艺星品牌杂志
                        </h3>
                    </div>
                </a>
                <a id="homeTHClink" href="/ppsp/" class="external">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_communautes_img_02.png" />
                    <div class="georgia-title">
                        <i class="sprite-h gtitle-deco">
                        </i>
                        <h3>
                            观看Yestar艺星活动视频
                        </h3>
                    </div>
                </a>
                <a id="homeTHClink" href="/pp/weixin/" class="external">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/home_communautes_img_03.png" />
                    <div class="georgia-title">
                        <i class="sprite-h gtitle-deco">
                        </i>
                        <h3>
                            查阅Yestar艺星官微内容
                        </h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="homeactualites" class="goldTexture scrollstep skipscroll actualites"
    style="">
        <div class="wrapper">
            <div class="georgia-title">
                <i class="sprite-h gtitle-deco above">
                </i>
                <h2>
                    Yestar艺星最新资讯
                </h2>
                <i class="sprite-h gtitle-deco below">
                </i>
            </div>
            <div class="blk">
                <div class="ctablk news first">
                    <div class="wr">
                        <div class="container trans">
                            <a class="homenewslink" href="/pp/zxzx/2016/2016/0330/1011.html">
                                <div class="georgia-title">
                                    <h3>
                                        <div style="margin: 0px; padding: 0px; border: 0px none;">
                                            Yestar艺星整形荣获2015-2016 OnlyLady美容
                                        </div>
                                    </h3>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                </div>
                                <p>
                                    3月28日晚， 2015-2016 OnlyLady美容天后颁奖盛典在上海外滩举行，美丽高贵的胡杏
                                </p>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            阅读
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img src="/uploads/160421/1-16042111014VC.jpg" style="display: inline;width:289px;height:180px">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk news ">
                    <div class="wr">
                        <div class="container trans">
                            <a class="homenewslink" href="/cszx/pp/773.html">
                                <div class="georgia-title">
                                    <h3>
                                        <div style="margin: 0px; padding: 0px; border: 0px none;">
                                            【实力认证】Yestar艺星整形强强联合
                                        </div>
                                    </h3>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                </div>
                                <p>
                                    Yestar艺星整形要闻 : 获得韩国fue协会指定中国区合作伙伴外，还获另一国际毛
                                </p>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            阅读
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img src="/uploads/160114/1-160114152QU56.jpg" style="display: inline;width:289px;height:180px">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk news ">
                    <div class="wr">
                        <div class="container trans">
                            <a class="homenewslink" href="/cszx/pp/772.html">
                                <div class="georgia-title">
                                    <h3>
                                        <div style="margin: 0px; padding: 0px; border: 0px none;">
                                            Yestar艺星整形倾力承办2015中韩鼻部整
                                        </div>
                                    </h3>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                </div>
                                <p>
                                    近日，中韩鼻部整形2015高峰论坛在Yestar艺星整形举行;包括金钟求、钟冠鸿、
                                </p>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            阅读
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img src="/uploads/160114/1-16011415053NV.jpg" style="display: inline;width:289px;height:180px">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ctablk news ">
                    <div class="wr">
                        <div class="container trans">
                            <a class="homenewslink" href="/cszx/pp/771.html">
                                <div class="georgia-title">
                                    <h3>
                                        <div style="margin: 0px; padding: 0px; border: 0px none;">
                                            2015艾尔建CEO交流会在Yestar艺星整形隆
                                        </div>
                                    </h3>
                                    <i class="sprite-h gtitle-deco below">
                                    </i>
                                </div>
                                <p>
                                    近日，2015艾尔建医院运营高管交流会在Yestar艺星整形隆重举行。本次交流会汇
                                </p>
                                <div class="cta">
                                    <div>
                                        <span class="label">
                                            阅读
                                        </span>
                                    </div>
                                </div>
                                <div class="visu">
                                    <img src="/uploads/160114/1-160114135420264.jpg" style="display: inline;width:289px;height:180px">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="cta readall" href="/pp/zxzx/">
            <div>
                <span class="label">
                    查看所有最新资讯
                </span>
            </div>
        </a>
    </div>
    <!--公用尾部开始-->
    <div id="footer1" class="wp bg100">
        <div id="footer" class="morelink">
            <div class="container">
                <ul class="big">
                    <li class="br bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line1.png">
                            &nbsp;
                            <a href="/ybzx/" target="_blank">
                                眼部整形
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/ybzx/syp/">
                                    双眼皮
                                </a>
                                <img class="parimg" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/ybzx/kyj/">
                                    开眼角
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/ybzx/qyd/">
                                    祛眼袋
                                </a>
                                <img class="parimg" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/ybzx/sjxc/">
                                    上睑下垂
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line2.png">
                            &nbsp;
                            <a href="/bbzx/" target="_blank">
                                鼻部整形
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/bbzx/jtlb/">
                                    假体隆鼻
                                </a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/bbzx/ztlb/">
                                    自体隆鼻
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/bbzx/abzx/">
                                    矮鼻整形
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/bbzx/stbzx/">
                                    蒜头鼻整形
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line7.png">
                            &nbsp;
                            <a href="/wzx/" target="_blank">
                                微整形
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/wzx/zssl/">
                                    注射瘦脸
                                </a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/wzx/zslb/">
                                    注射隆鼻
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wzx/zsfet/">
                                    注射丰额头
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wzx/zsfpgj/">
                                    注射丰苹果肌
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line5.png">
                            &nbsp;
                            <a href="/wzx/" target="_blank">
                                注射产品
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/wzx/bns/">
                                    玻尿酸
                                </a>
                                <img class="parimg" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <!--<li><a target="_blank" href="/wzx/qiaoyadeng/">乔雅登</a><img class="parimg" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" /></li>-->
                            <li>
                                <a target="_blank" href="/wzx/BOTOX/">
                                    BOTOX
                                </a>
                                <img style="left:59px;" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/swt/">
                                    瑞蓝
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line3.png">
                            &nbsp;
                            <a href="/xbzx/" target="_blank">
                                胸部整形
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/xbzx/jtlx/">
                                    假体隆胸
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/xbzx/ztlx/">
                                    自体隆胸
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/xbzx/rfxc/">
                                    乳房下垂
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/xbzx/rtax/">
                                    乳头凹陷
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line4.png">
                            &nbsp;
                            <a href="/xzss/" target="_blank">
                                瘦身塑形
                            </a>
                        </div>
                        <ul class="little">
                            <!--<li><a target="_blank" href="/xzss/lingdongrongzhi/">激光塑身</a><img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" /></li>-->
                            <li>
                                <a target="_blank" href="/swt/">
                                    激光塑身
                                </a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/xzss/shoushuxizhi/">
                                    手术吸脂
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/xzss/jiguangrongzhi/">
                                    光纤溶脂
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/xzss/shepinrongzhi/">
                                    射频溶脂
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br bb">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line6.png">
                            &nbsp;
                            <a href="/hmbzx/" target="_blank">
                                颌面部整形
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/hmbzx/fet/">
                                    丰额头
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/hmbzx/mjfms/">
                                    脸颊丰满
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/hmbzx/xbzx/">
                                    下巴整形
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/hmbzx/sl/">
                                    瘦脸术
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line8.png">
                            &nbsp;
                            <a href="/cpxl/pfmr/" target="_blank">
                                皮肤美容
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/cpr/sgzs/">
                                    水光注射
                                </a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/cpmr/mkcd/">
                                    毛孔粗大
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/cpmr/yjtm/">
                                    永久脱毛
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/cpmr/mbcz/">
                                    面部除皱
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line5.png">
                            &nbsp;
                            <a href="/cpxl/pfmr/pfmb/" target="_blank">
                                皮肤美白
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/cpxl/pfmr/guangzinenfu/">
                                    光子嫩肤
                                </a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/cpxl/pfmr/guosuannenfu/">
                                    果酸嫩肤
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/cpxl/pfmr/huangjinshepin/">
                                    黄金射频
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/cpr/qhyq/">
                                    祛黑眼圈
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line10.png">
                            &nbsp;
                            <a href="/cpxl/pfmr/" target="_blank">
                                祛痘祛斑
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/cpmr/qd/">
                                    祛痘
                                </a>
                                <img class="parimg2" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/cpxl/pqdy/">
                                    祛痘印
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/cfmr/qb/">
                                    祛斑
                                </a>
                                <img class="parimg2" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/cpmr/qqb/">
                                    祛雀斑
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line5.png">
                            &nbsp;
                            <a href="/wzx/" target="_blank">
                                注射除皱
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/wzx/zsflg/">
                                    祛泪沟纹
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wzx/qyww">
                                    祛鱼尾纹
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wzx/qttw/">
                                    祛抬头纹
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wzx/qflw/">
                                    祛法令纹
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line11.png">
                            &nbsp;
                            <a href="/jfcz/" target="_blank">
                                紧肤除皱
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/jfcz/jgcz/">
                                    激光除皱
                                </a>
                                <img src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/jfcz/dlpss/">
                                    拉皮除皱
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/jfcz/nkjczs/">
                                    内窥镜除皱
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/jfcz/xxtl/">
                                    线性提拉
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line12.png">
                            &nbsp;
                            <a href="/wxmr/" target="_blank">
                                纹绣美容
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/wxmr/wm/">
                                    纹眉
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wxmr/wyx/">
                                    纹眼线
                                </a>
                                <img class="parimg" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/foot_hot.gif" />
                            </li>
                            <li>
                                <a target="_blank" href="/wxmr/wc/">
                                    纹唇
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/wxmr/qbh/">
                                    祛疤痕
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="br">
                        <div class="mark">
                            <img width="17" height="18" src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/images/line9.png">
                            &nbsp;
                            <a href="/mfzz/" target="_blank">
                                毛发种植
                            </a>
                        </div>
                        <ul class="little">
                            <li>
                                <a target="_blank" href="/mfzz/tfzz/">
                                    头发种植
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/mfzz/fjxtz/">
                                    发际线调整
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/mfzz/jmzz/">
                                    睫毛种植
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="/mfzz/mmzz/">
                                    眉毛种植
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="f_info">
            <div class="con">
                <h1>
                    联系我们
                </h1>
                <ul>
                    <li class="phone">
                        <h2>
                            免费热线
                        </h2>
                        <p>
                            400-060-1992
                        </p>
                    </li>
                    <li class="time">
                        <h2>
                            门诊时间（无假日医院）
                        </h2>
                        <p>
                            09:00-18:00
                        </p>
                    </li>
                    <li class="address">
                        <h2>
                            医院地址
                        </h2>
                        <p>
                            北京市东三环中路16号世桥国贸
                        </p>
                        <!--<p>上海市长宁区虹桥路1165号(1-7层)</p>-->
                    </li>
                </ul>
                <h3 class="to_map to_link">
                    <a href="/link/720.html" target="_blank">
                        查看地图→
                    </a>
                </h3>
                <h3 class="to_environment to_link">
                    <a href="/zt/yx_environment/" target="_blank">
                        艺星环境→
                    </a>
                </h3>
            </div>
        </div>
        <div class="b_relief">
            <h1>
                网站内容申明：本网站信息仅供参考，不能作为诊疗及医疗依据!本网站商标及图片权属艺星医疗美容集团所有，未经授权请勿复制及转载。
            </h1>
        </div>
        <script src="<?= Yii::getAlias('@asseturl'); ?>/beauty/pc/js/swt.js" type="text/javascript" charset="utf-8">
        </script>
    </div>
    <!--公用尾部结束-->
</div>
<script type="text/javascript">
    $(function() {
        $('.single-item').slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            arrows: true,
            slide: '.con_slider',
            fade: true,
            pauseOnHover: false,
            autoplaySpeed: 5000,
            draggable: false,
            onAfterChange: function(a, index) {
                $('.banner_slider .menu div').eq(index).addClass('active').siblings('.banner_slider .menu div').removeClass('active');
            }
        });

        $('.banner_slider .menu menu .nav_thumb').on('click',
        function() {
            var index = $(this).index();
            $(this).addClass('active').siblings('.banner_slider .menu menu .nav_thumb').removeClass('active');
            $('.banner_slider').slickGoTo(index);
        });

        $('.communautes .external').mouseover(function() {
            $('.communautes .external').stop(true);
            $(this).animate({
                'opacity': '1'
            },
            100).siblings('.communautes .external').animate({
                'opacity': '0.5'
            },
            100);
        }).mouseleave(function() {
            $('.communautes .external').animate({
                'opacity': '1'
            },
            100);
        })
        //首页banner手风琴效果js
        //eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('b();$(n).l(6(e){b()});6 b(){9 c=$(\'.g .j\').k(0).d();9 8=$(".2").4();9 a=8/$(".2  .3 5").h;$(".2 .3 5").7({"4":a,"d":c});$(".2,.g").7({"d":c,"q":"r"});f()}6 f(){9 8=$(".2").4();$(".2  .3 5").m(6(){$(p).7({"4":i}).o(".2 .3 5").7({"4":(8-i)/($(".2 .3 5").h-1)})})};',28,28,'||accordion|p4_list|width|li|function|css|w_width|var||w_resize|w_height|height||p_hover|banner_slider|length|983|con_slider|eq|resize|mouseover|window|siblings|this|overflow|hidden'.split('|'),0,{}))
    })
</script>
</body>

</html>
