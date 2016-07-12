<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="apple-itunes-app" content="app-id=949320942,app-argument=http://17house.com/profile/?1">
    <meta name="applicable-device" content="mobile">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="no">
     <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/css/common.css">
     <link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/spread/house/css/suced.css">
    <title>成功</title>
	</head>
	<body>
		<div class="suced_main Hsuced_main">
			<!--主体部分-->
			<section>
				<!--顶部-->
				<div class="top">
					<p class="nav_T"><a href="index.html"></a>预约成功</p>
					<dl class="suced">
					    <dt><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/suc_dt.png" /></dt>
						<dd class="top_p">设计师会在5分钟内回访了解您的具体需求，请保持您的电话畅通。</dd>
					</dl>
					<p class="btn_p">咨询热线：<?= $info['hotline']; ?></p>
					<p class="top_p">线下体验店：<?= $info['address']; ?></p>
				</div>
				<!--list-->
                <?php if ($view == 'wed') { ?>
				<div class="list">
					<a href="http://bbs.17house.com/forum.php?mod=forumdisplay&fid=2&filter=sortid&sortid=20&mobile=2">
						<p><span>|</span>&nbsp;&nbsp;&nbsp;&nbsp;看看别人家怎么装修的<i>更多></i></p>
					</a>
					<div class="list_dl">
						<a href="http://www.17house.com/news/226871.html">
						<dl>
							<dt>新婚房间装修五大误区</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd1.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd2.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd3.jpg" /></dd>
						</dl>
						</a>
						<a href="http://www.17house.com/news/239942.html">
						<dl>
							<dt>客厨书餐四位一体 超小户型的极致宜家风</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd4.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd5.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd6.jpg" /></dd>
						</dl>
						</a> 
					</div>
					<div class="list_dl">
						<a href="http://www.17house.com/news/240120.html">
						<dl>
							<dt>上海美到窒息的婚房只有30平米，侬信不啦</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd7.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd8.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Hlist_dd9.jpg" /></dd>
						</dl>
						</a>
					</div>
				</div>				
				<?php } elseif ($view == 'old') { ?>
				<div class="list">
					<a href="http://bbs.17house.com/forum.php?mod=forumdisplay&fid=2&filter=sortid&sortid=20&mobile=2">
						<p><span>|</span>&nbsp;&nbsp;&nbsp;&nbsp;老房装修注意事项<i>更多></i></p>
					</a>
					<div class="list_dl">
						<a href="http://www.17house.com/news/241564.html">
						<dl>
							<dt>老房翻新步骤及造价分析</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd1.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd2.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd3.jpg" /></dd>
						</dl>
						</a>
						<a href="http://www.17house.com/news/241577.html">
						<dl>
							<dt>老房墙面翻新处理方法及注意事项</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd4.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd5.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd6.jpg" /></dd>
						</dl>
						</a>
					</div>
					<div class="list_dl">
						<a href="http://www.17house.com/news/225516.html">
						<dl>
							<dt>老房新生 60平实用生活二人居</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd7.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd8.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd9.jpg" /></dd>
						</dl>
						</a>
						<a href="http://www.17house.com/news/235701.html">
						<dl>
							<dt>3万翻新90㎡老房，附清单</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd10.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd11.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/list_dd12.jpg" /></dd>
						</dl>
						</a>
					</div>
				</div>
				<?php } else { ?>
				<div class="list">
					<a href="http://bbs.17house.com/forum.php?mod=forumdisplay&fid=2&filter=sortid&sortid=20&mobile=2">
						<p><span>|</span>&nbsp;&nbsp;&nbsp;&nbsp;看看别人家怎么装修的<i>更多></i></p>
					</a>
					<div class="list_dl">
						<a href="http://www.17house.com/news/235605.html">
						<dl>
							<dt>90后单身男9万装出三居北欧风</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd1.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd2.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd3.jpg" /></dd>
						</dl>
						</a>
						<a href="http://www.17house.com/news/237038.html">
						<dl>
							<dt>60平以下的房子这样装，能收能缩还能藏</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd4.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd5.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd6.jpg" /></dd>
						</dl>
						</a>
					</div>
					<div class="list_dl">
						<a href="http://www.17house.com/news/220611.html">
						<dl>
							<dt>小户型收纳 墙面空间的再利用</dt>
							<dd><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd7.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd8.jpg" /><img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/Xlist_dd9.jpg" /></dd>
						</dl>
						</a>
					</div>
				</div>
                <?php } ?>
			</section>
			<footer>
				<p>
					<b>了解最新装修资讯</b>长按识别右侧二维码或用户可以在微信中搜索一起装修网微信公众号：
					<span>wx17house</span>
				</p>
				<img src="<?= Yii::getAlias('@asseturl'); ?>/spread/house/img/foot_bg.jpg"/>
			</footer>
			<!--主体end-->
		</div>
	</body>
</html>
