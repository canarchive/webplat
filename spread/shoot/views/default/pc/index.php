<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php //echo $this->render('_header', ['info' => $info]); ?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="lt-ie9">
<![endif]-->
<html>

<head>
<meta charset="UTF-8">
<title>
    OPPO官网-双12大促，购机钜惠
</title>
<meta name="description" content="OPPO手机，双12大促，新品A53上市，更有R7plus升级版全新开启，购机优惠好礼送不停">
<meta name="keywords" content="双12促销，OPPO手机，A53，购机促销，OPPO手机官网">
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/css/styles_hd.css?v=20151211213454">
</head>

<body>
<div class="unit" id="header">
    <div class="wrapper">
        <div class="right header-links" id='userInfo'>
		    <a href="<?= Yii::getAlias('@shooturl'); ?>" target="_blank">
                进入官网
            </a>
        </div>
        <div class="left header-logo">
		    <a href="<?= Yii::getAlias('@shooturl'); ?>" target="_blank">
			    <img src="<?= Yii::getAlias('@shooturl'); ?>/shoot/default/images/spread/logo.png" />
            </a>
        </div>
    </div>
</div>
<div class='unit' id='banner'>
    <div class='wrapper'>
        <div class='slogan'>
            <img src="/2015/shuang12/images/banner-slogan.png" />
        </div>
    </div>
</div>
<div class='unit' id='unit-1'>
    <div class='wrapper'>
        <div class='unit-title'>
            <img src="/2015/shuang12/images/unit-1-title.png" />
        </div>
        <div class='unit-1-content'>
            <img src="/2015/shuang12/images/unit-1-content-2.png" />
        </div>
        <!-- <img id="unit-qrcode" src="/2015/shuang12/images/qrcode-unit.png"
        />
        <div class='unit-1-btn'>
            <a href="javascript:;" class='btn btn-yellow btn-grey' onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'ms']);"
            style="line-height:58px;padding-top:0;font-size:20px;">
                秒杀已结束
            </a>
        </div>
        <div class='unit-1-text'>
            *温馨提示：请提前登录官网账号，填写详细收货信息。
        </div>
        <a href="#" class='unit-1-more'>
            查看名单&nbsp;&raquo;
        </a>
        -->
        <a href="#" class='listbtn list-1'>
            查看赠送名单&nbsp;&raquo;
        </a>
        <a href="#" class='listbtn list-2'>
            查看赠送名单&nbsp;&raquo;
        </a>
        <a href="#" class='listbtn list-3'>
            查看赠送名单&nbsp;&raquo;
        </a>
    </div>
</div>
<div class='unit' id='unit-2'>
    <div class='wrapper'>
        <div class='unit-title'>
            <img src="/2015/shuang12/images/unit-2-title.png" />
        </div>
        <div class='unit-mobile unit-r7plus' id='r7plusgp'>
            <div class='unit-tag'>
                <img src="/2015/shuang12/images/unit-2-tag.png" />
            </div>
            <div class='unit-parts'>
                <img src="/2015/shuang12/images/unit-r7plus-parts-2.png" />
            </div>
            <div class='unit-qrcode'>
                <img src="/2015/shuang12/images/qrcode-r7plusgp.png" />
                <br>
                扫码购机立减10元
            </div>
            <div class='unit-left'>
                <img src="/2015/shuang12/images/mobile-r7plus.png" />
            </div>
            <div class='unit-right'>
                <div class='title'>
                    <span>
                        R7Plus
                    </span>
                    <font>
                        【高配版】
                    </font>
                </div>
                <div class='subtitle'>
                    · 4G运存 + 64G内存
                </div>
                <div class='text'>
                    · 6吋2.5D弧度屏
                    <br>
                    · 4100毫安大电池、VOOC闪充、指纹识别
                </div>
                <div class='prices'>
                    <label>
                        全网通版:
                        <font>
                            ￥3299
                        </font>
                    </label>
                    <label>
                        移动版:
                        <font>
                            ￥2999
                        </font>
                    </label>
                </div>
                <div class='btns'>
                    <a href="http://store.oppo.com/products/342.html" target="_blank" class='btn btn-red'
                    data-type='r7plusmh' onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7plus_qwt']);">
                        立即购买
                    </a>
                    <a href="http://store.oppo.com/products/343.html" target="_blank" class='btn btn-red'
                    data-type='r7plusth' onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7plus_yd']);">
                        立即购买
                    </a>
                </div>
            </div>
            <!-- <div class='unit-lottery unit-3-1-table' id='lottery'>
            <table>
            <tr>
            <td><div class='td lottery-unit lottery-unit-0'><img src="/2015/shuang12/images/prize-0.png" /><br><span>O-lens镜头式相机</span></div></td>
            <td><div class='td lottery-unit lottery-unit-1'><img src="/2015/shuang12/images/prize-1.png" /><br><span>R7 Plus高配版</span></div></td>
            <td><div class='td lottery-unit lottery-unit-2'><img src="/2015/shuang12/images/prize-2.png" /><br><span>OPPO时尚自拍杆</span></div></td>
            </tr>
            <tr>
            <td><div class='td lottery-unit lottery-unit-7'><img src="/2015/shuang12/images/prize-3.png" /><br><span>谢谢惠顾</span></div></td>
            <td><div class='td'><a href="#" id='btn-lottery'><img src="/2015/shuang12/images/prize-btn.png" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'lottery']);"/></a></div></td>
            <td><div class='td lottery-unit lottery-unit-3'><img src="/2015/shuang12/images/prize-3.png" /><br><span>谢谢惠顾</span></div></td>
            </tr>
            <tr>
            <td><div class='td lottery-unit lottery-unit-6'><img src="/2015/shuang12/images/prize-0.png" /><br><span>O-lens镜头式相机</span></div></td>
            <td><div class='td lottery-unit lottery-unit-5'><img src="/2015/shuang12/images/prize-3.png" /><br><span>谢谢惠顾</span></div></td>
            <td><div class='td lottery-unit lottery-unit-4'><img src="/2015/shuang12/images/prize-2.png" /><br><span>OPPO时尚自拍杆</span></div></td>
            </tr>
            </table>
            <div class='unit-lottery-list'>
            <div class='title2'>今日中奖名单</div>
            <div class='content2'>
            <div class='list2' id='todayWinnerList'>
            <ul></ul>
            </div>
            <div class='more2'><a href="winners.html" target="_blank" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'viewlist']);">全部中奖名单&nbsp;&raquo;</a></div>
            </div>
            </div>
            </div>
            <div class='unit-lottery-rules'>
            <p class='title1'>奖品设置：</p>
            <p>一等奖：R7 Plus移动高配版手机</p>
            <p>二等奖：O-lens镜头式相机</p>
            <p>三等奖：OPPO时尚自拍杆（颜色随机发送）</p>
            <p class='title1'>预约抽奖规则：</p>
            <p>1）填写有效手机号码预约R7 Plus高配版或A53；</p>
            <p>2）预约成功后即可获得一次抽奖机会；</p>
            <p>3）每个成功预约的手机号码仅限抽奖一次；</p>
            <p>4）抽奖获取的实物奖品，将在10个工作日内寄出；</p>
            <p>5）此次活动仅限普通用户参与，如果发现作弊行为恶意获取奖品，有权取消获奖资格。</p>
            </div> -->
        </div>
        <div class='unit-mobile unit-a53' id='a53'>
            <div class='unit-parts'>
                <img src="/2015/shuang12/images/unit-a53-parts.png" />
            </div>
            <div class='unit-tag'>
                <img src="/2015/shuang12/images/unit-2-tag.png" />
            </div>
            <div class='unit-qrcode'>
                <img src="/2015/shuang12/images/qrcode-a53.png" />
                <br>
                扫码购机立减10元
            </div>
            <div class='unit-left'>
                <img src="/2015/shuang12/images/mobile-a53.png" />
            </div>
            <div class='unit-right'>
                <div class='title'>
                    <span>
                        A53
                    </span>
                    超美金属大屏拍照手机
                </div>
                <div class='text'>
                    · 全金属一体机身
                    <br>
                    · 2.5D弧度屏、微弧中框
                </div>
                <div class='prices'>
                    <label>
                        <font>
                            ￥1799
                        </font>
                    </label>
                </div>
                <div class='btns'>
                    <a href="http://store.oppo.com/products/341.html" target="_blank" class='btn btn-red'
                    data-type='a53reserve' onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'a53']);">
                        立即购买
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='unit' id='unit-3'>
    <div class='wrapper'>
        <div class='unit-title'>
            <img src="/2015/shuang12/images/unit-3-title.png" />
        </div>
        <div class='unit-mobile unit-r7s'>
            <div class='unit-tag'>
                <img src="/2015/shuang12/images/unit-2-tag-1-2.png" />
            </div>
            <div class='unit-parts'>
                <img src="/2015/shuang12/images/unit-r7s-parts.png" />
            </div>
            <div class='unit-qrcode'>
                <img src="/2015/shuang12/images/qrcode-r7s.png" />
                <br>
                扫码购机立减10元
            </div>
            <div class='unit-left'>
                <img src="/2015/shuang12/images/mobile-r7s.png" />
            </div>
            <div class='unit-right'>
                <div class='title'>
                    <span>
                        R7s
                    </span>
                    长续航闪充利器
                </div>
                <div class='tag'>
                    <span>
                        金色 / 玫瑰金 / 银色
                    </span>
                </div>
                <!-- <div class='text'>· 5.5寸大屏超窄边框<br>· 4G RAM & 32G ROM<br>· 3070mAh电池容量&搭载VOOC闪充</div>
                <div class='prices'><label>全网通版:<font>￥2599</font></label><label>移动版:<font class=''>￥2499</font></label></div>
                <div class='prices origin-prices'><label>&nbsp;<font><del>￥2799</del></font></label><label>&nbsp;<font class=''><del>￥2599</del></font></label></div> -->
                <img src="/2015/shuang12/images/unit-2-price.png" style="margin-top:60px; margin-bottom:6px;">
                <div class='btns'>
                    <a href="http://store.oppo.com/products/338.html" target="_blank" class='btn btn-red'
                    onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7s_qwt']);">
                        立即购买
                    </a>
                    <a href="http://store.oppo.com/products/330.html" target="_blank" class='btn btn-red'
                    onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7s_yd']);">
                        立即购买
                    </a>
                </div>
            </div>
        </div>
        <div class='unit-mobile unit-r7-r7plus'>
            <div class='unit-left1'>
                <div class='unit-r7'>
                    <div class='unit-parts'>
                        <img src="/2015/shuang12/images/unit-r7-parts.png" />
                    </div>
                    <div class='unit-qrcode'>
                        <img src="/2015/shuang12/images/qrcode-r7.png" />
                        <br>
                        扫码购机立减10元
                    </div>
                    <div class='unit-left'>
                        <img src="/2015/shuang12/images/mobile-r7.png" />
                    </div>
                    <div class='unit-right'>
                        <div class='title'>
                            <span>
                                R7
                            </span>
                            全金属闪拍利器
                        </div>
                        <div class='prices'>
                            <label>
                                移动版:
                                <font>
                                    ￥2299
                                </font>
                            </label>
                            <label>
                                电信版:
                                <font class=''>
                                    ￥2399
                                </font>
                            </label>
                        </div>
                        <div class='btns'>
                            <a href="http://store.oppo.com/products/288.html" target="_blank" class='btn btn-red'
                            onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7_yd']);">
                                立即购买
                            </a>
                            <a href="http://store.oppo.com/products/304.html" target="_blank" class='btn btn-red'
                            onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7_dx']);">
                                立即购买
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='unit-right1'>
                <div class='unit-r7plus2'>
                    <div class='unit-tag'>
                        <img src="/2015/shuang12/images/unit-2-tag-3.png" />
                    </div>
                    <div class='unit-parts'>
                        <img src="/2015/shuang12/images/unit-r7plus-parts2.png" />
                    </div>
                    <div class='unit-qrcode'>
                        <img src="/2015/shuang12/images/qrcode-r7plus2.png" />
                        <br>
                        扫码购机立减10元
                    </div>
                    <div class='unit-left'>
                        <img src="/2015/shuang12/images/mobile-r7plus2.png" />
                    </div>
                    <div class='unit-right'>
                        <div class='title'>
                            <span>
                                R7Plus
                            </span>
                            全金属续航大咖
                        </div>
                        <div class='subtitle'>
                            · 3G运存+32G内存
                        </div>
                        <div class='prices'>
                            <label>
                                移动版:
                                <font>
                                    ￥2899
                                </font>
                            </label>
                            <label>
                                全网通版:
                                <font class=''>
                                    ￥2999
                                </font>
                            </label>
                        </div>
                        <div class='prices origin-prices'>
                            <label>
                                &nbsp;
                                <font>
                                    <del>
                                        ￥2999
                                    </del>
                                </font>
                            </label>
                            <label>
                                &nbsp;
                                <font class=''>
                                    <del>
                                        ￥3299
                                    </del>
                                </font>
                            </label>
                        </div>
                        <div class='btns'>
                            <a href="http://store.oppo.com/products/314.html" target="_blank" class='btn btn-red'
                            onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7plus_yd2']);">
                                立即购买
                            </a>
                            <a href="http://store.oppo.com/products/319.html" target="_blank" class='btn btn-red'
                            onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r7plus_qwt2']);">
                                立即购买
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='unit' id='unit-4'>
    <div class='wrapper'>
        <div class='unit-title'>
            <img src="/2015/shuang12/images/unit-4-title.png" />
        </div>
        <div class='unit-mobile unit-r1c'>
            <div class='unit-parts'>
                <img src="/2015/shuang12/images/unit-r1c-parts.png" />
            </div>
            <div class='unit-qrcode'>
                <img src="/2015/shuang12/images/qrcode-r1c.png" />
                <br>
                扫码购机立减10元
            </div>
            <div class='unit-left'>
                <img src="/2015/shuang12/images/mobile-r1c.png" />
            </div>
            <div class='unit-right'>
                <div class='title'>
                    <span>
                        R1C
                    </span>
                    钻石流光镜面拍照手机
                </div>
                <div class='text'>
                    · 钻石镜面、薄至6.85mm
                    <br>
                    · 1300万摄像头
                </div>
                <div class='prices'>
                    <label>
                        <font>
                            ￥1599
                        </font>
                    </label>
                </div>
                <div class='btns'>
                    <a href="http://store.oppo.com/products/118.html" class='btn btn-red'
                    target="_blank" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'r1c']);">
                        立即购买
                    </a>
                </div>
            </div>
        </div>
        <div class='unit-mobile unit-stick'>
            <div class='unit-left'>
                <img src="/2015/shuang12/images/mobile-stick.png" />
            </div>
            <div class='unit-right'>
                <div class='title'>
                    OPPO自拍杆
                </div>
                <div class='text'>
                    · 一体化设计、小巧轻便、亲肤手感
                    <br>
                    · 线控操作，即插即用
                </div>
                <div class='prices'>
                    <label class='red'>
                        <font>
                            ￥39
                        </font>
                        包邮
                    </label>
                </div>
                <div class='btns'>
                    <a href="http://store.oppo.com/products/328.html" class='btn btn-red'
                    target="_blank" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'zpg']);">
                        立即购买
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='unit' id='rules'>
    <div class='wrapper'>
        <div class='title'>
            活动规则
        </div>
        <div class='rules'>
            <p class='subtitle'>
                一、活动时间：2015年12月8日-14日
            </p>
            <p class='subtitle'>
                二、购机赠品礼包数量有限，送完即止。
            </p>
            <p class='subtitle'>
                三、秒杀乐不停
            </p>
            <p>
                自12月8日-11日每天10点秒杀1台N1mini旋转拍照手机移动版白色，请提前登录OPPO账号并填写好收货信息，做好开抢准备，名单实时公布，如不在48小时内支付将被视为放弃资格。
            </p>
            <p class='subtitle'>
                四、R7 Plus高配版预约抽奖
            </p>
            <p>
                抽奖资格：填写有效手机号码预约R7 Plus高配版后，即可参与抽奖；
            </p>
            <p>
                奖项设置：R7 Plus移动高配版手机、O-lens镜头式相机、OPPO自拍杆；
            </p>
            <p>
                领取奖项：获奖用户请于中奖页面填写奖品收货信息，以便及时发放奖励，不填写则视为放弃奖品，我们将在10个工作日内发奖，请注意查收。
            </p>
            <p class='subtitle'>
                五、 购R7家族（R7 Plus高配版、R7s、R7 Plus和R7，不分版本不分颜色）均可加赠10可币（价值10元）
            </p>
            <p>
                1）可币将会以短信形式把兑换的卡号与密码发送到您下单购买的手机号码中，券码具有唯一性，请认真填写手机号码，因个人原因填错手机号码或丢失券码概不补发。
            </p>
            <p>
                2）可币可用来购买OPPO手机主题、字体、锁屏、游戏道具等付费资源。
            </p>
            <p>
                3）可币激活方式：
            </p>
            <p>
                需升级至OPPO会员3.3.1以上版本，可在【OPPO会员】-【设置】-【检查更新】完成升级；
            </p>
            <p>
                请到【OPPO会员】-【登录注册】-【可币中心】-【充值可币】-【游戏点卡】-【可币卡】，输入卡号和密码，点击【确认充值】，充值成功即可使用；
            </p>
            <p>
                充值有效期截至2016年12月31日。
            </p>
            <p class='subtitle'>
                六、12月12日当天，抢先买礼更多
            </p>
            <p>
                0点开始，前500名购机用户加送移动电源；
            </p>
            <p>
                10点开始，前300名购机用户加送小欧公仔；
            </p>
            <p>
                21点开始，前100名购机用户加送OPPO雨伞；
            </p>
            <p>
                以支付时间为准，若支付时间相同，则下单时间较快用户获得，获奖名单将于12月14日在活动页面公布，奖品将于活动结束后15个工作日内发出。
            </p>
            <p class='subtitle'>
                七、多买多送
            </p>
            <p>
                同一订单凡购买任意2台及以上手机用户，可获赠OPPO自拍杆1个，奖品将于活动结束后15个工作日内发出。
            </p>
            <p class='subtitle'>
                八、 无线端购机立减10元
            </p>
            <p>
                活动期间，用手机打开OPPO官网购机专享立减10元优惠。
            </p>
            <p class='subtitle'>
                九、晒单有礼规则：
            </p>
            <p>
                购R7 Plus高配版并给予5星好评+不少于3张的手机实物图晒单+30字以上用机体验，可获得OPPO时尚自拍杆1个，R7 Plus移动高配版（限前100名），R7
                Plus全网通高配版（限前100名），先到先得，奖品将于活动结束后15个工作日内发出。
            </p>
            <p class='subtitle'>
                *活动中如有任何问题请及时与客服联系，OPPO拥有法律允许范围内的最终解释权。
            </p>
        </div>
    </div>
</div>
<div class="unit" id="footer">
    <div class="wrapper block">
        <div class="left logo">
            <a href="http://www.oppo.com/cn/" target="_blank">
                <img src="/school/images/logo-2.png" />
            </a>
        </div>
        <div class="left copy">
            &copy; 2005 - 2015 广东欧珀电子工业有限公司 版权所有（粤ICP备 08130115 号）
        </div>
    </div>
</div>
<div class='mask hidden' id='mask'>
</div>
<div class='dialog hidden' id='orderDialog'>
    <div class="dialog-content">
        <div class="dialog-close">
            <a href="#">
                <img src="/2015/shuang12/images/dialog-close.png" />
            </a>
        </div>
        <div class="dialog-container">
            <div class="form">
                <p class='field'>
                    您预约的是
                    <span class='green'>
                    </span>
                </p>
                <p class='field'>
                    请填写您的手机号码，以便在开售当天第一时间通知您
                </p>
                <div class="field dialog-input">
                    <label>
                        请输入手机号码：
                    </label>
                    <input type="text" id="mobile" name="mobile" placeholder="请输入您的手机号" value=''
                    />
                    <label>
                        &nbsp;
                    </label>
                </div>
                <div class="field dialog-input dialog-input-item">
                    <label>
                        请输入验证码：
                    </label>
                    <input type="text" id="code" name="code" placeholder="请输入短信验证码" value=''
                    />
                    <a href="#" class='dialog-btn' id='getCode'>
                        获取验证码
                    </a>
                </div>
                <div class="field dialog-submit">
                    <a href="#" class='dialog-btn' id='orderSubmit'>
                        提 交
                    </a>
                </div>
                <div class="field dialog-error  error">
                    <span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='orderSuccess'>
    <div class="dialog-content">
        <div class="dialog-container">
            <div class="form">
                <p class='field'>
                    恭喜您预约成功！
                </p>
                <p class='field'>
                    获取一次抽奖机会，快去试试手气吧~
                </p>
                <p class='field'>
                    祝您好运！
                </p>
                <div class="field dialog-submit">
                    <a href="#" class='dialog-btn' id='btnGoLottery'>
                        立即抽奖
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='noDialog'>
    <div class="dialog-content">
        <div class="dialog-container">
            <div class="form">
                <p class='field'>
                    哎呀~手气差了一点！
                </p>
                <p class='field'>
                    希望您12月12日0点准时参加新机首销抢购
                </p>
                <p class='field'>
                    祝您届时手气棒棒哒！
                </p>
                <div class="field dialog-submit">
                    <a href="#" class='dialog-btn dialog-sure'>
                        确定
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='hasLotteryDialog'>
    <div class="dialog-content">
        <div class="dialog-container">
            <div class="form">
                <p class='field'>
                    抱歉！此号码已参与过抽奖
                </p>
                <div class="field dialog-submit">
                    <a href="#" class='dialog-btn dialog-sure'>
                        确定
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='toOrderDialog'>
    <div class="dialog-content">
        <div class="dialog-close">
            <a href="#">
                <img src="/2015/shuang12/images/dialog-close.png" />
            </a>
        </div>
        <div class="dialog-container">
            <div class="form">
                <div class='title'>
                    【请先预约再抽奖哦】
                </div>
                <p class='field'>
                    新品R7 Plus高配版和A53将于12月12日0点开售，快去预约吧！
                </p>
                <div class="field dialog-submit">
                    <a href="#" class='dialog-btn dialog-sure'>
                        确定
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='succDialog'>
    <div class='dialog-content'>
        <div class='dialog-container'>
            <p class='field'>
                提交成功！
            </p>
            <p class='field'>
                奖品将会在10个工作日内寄出，
            </p>
            <p class='field'>
                请耐心等待！！
            </p>
            <div class="field dialog-submit">
                <a href="#" class='dialog-btn dialog-sure'>
                    确定
                </a>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='notStartDialog'>
    <div class='dialog-container'>
        <div class='field text'>
            活动未开始
        </div>
        <div class='field'>
            <a class='dialog-btn dialog-sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='overDialog'>
    <div class='dialog-container'>
        <div class='field text'>
            活动已结束
        </div>
        <div class='field'>
            <a class='dialog-btn dialog-sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='msgDialog'>
    <div class='dialog-content'>
        <div class="dialog-close">
            <a href="#">
                <img src="/2015/shuang12/images/dialog-close.png" />
            </a>
        </div>
        <div class='dialog-container'>
            <p class='field' id='tip'>
            </p>
        </div>
    </div>
</div>
<div class='dialog hidden' id='addressForm'>
    <div class='dialog-content'>
        <div class="dialog-close">
            <a href="#">
                <img src="/2015/shuang12/images/dialog-close.png" />
            </a>
        </div>
        <div class='dialog-container'>
            <p class='field title align-center'>
                恭喜您获得
                <span class='green'>
                    自拍杆一个
                </span>
            </p>
            <p class='field align-center'>
                请填写收货信息
            </p>
            <div class="field dialog-input">
                <label>
                    收货人姓名：
                </label>
                <input type="text" name="name" class='name' placeholder="请输入收货人姓名" />
            </div>
            <div class="field dialog-input">
                <label>
                    收货人手机：
                </label>
                <input type="text" name="mobile" class='mobile' placeholder="请输入收货人手机号码"
                />
            </div>
            <div class="field dialog-input dialog-select pcrSelect" id='pcrSelect'>
                <label>
                    收货人地址：
                </label>
                <select class="pSelect" name="province_id">
                </select>
                <span>
                    省
                </span>
                <select class="cSelect" name="city_id">
                </select>
                <span>
                    市
                </span>
                <select class="rSelect" name="district_id">
                </select>
                <span>
                    区
                </span>
            </div>
            <div class="field dialog-input">
                <label>
                    详细地址：
                </label>
                <input type="text" name="address" class='address' placeholder="请输入您的详细收货地址"
                />
            </div>
            <p class='field align-center '>
                友情提示：为了您顺利收到奖品，请仔细核对您的信息。
            </p>
            <div class="field align-center dialog-submit">
                <a href="#" class='dialog-btn' id="submitAddressBtn">
                    提 交
                </a>
            </div>
            <div class='field align-center dialog-error error'>
            </div>
        </div>
    </div>
</div>
<div class='dialog hidden' id='winDialog'>
    <div class='dialog-content'>
        <div class="dialog-close">
            <a href="#">
                <img src="/2015/shuang12/images/dialog-close.png" />
            </a>
        </div>
        <div class='dialog-container'>
            <p class='field title align-center '>
                恭喜您秒杀成功
            </p>
            <p class='field align-center '>
                请填写收货信息
            </p>
            <div class="field dialog-input">
                <label>
                    收货人姓名：
                </label>
                <input type="text" name="name" class='name' placeholder="请输入收货人姓名" />
            </div>
            <div class="field dialog-input">
                <label>
                    收货人手机：
                </label>
                <input type="text" name="mobile" class='mobile' placeholder="请输入收货人手机号码"
                />
            </div>
            <div class="field dialog-input dialog-select pcrSelect" id='pcrSelect'>
                <label>
                    收货人地址：
                </label>
                <select class="pSelect" name="province_id">
                </select>
                <span>
                    省
                </span>
                <select class="cSelect" name="city_id">
                </select>
                <span>
                    市
                </span>
                <select class="rSelect" name="district_id">
                </select>
                <span>
                    区
                </span>
            </div>
            <div class="field dialog-input">
                <label>
                    详细地址：
                </label>
                <input type="text" name="address" class='address' placeholder="请输入您的详细收货地址"
                />
            </div>
            <p class='field align-center '>
                友情提示：为了您顺利收到奖品，请仔细核对您的信息。
            </p>
            <div class="field align-center  dialog-submit">
                <a href="#" class='dialog-btn submitBtn'>
                    提 交
                </a>
            </div>
            <div class='field align-center  dialog-error error errorTip'>
            </div>
        </div>
    </div>
</div>
<div class="dialog hidden" id="dialog-table">
    <div class="dialog-content">
        <div class="dialog-container">
            <div class="list">
                <div class="dialog-list-title">
                    <div class='title-top'>
                        赠送名单
                    </div>
                    <div class='title-list'>
                        <ul>
                            <li>
                                姓名
                            </li>
                            <li>
                                手机号码
                            </li>
                            <li>
                                赠送奖品
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dialog-list">
                    <div class="dialog-list-container">
                        <ul>
                        </ul>
                    </div>
                </div>
                <div class="dialog-back">
                    <a href="#">
                        <img src="/2015/r7plus/order/images/dialog-back.png" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='sidebar' id='sidebar'>
    <img src="/2015/shuang12/images/sidebar-2.png" usemap="#sidebarmap" />
</div>
<map id="sidebarmap" name="sidebarmap">
    <area shape="rect" coords="0,0,167,105" href="#r7plusgp" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'side1']);"
    />
    <area shape="rect" coords="0,120,167,175" href="#a53" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'side2']);"
    />
    <area shape="rect" coords="0,190,167,245" href="#unit-3" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'side3']);"
    />
    <area shape="rect" coords="0,255,167,310" href="#unit-4" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'side4']);"
    />
    <area shape="rect" coords="0,325,167,380" href="#rules" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'side5']);"
    />
    <area shape="rect" coords="0,395,167,450" href="#header" onclick="_optj.push(['_trackEvent', 'hd', 'img', 'shuang12', 'side6']);"
    />
</map>
<script type="text/javascript" src="http://shopfs.myoppo.com/hd/static/js/jquery-1.8.3.min.js?1409817228">
</script>
<script src="http://my.oppo.com/lib/oppo.login.min.js?v=2015813112014">
</script>
<script type="text/javascript" src="http://shopfs.myoppo.com/hd/static/js/region.min.js?1417419001">
</script>
<script type="text/javascript" src="http://shopfs.myoppo.com/hd/static/js/oppo.hd.min.js?1422525808">
</script>
<script type="text/javascript" src="/2015/shuang12/js/app.js">
</script>
</body>

</html>
