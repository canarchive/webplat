<?php
use yii\helpers\Url;

$seoTitle = Yii::$app->params['seoTitle'];
$seoKeyword = Yii::$app->params['seoKeyword'];
$seoDescription = Yii::$app->params['seoDescription'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/css-page/reset.css" rel="stylesheet" type="text/css" />
<link href="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/css-page/layout.css" rel="stylesheet" type="text/css" />
<link href="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/css-page/css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/oppo.ico" />
<title><?= $seoTitle; ?></title>
<meta name="baidu-site-verification" content="GwVTTZMBUAV55I4M" />
<meta name="keywords" content="<?= $seoKeyword; ?>" />
<meta name="description" content="<?= $seoDescription; ?>" />
<!--[if lte IE 6]>
<script src="http://store.nearme.com.cn/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
<script type="text/javascript">
DD_belatedPNG.fix('div, ul, li, input ,h1, a,dd,b,img');
</script>
<![endif]-->
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@shooturl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.PASSPORT_URL = '<?= Yii::getAlias('@passporturl'); ?>';
</script>
</head>

<body>
<div class="div">
    <div class="top">
        <div class="head">
            <div class="head_left">
			    <a href="<?= Yii::getAlias('@shooturl'); ?>">
				    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/logo.jpg" />
                </a>
            </div>
            <div class="head_right">
			    <a href="<?= Yii::getAlias('@shooturl') . Url::to(['/info/helper']); ?>">
                    帮助文档
                </a>
            </div>
        </div>
    </div>
    <!-- top -->
    <div class="main_1" data-cycle-speed="1000">
        <div class="main_1s">
            <div class="main_title">
                OPPO手机官方管理工具&nbsp;
                <span>(V3.8.2)</span>
            </div>
            <div class="main_titles">
                管理照片和文件、清理手机中垃圾、安装官方应用游戏
            </div>
            <div class="main_down">
			    <a href="<?= Yii::getAlias('@spreadurl') . Url::to(['/signup/']); ?>">
                    立即体验
                </a>
                XP/Win7/Win8
            </div>
            <div class="main_1_img">
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/img_1.png" />
            </div>
        </div>
    </div>
    <!-- main_1 -->
    <div class="main_2">
        <div class="main_2s">
            <div class="main_2s_ul">
                <ul>
                    <li style="margin-right:230px;display: inline;">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon_1.jpg" /><br/>
                        <p>PNP闪连</p>不需任何设置<br/>即可连接
                    </li>
                    <li style="margin-right:190px;display: inline;">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon_2.jpg" />
                        <p>清理优化</p>一键清理、极速备份，<br/>手机更安全
                    </li>
                    <li>
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon_3.jpg" />
                        <p>微信、美拍视频导出</p>分享视频，更自由、<br/>更方便
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main_2 -->
    <div class="main_3">
        <div class="main_3s">
            <div class="main_3s_word">
                <p>即插即连</p>
                PNP闪连是OPPO手机助手独有的连接技术，具有连接快、传输快、稳定好的特点，OPPOer专属哦！
            </div>
            <div class="main_3s_img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/tip_1.jpg" />
            </div>
        </div>
    </div>
    <!-- main_3 -->
    <div class="main_4">
        <div class="main_4s">
            <div class="main_4s_word">
                <p>清理优化</p>
                清理优化可以一键解决手机运行速度慢、内存不足、手机中毒等现象，可以深度清理缓存垃圾、大文件、多余安装包，备份联系人、短信等，使手机更安全！
            </div>
            <div class="main_4s_img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/tip_2.jpg" />
            </div>
        </div>
    </div>
    <!-- main_4 -->
    <div class="main_5">
        <div class="main_5s">
            <div class="main_5s_word">
                <p>微信、美拍视频导出</p>
                我们可以帮你导出好玩、有趣、美好的微信和美拍的小视频，让你分享视频更自由、更方便！
            </div>
            <div class="main_5s_img">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/tip_3.jpg" />
            </div>
            <div class="main_5_down">
			    <a href="<?= Yii::getAlias('@spreadurl') . Url::to(['/signup/']); ?>">
                    立即体验
                </a>
            </div>
        </div>
    </div>
    <!-- main_5 -->
    <div class="main_6">
        <div class="main_6s">
            Copyright © 广东欧珀电子工业有限公司 2014. All Rights Reserved. 网站备案号 : 粤ICP备08130115号-1
        </div>
    </div>
</div>
<div style="display: none;">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://": " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F60be21aec6469c0f8b7f14996acfe756' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>
</body>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/jquery-1.8.3.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/scrolltopcontrol.js"></script>
<script>
$(function() {
    $('#top').hover(function() {
        $(this).attr('src', '<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon_topOn.jpg');
    },
    function() {
        $(this).attr('src', '<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon_top.jpg');
    });
    $('#alert_a').hover(function() {
        $('#alert_bg').show();
    },
    function() {
        $('#alert_bg').hide();
    })
})
</script>

</html>
