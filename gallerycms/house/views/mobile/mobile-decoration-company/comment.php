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
<ul id='comment-list'>
    <!--<li>
        <div class="comment-user">
            <img alt="头像" class="avator" src="http://pic.tugou.com/app/headicon.png">
            <span class="nickname">刹****</span>
            <span class="score">评分:&nbsp;&nbsp;&nbsp;<span class="stg" v-text="parseFloat(item.score).toFixed(1)"></span></span>
            <div class="star-line">
              <img class="star" src="http://static.tugou.com/m/img/provider/star-picked.png">
              <img class="star" src="http://static.tugou.com/m/img/provider/star-picked.png">
              <img class="star" src="http://static.tugou.com/m/img/provider/star-picked.png">
              <img class="star" src="http://static.tugou.com/m/img/provider/star-picked.png">
              <img class="star" src="http://static.tugou.com/m/img/provider/star-picked.png">
            </div>
        </div>
        <p class="comment-content" readonly="readonly">我之前装修过2套房子，所以对其中的门道还算懂一些，报价的时候设计师很实在，我就冲这一点签了他们。最后也果然没让我失望，项目经理很细心负责，每周都会跟我汇报施工进度，很感谢兔狗家装。</p>
        <p class="comment-detail">晨光国际&nbsp;&nbsp;&nbsp;136m<sup>2</sup>&nbsp;&nbsp;&nbsp;现代</p>
    </li>-->
</ul>
<div class="placeholder-footer app-hide"></div>
<footer class="bottomFixedArea app-hide">
    <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
        <img class="consult" src="http://static.tugou.com/m/img/provider/consult.png" />
        <span class="content">在线咨询</span></div>
    <div class="apply-btn">申请免费量房</div></footer>
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
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/comment.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/m_mobile.js"></script>
