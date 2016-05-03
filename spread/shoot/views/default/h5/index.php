<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php //echo $this->render('_header', ['info' => $info]); ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="content-language" content="zh-CN" />
<title><?= $info['name']; ?></title>
<meta name="description" content="<?= $info['name']; ?>" >
<meta name="keywords" content="<?= $info['description']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/css/styles_hd_h5.css?v=20151211213454">
<script type="text/javascript">
window.BASE_URL = "<?= Yii::getAlias('@shooturl'); ?>";
window.ASSET_URL = '<?= Yii::getAlias('@asseturl'); ?>';
window.PASSPORT_URL = '<?= Yii::getAlias('@passporturl'); ?>';
</script>
</head>

<body>
<div class='unit unit-1' id='unit-1'>
    <div class='relative'>
        <!-- <a href="http://www.oppo.com" id='logo'><img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/logo.png?1449473250" /></a> -->
        <div class='unit-1-bg'>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-1_01.jpg?1449834213"
            />
        </div>
    </div>
</div>
<div class='unit unit-2'>
    <p id="category0">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-2.jpg?1449473250"
        />
    </p>
    <a id="list-0" class="list-btn" data-index="0">
        查看赠送名单&gt;&gt;
    </a>
    <a id="list-10" class="list-btn" data-index="10">
        查看赠送名单&gt;&gt;
    </a>
    <a id="list-21" class="list-btn" data-index="21">
        查看赠送名单&gt;&gt;
    </a>
</div>
<div class='unit unit-3 relative'>
    <p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-3-bg_03.jpg?1449834213"
        />
    </p>
    <!-- 两种状态 -->
    <!-- <div class="sec-btn"><span>立即开抢</span><img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/icon-unac.png?1449473250"></div> -->
    <!-- <div class="sec-btn"><span style="line-height:2;">秒杀已结束</span></div> -->
    <!-- <div class="sec-btn"><span>距离开抢还有<br/><strong class="h">00</strong>:<strong class="m">00</strong>:<strong class="s">00</strong></span><img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/icon-unac.png?1449473250"></div> -->
    <!-- <a id="today-btn">查看名单&gt;&gt;</a>
    <p class="comments">*请提前登录官网账号做好开抢准备</p> -->
</div>
<div class='unit unit-4' id="unit-4">
    <p id="category1">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-4-title.jpg?1449473250"
        />
    </p>
    <div class="wrapper clearfix">
        <p>
            <a href="http://store.oppo.com/products/342.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-4-w1.jpg?1449481926"
                />
            </a>
        </p>
        <p>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-4-w2.jpg?1449473250"
            />
        </p>
        <div class="btn clearfix">
            <a href="http://store.oppo.com/products/342.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                alt="" class="left-btn" data-index="r7plusmh">
            </a>
            <a href="http://store.oppo.com/products/343.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                alt="" class="right-btn" data-index="r7plusth">
            </a>
        </div>
        <p style="margin-bottom: 20px;">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-5_14.jpg?1449834213"
            />
        </p>
        <!-- <div class='unit-3-1'>
        <div class='unit-3-1-table' id='lottery'>
        <table>
        <tr>
        <td>
        <div class='td lottery-unit lottery-unit-0'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-1.png?1449473250" />			
        </div>
        </td>
        <td>
        <div class='td lottery-unit lottery-unit-1'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-2.png?1449473250" />			
        </div>
        </td>
        <td>
        <div class='td lottery-unit lottery-unit-2'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-3.png?1449473250" />			
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class='td lottery-unit lottery-unit-7'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-4.png?1449473250" />			
        </div>
        </td>
        <td>
        <div class='td'>
        <a href="#" id='btn-lottery' onclick="_optj.push(['_trackEvent', 'hd', 'btn', 'shuang_12', 'lottery']);">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-5.png?1449473250" />			
        </a>
        </div>
        </td>
        <td>
        <div class='td lottery-unit lottery-unit-3'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-4.png?1449473250" />			
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class='td lottery-unit lottery-unit-6'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-1.png?1449473250" />			
        </div>
        </td>
        <td>
        <div class='td lottery-unit lottery-unit-5'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-4.png?1449473250" />			
        </div>
        </td>
        <td>
        <div class='td lottery-unit lottery-unit-4'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/td-3.png?1449473250" />			
        </div>
        </td>
        </tr>
        </table>
        </div>
        <div class='unit-3-btns'>
        <a href="#" id='winnersBtn'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-3-btn1.png?1449630812" />			
        </a>
        <a href="#" id='rulesBtn'>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-3-btn2.png?1449473250" />			
        </a>
        </div>
        </div>
        <p style="margin-bottom: 20px;"><img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-6.jpg?1449481926" /></p> -->
        <p id="category2">
            <a href="http://store.oppo.com/products/341.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-7-w1.jpg?1449481926"
                />
            </a>
        </p>
        <p>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-7-w2.jpg?1449481926"
            />
        </p>
        <div class="btn">
            <a href="http://store.oppo.com/products/341.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                alt="" class="center-btn" data-index="a53reserve">
            </a>
        </div>
        <p>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-7-w3.jpg?1449539350"
            />
        </p>
    </div>
</div>
<div class='unit unit-9' id="unit-9">
    <p id="category3">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-9-title.jpg?1449473250"
        />
    </p>
    <div class="wrapper clearfix">
        <div>
            <a href="http://store.oppo.com/products/338.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-10-w1_20.jpg?1449834213"
                />
            </a>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-10-w2_23.jpg?1449834213"
            />
            <div class="btn clearfix">
                <a href="http://store.oppo.com/products/338.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="left-btn">
                </a>
                <a href="http://store.oppo.com/products/330.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="right-btn">
                </a>
            </div>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-10-w3.jpg?1449540928"
            />
        </div>
        <div style="margin-top: 20px;">
            <a href="http://store.oppo.com/products/288.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-11-w1.jpg?1449481926"
                />
            </a>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-11-w2.jpg?1449481926"
            />
            <div class="btn clearfix">
                <a href="http://store.oppo.com/products/288.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="left-btn">
                </a>
                <a href="http://store.oppo.com/products/304.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="right-btn">
                </a>
            </div>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-11-w3.jpg?1449539350"
            />
        </div>
        <div style="margin-top: 20px;">
            <a href="http://store.oppo.com/products/314.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-12-w1.jpg?1449481926"
                />
            </a>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-12-w2.jpg?1449481926"
            />
            <div class="btn clearfix">
                <a href="http://store.oppo.com/products/314.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="left-btn">
                </a>
                <a href="http://store.oppo.com/products/319.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="right-btn">
                </a>
            </div>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-12-w3.jpg?1449539350"
            />
        </div>
    </div>
</div>
<div class='unit unit-13' id="unit-13" style="padding-top: 20px;background-color: #7d0132;">
    <p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-13-title.jpg?1449473250"
        />
    </p>
    <div class="wrapper">
        <p>
            <a href="http://store.oppo.com/products/118.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-14-w1.jpg?1449481926"
                />
            </a>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-14-w2.jpg?1449481926"
            />
            <div class="btn">
                <a href="http://store.oppo.com/products/118.html">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/buy-btn.png?1449473250"
                    alt="" class="center-btn">
                </a>
            </div>
            <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-14-w3.jpg?1449482869"
            />
        </p>
        <p style="margin-bottom: 30px;margin-top:20px;">
            <a href="http://store.oppo.com/products/328.html">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-15.jpg?1449481926"
                />
            </a>
        </p>
    </div>
    <p>
        <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images-tg/screen-16.jpg?1449630812"
        />
    </p>
</div>
<div class='mask hidden'>
</div>
<div class='dialog hidden' id='orderForm'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field title'>
            欢迎您预约
            <span class="mobile_type">
            </span>
        </div>
        <div class='field text'>
            预约成功即可获得一次抽奖机会！
        </div>
        <div class='field input-item'>
            <input type='text' name='mobile' id='mobile' placeholder='请输入手机号码' />
            <a href='#' class='button' id='getCode'>
                获取验证码
            </a>
        </div>
        <div class='field'>
            <input type='text' name='code' id='code' placeholder='请输入验证码' />
        </div>
        <div class='field error'>
        </div>
        <div class='field'>
            <a href="#" class='button' id='orderSubmit'>
                提 交
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='orderSuccess'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            恭喜您预约成功，新品将于12月12日00:00开售！
            <br>
            您可获得一次抽奖机会，快去试试手机吧~
        </div>
        <div class='field'>
            <a href="#" class='button' id='goLottery'>
                立即抽奖
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='addressForm'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field title red'>
            恭喜您获得
            <span>
                OPPO时尚自拍杆
            </span>
        </div>
        <div class='field text grey'>
            <label>
                请填写收货信息
            </label>
        </div>
        <div class='field'>
            <input type='text' class='name' name='name' placeholder='收货人姓名' />
        </div>
        <div class='field'>
            <input type='text' class='mobile' name='mobile' placeholder='手机号码' />
        </div>
        <div class=' pcrSelect'>
            <div class='field'>
                <select class="pSelect" name="province_id">
                    <option value=''>
                        选择省
                    </option>
                </select>
            </div>
            <div class='field'>
                <select class="cSelect" name="city_id">
                    <option value=''>
                        选择市
                    </option>
                </select>
            </div>
            <div class='field'>
                <select class="rSelect" name="district_id">
                    <option value=''>
                        选择区
                    </option>
                </select>
            </div>
        </div>
        <div class='field'>
            <textarea placeholder='填写详细收货地址' class='address' name='address'>
            </textarea>
        </div>
        <div class='field error'>
        </div>
        <div class='field'>
            <a href="#" class='button' id='submitAddressBtn'>
                提交
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='winDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field title red'>
            恭喜您秒杀成功
        </div>
        <div class='field text grey'>
            <label>
                请填写收货信息
            </label>
        </div>
        <div class='field'>
            <input type='text' class='name' name='name' placeholder='收货人姓名' />
        </div>
        <div class='field'>
            <input type='text' class='mobile' name='mobile' placeholder='手机号码' />
        </div>
        <div class=' pcrSelect'>
            <div class='field'>
                <select class="pSelect" name="province_id">
                    <option value=''>
                        选择省
                    </option>
                </select>
            </div>
            <div class='field'>
                <select class="cSelect" name="city_id">
                    <option value=''>
                        选择市
                    </option>
                </select>
            </div>
            <div class='field'>
                <select class="rSelect" name="district_id">
                    <option value=''>
                        选择区
                    </option>
                </select>
            </div>
        </div>
        <div class='field'>
            <textarea placeholder='填写详细收货地址' class='address' name='address'>
            </textarea>
        </div>
        <div class='field error'>
        </div>
        <div class='field'>
            <a href="#" class='button' id='submitBtn'>
                提交
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='hasOrderDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            此号码已经成功预约过了！
            <br>
            <span class="mobile_type">
            </span>
            将于12月12日00:00开售，
            <br>
            敬请期待！
        </div>
        <div class='field'>
            <a href="" class='button' id="m_link">
                了解
                <span class="mobile_type">
                </span>
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='hasLotteryDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            请先预约再抽奖哦
            <br>
            新品R7 Plus高配版和A53将于12月12日0日开售，快去预约吧！
        </div>
        <div class='field'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='notStartDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            活动尚未开始
            <br>
            <br>
        </div>
        <div class='field'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='msgDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text' id="tip">
            <br>
            <br>
        </div>
    </div>
</div>
<div class='dialog hidden' id='overDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            活动已结束
            <br>
            <br>
        </div>
        <div class='field'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='noDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            哎呀~手气差了一点！
            <br>
            希望您12月12日0点准时参加新品抢购
            <br>
            祝您届时手气棒棒哒！
        </div>
        <div class='field'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='succDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            提交成功！
            <br>
            奖品将会在10个工作日内寄出，
            <br>
            请耐心等待！！
        </div>
        <div class='field'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog hidden' id='tipDialog'>
    <div class='dialog-container'>
        <div class='dialog-close'>
            <a href="#">
                X
            </a>
        </div>
        <div class='field text'>
            请先预约再抽奖哦
            <br>
            新品R7 Plus高配版和A53将于12月12日0点开售，快去预约吧！
        </div>
        <div class='field'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog dialog-rules hidden' id='rulesDialog'>
    <div class='dialog-container'>
        <p class='title' style="text-align:left;">
            奖品设置
        </p>
        <div class='overflow'>
            <p>
                一等奖：R7 Plus移动高配版手机
            </p>
            <p>
                二等奖：O-lens镜头式相机
            </p>
            <p>
                三等奖：OPPO时尚自拍杆（颜色随机发送）
            </p>
        </div>
        <p class='title' style="text-align:left;">
            预约抽奖规则
        </p>
        <div class='overflow'>
            <p>
                1）填写有效手机号码预约R7 Plus高配版或A53；
            </p>
            <p>
                2）预约成功后即可获得一次抽奖机会；
            </p>
            <p>
                3）每个成功预约的手机号码仅限抽奖一次；
            </p>
            <p>
                4）抽奖获取的实物奖品，将在10个工作日内寄出；
            </p>
            <p>
                5）此活动仅限普通用户参与，如果发现作弊行为恶意获取奖品，有权取消获奖资格。
            </p>
        </div>
        <div class='field align-center'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog dialog-list hidden' id='winnerDialog'>
    <div class='dialog-container'>
        <p class='title'>
            中奖名单
        </p>
        <div class='overflow'>
            <table class='winnerlist' id='winner-list'>
                <tr>
                    <td class="none">
                        暂时还没人中奖噢！
                    </td>
                </tr>
            </table>
        </div>
        <div class='field align-center'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog dialog-list hidden' id='todayDialog'>
    <div class='dialog-container'>
        <p class='title'>
            中奖名单
        </p>
        <div class='overflow'>
            <table class='winnerlist' id='today-list'>
                <!-- <tr><td class="none">暂时还没人中奖噢！</td></tr> -->
                <tr>
                    <td>
                        王*雪
                    </td>
                    <td>
                        152****0611
                    </td>
                    <td>
                        N1mini移动版手机
                    </td>
                </tr>
                <tr>
                    <td>
                        朱*玉
                    </td>
                    <td>
                        139****9204
                    </td>
                    <td>
                        N1mini移动版手机
                    </td>
                </tr>
                <tr>
                    <td>
                        邢*
                    </td>
                    <td>
                        186****1181
                    </td>
                    <td>
                        N1mini移动版手机
                    </td>
                </tr>
                <tr>
                    <td>
                        杨*龙
                    </td>
                    <td>
                        152****5333
                    </td>
                    <td>
                        N1mini移动版手机
                    </td>
                </tr>
            </table>
        </div>
        <div class='field align-center'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class='dialog dialog-list hidden' id='giftDialog'>
    <div class='dialog-container'>
        <p class='title'>
            赠送名单
        </p>
        <div class='overflow'>
            <table class='winnerlist' id='give-list'>
            </table>
        </div>
        <div class='field align-center'>
            <a href="#" class='button sure'>
                确定
            </a>
        </div>
    </div>
</div>
<div class="blank">
</div>
<ul class="tabs clearfix">
    <li class="tab" id="tab1">
        R7 Plus高配版开售
    </li>
    <li class="tab" id="tab2">
        A53新品开售
    </li>
    <li class="tab" id="tab3">
        R7s直降200
    </li>
</ul>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/jquery-1.8.3.min.js?1409817228"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/my/login.js?v=2015813112014"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/region.min.js?1417419001"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/hd.js?1422525808"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/app.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/js/hd/wxapp.js"></script>
<script type="text/javascript">
    $(function() {
        var _width = $("body").width();
        $(".tabs").width(_width);
        $(".tabs li").width(_width / 3);
        $(".blank").height(50);
        $(".tabs li").on('click',
        function(event) {
            event.preventDefault();
            if ($(this).hasClass("active")) {
                return;
            }
            $('.tabs li').removeClass("active");
            $(this).addClass("active");
            var i = $(this).index() + 1;
            $('body,html').animate({
                scrollTop: $("#category" + i).offset().top
            },
            200);
        });
        $(window).scroll(function() {
            var t = $(window).scrollTop();
            var f = $("#category0").offset().top;
            var a = $("#category1").offset().top;
            var b = $("#category2").offset().top;
            var c = $("#category3").offset().top;
            if (t < f) {
                $(".tabs").fadeOut(200);
            } else {
                $(".tabs").show();
            }
            if (t < a) {
                $('.tabs li').removeClass("active");
            } else if (t >= a && t < b) {
                $('.tabs li').removeClass("active");
                $('#tab1').addClass("active");
            } else if (t >= b && t < c) {
                $('.tabs li').removeClass("active");
                $('#tab2').addClass("active");
            } else if (t >= c) {
                $('.tabs li').removeClass("active");
                $('#tab3').addClass("active");
            }
        });
    });
</script>
<script type="text/javascript">
    function wxSuccessCallback() {
        //朋友圈分享
        $.wxapp.timelineShare({
            title: '【12.12】新品上市！爆款钜惠！机不可失！',
            // 分享标题
            link: window.location.href,
            // 分享链接
            imgUrl: 'http://hd.oppo.com/m/2015/shuang12/images/share.jpg',
            // 分享图标，绝对路径
            success: function() {
                // 用户确认分享后执行的回调函数
            },
            cancel: function() {
                // 用户取消分享后执行的回调函数
            }
        });

        //发送给好友
        $.wxapp.appMessageShare({
            title: '【12.12】新品上市！爆款钜惠！机不可失！',
            // 分享标题
            desc: '',
            // 分享描述
            link: window.location.href,
            // 分享链接
            imgUrl: 'http://hd.oppo.com/m/2015/shuang12/images/share.jpg',
            // 分享图标，绝对路径
            type: '',
            // 分享类型,music、video或link，不填默认为link
            dataUrl: '',
            // 如果type是music或video，则要提供数据链接，默认为空
            success: function() {
                // 用户确认分享后执行的回调函数
            },
            cancel: function() {
                // 用户取消分享后执行的回调函数
            }
        });
    };
</script>
<!-- 百度统计代码 -->
<script>
    var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?9cb8846b548404438c81aaa02eda4f0f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!-- 谷歌统计代码 -->
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] ||
        function() { (i[r].q = i[r].q || []).push(arguments)
        },
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-66238290-1', 'auto');
    ga('send', 'pageview');
</script>
<!--oppo统计-->
<script>
    var _optj = _optj || [];

    (function() {
        var op = document.createElement("script");
        op.src = "http://static.oppo.com/tj/optj-1.0.4.min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(op, s);
    })();
</script>
<!--华扬统计-->
<script type="text/javascript">
    var _utaq = _utaq || [];
    _utaq.push(["trackPageView"]);
    _utaq.push(["enableLinkTracking"]); (function() {
        var utu = (("https:" == document.location.protocol) ? "https": "http") + "://sit.gentags.net/";
        _utaq.push(["setTrackerUrl", utu + "site/unids.gif"]);
        _utaq.push(["setSiteId", "941"]);
        var utd = document,
        ut = utd.createElement("script"),
        s = utd.getElementsByTagName("script")[0];
        ut.type = "text/javascript";
        ut.defer = true;
        ut.async = true;
        ut.src = utu + "adagent/js/uta.js";
        s.parentNode.insertBefore(ut, s);
    })();
</script>
</body>

</html>
