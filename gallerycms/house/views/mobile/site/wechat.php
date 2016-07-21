<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'dpl',
];
$this->params['jsFiles'] = [
    'jquery', 'rem50',
];
?>
<style type="text/css">
body{ max-width: 750px; } 
.return { position: absolute; left: 0.72rem; top: 50%; margin-top: -0.37rem; width: 0.41rem; height: 0.74rem; 
background: url(http://img.tugou.com/company/return.png) no-repeat; background-size: 100%; display: inline-block; } 
.top a .position { position: absolute; height: 2.05rem; right: 0.6rem; top: 0; font-size: 0.55rem; line-height: 2.05rem; color: #707070; padding-left: 0.83rem; 
background: url(http://pic.tugou.com/tgmobile/index/iconall.png) no-repeat -14.24rem -12.57rem; background-size: 14.89rem 14.43rem; } 
.toptitle { width: 100%; height:2.05rem; line-height: 1.76rem; border-bottom: 1px solid #e5e5e5; 
background: url(http://pic.tugou.com/tgmobile/index/new_logo.png) no-repeat center; background-size: 4.65rem 1.39rem; 
position: relative; background-color: #fff; } 
.weixin-img{ width: 15rem; } .weixin-img img{ width: 100%; display: block; }
</style>
<div class="top toptitle">
    <a href="" class="return"></a>
    <a href="<?= Url::to(['/site/select-city']); ?>">
	    <div class="position"><?= Yii::$app->params['currentCompany']['name']; ?></div>
    </a>
</div>
<div class="weixin-img">
    <img src="http://img.tugou.com/app/weixin/qd_s1.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s2.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s3.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s4.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s5.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s6.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s7.png" alt="关注兔狗微信">
    <img src="http://img.tugou.com/app/weixin/qd_s8.png" alt="关注兔狗微信">
	<img src="http://img.tugou.com/app/weixin/qd_s9.png" alt="关注兔狗微信">
</div>
