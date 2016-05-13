<?php
use yii\helpers\Url;

$siteInfos = $this->context->siteInfos;
$urlPre = Yii::getAlias('@shooturl');
?>
<footer class='main-footer'>
    <div class='footer-sitemap'>
        <nav class='wrapper'>
            <ul class='g'>
                <?php foreach ($siteInfos as $cKey => $infos) { ?>
                <li class='gi lap-one-fifth'>
				    <a class='m-item' href='javascript: void(0);'><?= $infos['name']; ?></a>
                    <span class="toggle js-toggle-sitemap"></span>
                    <ul>
                        <?php foreach ($infos['infos'] as $aKey => $subInfo) { ?>
                        <li>
						    <a href='<?= $urlPre . Url::to(['/info/help/index', 'code' => $subInfo['code']]); ?>' target='_blank'><?= $subInfo['name']; ?></a>
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
                            <span class="icon icon-chat"></span>
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
        </div>
    </div>
</footer>
