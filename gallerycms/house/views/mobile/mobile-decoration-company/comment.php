<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'dpl', 'company/company', 'mobile/slick', 't-footer', 'apply750',
	'lib/total750_v2',
];
$this->params['jsFiles'] = [
	'jquery-1.11.3.min', 'common', 'slideApply', 'lib/total',
	'rem50',
];
?>
<?php echo $this->render('../common/_nav', []); ?>
<div class="toptitle total-top">
	<a href="<?= Url::to(['/house/mobile-decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="return"></a><?= $info['name']; ?>
</div>
<?php echo $this->render('_base', ['info' => $info, 'action' => $action]); ?>
<ul id='comment-list' v-if='items.length'>
    <li v-for="(i, item) in items">
        <div class="comment-user">
            <img class="avator" alt='头像' v-bind:src="item.avatar">
            <span class="nickname" v-text="item.nickname[0]+'****'"></span>
            <!-- <span class="score">评分:&nbsp;&nbsp;&nbsp;<span class="stg" v-text="parseFloat(item.score).toFixed(1)"></span></span> -->
            <div class="star-line">
                <img class="star" v-bind:src="calStarState(item.star, 1)" />
                <img class="star" v-bind:src="calStarState(item.star, 2)" />
                <img class="star" v-bind:src="calStarState(item.star, 3)" />
                <img class="star" v-bind:src="calStarState(item.star, 4)" />
                <img class="star" v-bind:src="calStarState(item.star, 5)" /></div>
        </div>
        <p readonly="readonly" class="comment-content" v-text="item.content"></p>
        <p class="comment-detail" v-html="item.community+'&nbsp;&nbsp;&nbsp;'+item.area+'m<sup>2</sup>&nbsp;&nbsp;&nbsp;'+item.housestyle"></p>
    </li>
</ul>
<div class="placeholder-footer app-hide"></div>
<footer class="bottomFixedArea app-hide">
    <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
        <img class="consult" src="http://static.tugou.com/m/img/provider/consult.png" />
        <span class="content">在线咨询</span></div>
    <div class="apply-btn">免费申请设计报价</div></footer>
<!--免费为我做设计-->
<div class="apply-container">
    <form class="pop-apply-form">
        <div class="form-title">申请免费设计</div>
        <p class="form-subtitle">免费获取3份设计&nbsp;选取满意设计稿</p>
        <div class="form-body">
            <input type="hidden" name="apply_type" value="53">
            <input type="hidden" id="remark" value="移动美图列表">
            <div class="form-line input-box first">
                <input type="text" id="name" placeholder="您的姓名" /></div>
            <div class="form-line input-box">
                <input type="tel" id="phone" placeholder="手机号码" /></div>
            <div class="form-line form-line-pure">
                <ul class="city-select-list js-region-select-group">
                    <li class="form-inline">
                        <select class="select-province js-province" name="province" id="province">
                            <option value="0" selected="selected">省/市</option></select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                    <li class="form-inline">
                        <select class="select-city js-city" name="city" id="city">
                            <option value="0" selected="selected">市/地区</option></select>
                        <span class="icon partial-sprite sprite-icon-menudown"></span>
                    </li>
                </ul>
            </div>
            <div class="form-btn-group">
                <input type="button" value="免费申请" class="submit-btn win_sub" id="apply_button" /></div>
            <div class="form-notice">
                <span class="font-mark">注：</span>同一小区同批验房达到5户，可安排免费上门验房服务</div></div>
        <span class="form-close"></span>
    </form>
</div>
<div class="alert" style="display: none;">请输入姓名</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/slick.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/company/company-m.js"></script>
<script type="text/javascript">var backEndItems = [{
        "nickname": "\u5239\u90a3\u82b3\u534e",
        "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "comment_id": "17",
        "comment_status": "10",
        "provider_id": "92",
        "city_id": "1",
        "content": "\u6211\u4e4b\u524d\u88c5\u4fee\u8fc72\u5957\u623f\u5b50\uff0c\u6240\u4ee5\u5bf9\u5176\u4e2d\u7684\u95e8\u9053\u8fd8\u7b97\u61c2\u4e00\u4e9b\uff0c\u62a5\u4ef7\u7684\u65f6\u5019\u8bbe\u8ba1\u5e08\u5f88\u5b9e\u5728\uff0c\u6211\u5c31\u51b2\u8fd9\u4e00\u70b9\u7b7e\u4e86\u4ed6\u4eec\u3002\u6700\u540e\u4e5f\u679c\u7136\u6ca1\u8ba9\u6211\u5931\u671b\uff0c\u9879\u76ee\u7ecf\u7406\u5f88\u7ec6\u5fc3\u8d1f\u8d23\uff0c\u6bcf\u5468\u90fd\u4f1a\u8ddf\u6211\u6c47\u62a5\u65bd\u5de5\u8fdb\u5ea6\uff0c\u5f88\u611f\u8c22\u5154\u72d7\u5bb6\u88c5\u3002",
        "order_id": "0",
        "user_id": "0",
        "username": "\u5239\u90a3\u82b3\u534e",
        "community": "\u6668\u5149\u56fd\u9645",
        "area": "136",
        "housestyle": "\u73b0\u4ee3",
        "amount": "0",
        "rank_design": "5",
        "rank_cons": "5",
        "rank_service": "5",
        "add_time": "1469505153",
        "comment_time": "1469505120",
        "sign_complete_time": "0",
        "complete_time": "0",
        "is_virtual": "1",
        "praise": "6.00",
        "score": "4.87",
        "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "star": 5
    },
    {
        "nickname": "\u660e",
        "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "comment_id": "78",
        "comment_status": "10",
        "provider_id": "92",
        "city_id": "1",
        "content": "\u539f\u672c\u534a\u5305\u53ea\u6253\u7b97\u82b15-6\u4e07\u7684\uff0c\u7ed3\u679c\u770b\u4e86\u8bbe\u8ba1\u5e08\u51fa\u5f97\u6548\u679c\u56fe\u5b9e\u5728\u592a\u559c\u6b22\uff0c\u5c31\u72e0\u5fc3\u591a\u82b1\u4e86\u4e00\u4e9b\uff0c\u540e\u671f\u8f6f\u88c5\u642d\u914d\u4e0a\u8bbe\u8ba1\u5e08\u4e5f\u7ed9\u4e86\u6211\u5f88\u591a\u610f\u89c1\uff0c\u4e0d\u9519\u54df\uff01",
        "order_id": "0",
        "user_id": "0",
        "username": "\u660e",
        "community": "\u7af9\u6d77\u6c34\u97f5",
        "area": "88",
        "housestyle": "\u7f8e\u5f0f",
        "amount": "0",
        "rank_design": "5",
        "rank_cons": "5",
        "rank_service": "5",
        "add_time": "1469512498",
        "comment_time": "1469512440",
        "sign_complete_time": "0",
        "complete_time": "0",
        "is_virtual": "1",
        "praise": "6.00",
        "score": "4.88",
        "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "star": 5
    },
    {
        "nickname": "Vanilla",
        "avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "comment_id": "83",
        "comment_status": "10",
        "provider_id": "92",
        "city_id": "1",
        "content": "\u4e2d\u535a\u662f\u5927\u54c1\u724c\u4e86\uff0c\u867d\u7136\u4ef7\u683c\u8d35\uff0c\u4f46\u662f\u6211\u4e5f\u6bd4\u8f83\u6311\uff0c\u4e00\u5206\u94b1\u4e00\u5206\u8d27\u3002\u623f\u5b50\u4ee5\u524d\u88c5\u4fee\u8fc7\u4f46\u662f\u98ce\u683c\u4e0d\u559c\u6b22\u6240\u4ee5\u6253\u7b97\u91cd\u65b0\u7ffb\u65b0\u4e00\u4e0b\uff0c\u5e73\u65f6\u5de5\u4f5c\u5fd9\u9009\u62e9\u4e86\u5168\u5305\uff0c\u771f\u7684\u5f88\u7701\u5fc3\uff0c\u6c34\u7535\u8fd9\u4e00\u5757\u505a\u5f97\u6700\u6ee1\u610f\uff0c\u6750\u6599\u4e5f\u5f88\u73af\u4fdd\u3002",
        "order_id": "0",
        "user_id": "0",
        "username": "Vanilla",
        "community": "\u5229\u5179\u57ce\u5e02\u516c\u5bd3",
        "area": "350",
        "housestyle": "\u6df7\u642d",
        "amount": "0",
        "rank_design": "5",
        "rank_cons": "5",
        "rank_service": "5",
        "add_time": "1469515372",
        "comment_time": "1469515320",
        "sign_complete_time": "0",
        "complete_time": "0",
        "is_virtual": "1",
        "praise": "6.00",
        "score": "4.90",
        "comment_avatar": "http:\/\/pic.tugou.com\/app\/headicon.png",
        "star": 5
    }];</script>
<script type="text/javascript " src="//cdn.bootcss.com/vue/1.0.24/vue.min.js "></script>
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/comment.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
