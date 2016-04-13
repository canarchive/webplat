<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="location" content="province=北京;city=北京">
<meta name="keywords" content="<?= $info['name']; ?>" />
<meta name="description" content="<?= $info['description']; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta name="mobile-agent" content="format=html5;url=http://m.jia.com/tg/beijing/" />
<title><?= $info['name']; ?></title>
<link href="<?= $asseturl; ?>css/common.css?v=20150102" rel="stylesheet" />
<link href="<?= $asseturl; ?>css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
window.assetUrl = '<?= Yii::getAlias('@asseturl'); ?>'; 
window.grouponUrl = '<?= Yii::getAlias('@grouponurl'); ?>'; 
</script>
<script src="<?= $asseturl; ?>js/jquery.min.1.7.2.js?v=20120901" type="text/javascript"></script>
<script src="<?= $asseturl; ?>js/common.js?v=20120901" type="text/javascript"></script>
<script src="<?= $asseturl; ?>js//jquery.lazyload.js?v=20140428" type="text/javascript"></script>
<script src="<?= $asseturl; ?>js/global.js?v=20140702" type="text/javascript"></script>
<style>.lazy{display: none;}</style>
</head>

<body>
<img src="<?= $asseturl; ?>images/nwe_h.png" style="z-index:56;position:absolute;" />
<div id="Jia-header-2016" class="Jia-header-2016">
    <div class="Jia-header-main">
        <div class="jia_logo clearfix fl">
            <div class="logo fl">
                <a href="http://www.jia.com/beijing/" tjjj="head.logo.jia" target="_top">
				    <img src="<?= $asseturl; ?>images/logo.gif" width="121" height="75" alt="团家汇网首页">
                </a>
            </div>
            <div class="fl">
			    <img src="<?= $asseturl; ?>images/act.gif" width="76" height="75">
            </div>
            <div class="fl">
			    <img src="<?= $asseturl; ?>images/act.gif" width="76" height="75">
            </div>
        </div>
        <div class="Jia-nav-2016 fl">
            <ul class="clearfix fst-ul">
                <li class="Jia-index fst-li">
                    <div class="icon-layer">
                        <span class="Jia-nav-icon1">
                        </span>
                    </div>
                    <div class="ln-layer">
                        <a href="http://www.jia.com/beijing/" tjjj="2014.nav.home" id="jia_nav_home"
                        class="fst-ln">
                            首页
                        </a>
                    </div>
                </li>
                <li class="Jia-zzx with-sub-nav fst-li" id="nav_zzx">
                    <div class="icon-layer">
                        <span class="Jia-nav-icon2">
                        </span>
                    </div>
                    <div class="ln-layer">
                        <a id="jia_nav_zhuangxiu" href="http://zhuangxiu.jia.com/" tjjj="2014.nav.zzx"
                        class="fst-ln">
                            找装修
                        </a>
                    </div>
                </li>
                <li class="Jia-mjc with-sub-nav fst-li current-nav" id="nav_mjc">
                    <div class="icon-layer">
                        <span class="Jia-nav-icon3">
                        </span>
                    </div>
                    <div class="ln-layer">
                        <a id="jia_nav_mall" href="http://tg.jia.com/beijing/" tjjj="2014.nav.mall"
                        class="fst-ln">
                            买建材家居
                        </a>
                    </div>
                </li>
                <li class="Jia-xzx with-sub-nav fst-li" id="nav_xzx">
                    <div class="icon-layer">
                        <span class="Jia-nav-icon4"></span>
                    </div>
                    <div class="ln-layer">
                        <a href="/xuezx/" tjjj="2014.nav.xuezx" class="fst-ln">学装修</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
