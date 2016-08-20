<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title><?= $info['seo_title']; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="apple-itunes-app" content="app-id=949320942,app-argument=http://17house.com/profile/?1">
    <meta name="applicable-device" content="mobile">
    <meta name="keywords" content="<?= $info['seo_keywords']; ?>">
    <meta name="description" content="<?= $info['seo_dscription']; ?>">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/tuig/css/common.css?v=20151230">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturlold'); ?>/msite/css/swiper.css?v=20151230">
    <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/tuig/css/tuangouhui.css?v=20160107">
    <link rel="shortcut icon" href="http://www.17house.com/favicon.ico" type="image/x-icon" />
    <div id='wx_pic' style='margin:0 auto;display:none;'>
        <img src='<?= Yii::getAlias('@msiteurl'); ?>/newstyle/images/logo300.jpg' alt='一起装修网'/>
    </div>
</head>

<body>
    <!--页头 start-->
    <header class="cWhite cMdGray clearfix">
        <div class="top">
            <div class="left">
                <a href="<?= Yii::getAlias('@msiteurl'); ?>/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/logo.png" alt="一起装修网"></a>
                <span class="city f14" data-city=<?= $info['companyInfo']['commpany_citycode']; ?>> 
					<a href="<?= Yii::getAlias('@msiteurl'); ?>/city/citylist/">
						<span class="js-current-city"> <?= $info['companyInfo']['company_short_name']; ?> </span><i class="iconfont f14">&#xe60d;</i></a></span>
			</div>
			<div class="right">
				<span class="user"><a href="<?= Yii::getAlias('@msiteurl'); ?>/my/" rel="nofollow"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/user.png?v=1" alt="一起装修网"></a></span>
				<button type="button" class="menu menu-animate">
				  <span></span>
				</button>
			</div>
		</div>
	</header>
	<!--主导航（默认隐藏） start-->
	<div class="main-nav-icon clearfix">
		<ul>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon.png" alt="首页"></a><span class="fN f14"><a href="#">首页</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/xiaoguotu/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_01.png" alt="看效果图"></a><span class="fN f14"><a href="#">看效果图</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/news/zhuangxiu-liucheng-static/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_02.png" alt="装修流程"></a><span class="fN f14"><a href="#">装修流程</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/news/hots-149/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_03.png" alt="装修预算"></a><span class="fN f14"><a href="#">装修预算</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/news/zhuangxiu-xuancaigonglue/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_04.png" alt="选材攻略"></a><span class="fN f14"><a href="#">选材攻略</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/tuan/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_05.png" alt="现场团购"></a><span class="fN f14"><a href="#">现场团购</a></span></li>
			<li><a rel="nofollow" href="http://mall.17house.com/<?= $info['companyInfo']['commpany_citycode']; ?>/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_06.png" alt="建材家具"></a><span class="fN f14"><a href="#">建材家具</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/index/bbs/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_07.png" alt="装修论坛"></a><span class="fN f14"><a href="#">装修论坛</a></span></li>
			<li><a rel="nofollow" href="<?= Yii::getAlias('@msiteurl'); ?>/apps/"><img src="<?= Yii::getAlias('@asseturlold'); ?>/msite/images/icon_08.png" alt="装修App"></a><span class="fN f14"><a href="#">装修App</a></span></li>
		</ul>
	</div>
	<!--主导航（默认隐藏） end-->
	<!--页头 end-->

