<?php
use yii\helpers\Url;

$helperInfos = Yii::$app->params['siteInfos'];
$urlPre = Yii::getAlias('@shooturl');
?>
<footer class='main-footer'>
    <div class='footer-prominent-area'>
        <div class='wrapper g'>
            <div class='gi lap-one-third'>
                <a class='footer-prominent-button
                primary
                ' href='http://www.oppo.cn/' title="OPPO社区" target='_blank'>
                    <span class='img'>
                        <img alt='OPPO社区' title="OPPO社区" src='http://static.oppo.com/archives/201502270202233FZ8VzjUJgb2YsLn.png'>
                    </span>
                    <span class='text'>
                        OPPO社区
                    </span>
                </a>
            </div>
            <div class='gi lap-one-third'>
                <a class='footer-prominent-button
                secondary
                ' href='http://www.coloros.com/' title="ColorOS" target='_blank'>
                    <span class='img'>
                        <img alt='OPPO ColorOS' title="ColorOS" src='http://static.oppo.com/archives/20150227020237clUXgMcj3UhukiC0.png'>
                    </span>
                    <span class='text'>
                        ColorOS
                    </span>
                </a>
            </div>
            <div class='gi lap-one-third'>
                <a class='footer-prominent-button
                primary
                ' href='http://store.oppomobile.com/' title="软件商店" target='_blank'>
                    <span class='img'>
                        <img alt='OPPO软件商店' title="软件商店" src='http://static.oppo.com/archives/201503/20150314030306RfYFRTucS1nB3wtQ.png'>
                    </span>
                    <span class='text'>
                        软件商店
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class='footer-sitemap'>
        <nav class='wrapper'>
            <ul class='g'>
                <?php foreach ($helperInfos as $cKey => $infos) { ?>
                <li class='gi lap-one-fifth'>
				    <a class='m-item' href='javascript: void(0);'><?= $infos['name']; ?></a>
                    <span class="toggle js-toggle-sitemap"></span>
                    <ul>
                        <?php foreach ($infos['infos'] as $aKey => $infoName) { ?>
                        <li>
						    <a href='<?= $urlPre . Url::to(["/info/{$cKey}/{$aKey}"]); ?>' target='_blank'><?= $infoName; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class='footer-tools'>
        <div class='wrapper'>
            <div class='footer-social lap-one-half desk-lap-one-third'>
                <p>
                    <span class='text'>关注我们</span>
                    <a href='http://weibo.com/oppo' target='_blank'>
                        <span class='icon icon-weibo'></span>
                    </a>
                    <a href='#' id='footer-wx' class='relative'>
                        <span class='icon icon-wechat'></span>
						<img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/wx.png" class="wx-float" alt="">
                    </a>
                    <a href='http://career.oppo.com' target='_blank' class='text text-link'>
                        加入我们
                    </a>
                    <a href='http://www.oppo.com/cn/service/help?name=sourcing' target='_blank' class='text text-link'>
                        采购相关
                    </a>
                </p>
            </div>
            <div class='footer-subscribe lap-one-half desk-lap-one-third align-right'>
                <div class="g one-whole desk-one-half lap-one-half about-contact pull-left">
                    <a id="btn-kf" href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=890&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1" target="_blank">
                        <div class="about-contact-icon">
                            <span class="icon icon-chat">
                            </span>
                        </div>
                        <div class="about-contact-info">
                            <h4 class='h-delta'>
                                <span class="highlight">在线客服</span>
                                <span class="icon icon-arrow"></span>
                            </h4>
                            <p>
                                人工服务：8:30~22:00
                            </p>
                        </div>
                    </a>
                </div>
                <div class="g one-whole desk-one-half lap-one-half about-contact pull-left second-about-contact">
                    <div class="about-contact-icon">
                        <span class="icon icon-tel"></span>
                    </div>
                    <div class="about-contact-info">
                        <h4 class='h-delta'><span class="highlight">4001-666-888</span></h4>
                        <p style="">7*24小时客服电话</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-info'>
        <div class='wrapper'>
            <p class='copy'>
                © 2005 - 2016 东莞市永盛通信科技有限公司 版权所有 粤ICP备08130115号-1 联系方式：0755-66866666
            </p>
            <a href="http://wljg.gdgs.gov.cn/corpsrch.aspx?key=441900000436441" target="_blank" title="企业名称：广东欧珀电子工业有限公司 电子标识有效期：2015-12-14～2020-12-16" class="footer-identification">
                <img src="http://wljg.gdgs.gov.cn/upload/image/20141126/20141126002933.png" alt="" style="border:0;">
            </a>
        </div>
    </div>
</footer>
