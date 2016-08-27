<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'components/arrow', 'provider/pd-nav', 'provider/pd-common', 'provider/pd-index',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/jquery.validate', 'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'provider/pd-common', 'provider/pd-index',
];
$this->params['currentNav'] = 'company';
$this->params['friendLink'] = true;

$this->params['showPage'] = true;
?>
<link rel="stylesheet" type="text/css" href="http://static.tugou.com/css/provider/pd-comment.css">
<?php echo $this->render('_intro', ['info' => $info]); ?>
<section class="pd-main">
    <div class="pd-main-body">
        <?php echo $this->render('_nav', ['info' => $info, 'currentNav' => $action]); ?>
        <ul id="comment-list">
            <!--<li>
                <div class="comment-user">
                    <img class="avatar" src="http://pic.tugou.com/app/headicon.png">
                    <h1 class="nickname">老****</h1>
                </div>
                <div class="comment-content">
                    <h3 class="score">评分:&nbsp;&nbsp;&nbsp;<span class="stg" v-text="parseFloat(item.score).toFixed(1)"></span></h3>
                    <img class="star" src="http://static.tugou.com/home/provider/img/star-picked.png">
                    <img class="star" src="http://static.tugou.com/home/provider/img/star-picked.png">
                    <img class="star" src="http://static.tugou.com/home/provider/img/star-picked.png">
                    <img class="star" src="http://static.tugou.com/home/provider/img/star-picked.png">
                    <img class="star" src="http://static.tugou.com/home/provider/img/star-half.png">
                    <p class="content" readonly="readonly">就是简单装修一下，所以找了一个小公司，整个装修过程还是很满意的。这个设计师虽然很年轻，但是她的设计想法我还是很喜欢的，后来又带着我去跑建材城看主材，给了很多意见，真的蛮辛苦的一个小姑娘。后来家里施工也放心的，设计师经常跟我说家里的一些施工进度，兔狗这边监理验收的时候也总是跟我约时间一起过去，看看施工的情况，整个过程还挺好的，后来反正也是在工期内完工的。</p>
                    <p class="detail">回龙观-64m<sup>2</sup>-简约</p>
                </div>
            </li>-->
        </ul>
    </div>
    <div id="pd-fault-footer"></div>
</section>
<div class="pop_mask hide">
    <div class="pop_box">
        <a class="pop_close">&times</a>
        <div class="title_box">
            <p class="title">免费为我做设计</p>
            <p class="subtitle">免费获取3份设计选取满意设计稿</p></div>
        <div class="apply_form">
            <input name="apply_type" type="hidden" value="14">
            <input name="apply_provider" type="hidden" value="81">
            <input name="name" type="text" placeholder="您的姓名">
            <input name="phone" type="text" placeholder="手机号码">
            <div class="select-group clearfix js-region-select-group">
                <select class="js-province" name="province" id="province">
                    <option value="">省/市</option></select>
                <select class="js-city" name="city" id="city">
                    <option value="">市/地区</option></select>
            </div>
            <input name="apply" type="button" value="立即预约">
            <p class="sm">全国服务热线<?= Yii::$app->params['siteHotline']; ?>
                <br>为了方便我们联系，请留下您的联系方式，我们将严格保密</p></div>
    </div>
</div>
