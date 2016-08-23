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
            <li v-for="(i, item) in items">
                <div class="comment-user">
                    <img class="avatar" v-bind:src="item.avatar">
                    <h1 class="nickname" v-text="item.nickname[0]+'****'"></h1>
                </div>
                <div class="comment-content">
                    <!-- <h3 class="score">评分:&nbsp;&nbsp;&nbsp;<span class="stg" v-text="parseFloat(item.score).toFixed(1)"></span></h3> -->
                    <img class="star" v-bind:src="calStarState(item.star, 1)" />
                    <img class="star" v-bind:src="calStarState(item.star, 2)" />
                    <img class="star" v-bind:src="calStarState(item.star, 3)" />
                    <img class="star" v-bind:src="calStarState(item.star, 4)" />
                    <img class="star" v-bind:src="calStarState(item.star, 5)" />
                    <p readonly="readonly" class="content" v-text="item.content"></p>
                    <p class="detail" v-html="item.community+'-'+item.area+'m<sup>2</sup>-'+item.housestyle"></p>
                </div>
            </li>
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
<script type="text/javascript">var backEndItems = [{
        "nickname": "\u5efa\u5cf0",
        "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "comment_id": "156",
        "comment_status": "10",
        "provider_id": "195",
        "city_id": "3",
        "content": "\u5148\u770b\u7684\u4e3b\u6750\u633a\u6ee1\u610f\u7684\uff0c\u5c31\u7528\u4e86\u4ed6\u5bb6\u3002\u5de5\u4f5c\u5fd9\u65f6\u95f4\u4e0d\u662f\u5f88\u591a\uff0c\u5e73\u65f6\u4e5f\u633a\u5c11\u53bb\u5de5\u5730\u7684\uff0c\u90fd\u662f\u5de5\u957f\u5e2e\u6211\u770b\u7740\u7684\uff0c\u5f88\u6ee1\u610f\u3002",
        "order_id": "0",
        "user_id": "0",
        "username": "\u5efa\u5cf0",
        "community": "\u534e\u8fdc\u94ed\u60a6",
        "area": "76",
        "housestyle": "\u7b80\u7ea6",
        "amount": "0",
        "rank_design": "5",
        "rank_cons": "5",
        "rank_service": "5",
        "add_time": "1469521611",
        "comment_time": "1469521560",
        "sign_complete_time": "0",
        "complete_time": "0",
        "is_virtual": "1",
        "praise": "6.00",
        "score": "4.80",
        "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "star": 4.5
    },
    {
        "nickname": "\u742a\u742a",
        "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "comment_id": "198",
        "comment_status": "10",
        "provider_id": "195",
        "city_id": "3",
        "content": "\u597d\u8bc4\uff01\u5b89\u6392\u7684\u51e0\u5bb6\u516c\u53f8\u4e2d\u8f7b\u821f\u5e78\u798f\u4ebf\u5bb6\u7684\u8bbe\u8ba1\u5e08\u7ed9\u4eba\u611f\u89c9\u6700\u9760\u8c31\uff0c\u6574\u4e2a\u88c5\u4fee\u8fc7\u7a0b\u4e0b\u6765\u5f88\u7701\u5fc3\uff01",
        "order_id": "0",
        "user_id": "0",
        "username": "\u742a\u742a",
        "community": "\u4e0a\u7b51\u5bb6\u56ed",
        "area": "63",
        "housestyle": "\u7530\u56ed",
        "amount": "0",
        "rank_design": "5",
        "rank_cons": "5",
        "rank_service": "5",
        "add_time": "1469523633",
        "comment_time": "1469523600",
        "sign_complete_time": "0",
        "complete_time": "0",
        "is_virtual": "1",
        "praise": "6.00",
        "score": "4.80",
        "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "star": 4.5
    },
    {
        "nickname": "\u968f\u7f18",
        "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "comment_id": "246",
        "comment_status": "10",
        "provider_id": "195",
        "city_id": "3",
        "content": "\u6574\u4e2a\u88c5\u4fee\u8fc7\u7a0b\u975e\u5e38\u6ee1\u610f\uff0c\u771f\u7684\u662f\u78b0\u5230\u4e86\u4e00\u4e2a\u597d\u7684\u516c\u53f8\u3002\u8bbe\u8ba1\u5e08\u5f88\u4e13\u4e1a\uff0c\u4e4b\u524d\u4e5f\u6709\u8fc7\u6211\u4eec\u5bb6\u8fd9\u79cd\u6237\u578b\u7684\u7ecf\u9a8c\uff0c\u6240\u4ee5\u65b9\u6848\u8c08\u5f97\u4e5f\u6bd4\u8f83\u987a\u5229\u3002\u5f88\u591a\u4eba\u90fd\u8bf4\u7b7e\u7ea6\u4e4b\u540e\u8bbe\u8ba1\u5e08\u90fd\u4e0d\u7ba1\u4e86\uff0c\u4f46\u662f\u6211\u4eec\u611f\u89c9\u6211\u4eec\u5bb6\u8fd9\u4e2a\u8bbe\u8ba1\u5e08\u8fd8\u662f\u5f88\u597d\u7684\uff0c\u540e\u9762\u4e00\u76f4\u4e5f\u5173\u5fc3\u6211\u4eec\u5bb6\u7684\u65bd\u5de5\u8fdb\u5ea6\uff0c\u5de5\u957f\u4e5f\u5f88\u8d1f\u8d23\u4efb\u3002\u88c5\u4fee\u7684\u8fc7\u7a0b\u4e2d\uff0c\u5154\u72d7\u7684\u76d1\u7406\u4e5f\u5728\u5168\u7a0b\u9a8c\u6536\uff0c\u5982\u679c\u6709\u4ec0\u4e48\u65bd\u5de5\u8d28\u91cf\u7684\u95ee\u9898\u53cd\u9988\u7ed9\u5de5\u957f\uff0c\u5de5\u957f\u4e5f\u5f88\u914d\u5408\u6574\u6539\u3002\u6211\u4eec\u5bb6\u4e5f\u5728\u5de5\u671f\u5185\u5b8c\u5de5\u4e86\uff0c\u867d\u7136\u82b1\u4e8610\u51e0\u4e07\uff0c\u4f46\u662f\u611f\u89c9\u8fd8\u662f\u5f88\u7701\u5fc3\uff0c\u5f88\u653e\u5fc3\uff0c\u503c\u5f97\u63a8\u8350\u3002",
        "order_id": "0",
        "user_id": "0",
        "username": "\u968f\u7f18",
        "community": "\u4eac\u8fbe\u56fd\u9645\u516c\u5bd3",
        "area": "140",
        "housestyle": "\u7530\u56ed",
        "amount": "0",
        "rank_design": "5",
        "rank_cons": "5",
        "rank_service": "5",
        "add_time": "1470373657",
        "comment_time": "1470373620",
        "sign_complete_time": "0",
        "complete_time": "0",
        "is_virtual": "1",
        "praise": "6.00",
        "score": "4.83",
        "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "star": 4.5
    }];</script>
<script type="text/javascript" src="//cdn.bootcss.com/vue/1.0.24/vue.min.js "></script>
<script type="text/javascript" src="http://static.tugou.com/js/provider/pd-comment.js"></script>
