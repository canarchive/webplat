<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'mobile/base', 'mobile/mainz', 'apply640', 'mobile/top',
	'lib/total',
];
$this->params['jsFiles'] = [
	'rem50', 'jquery', 'common', 'lib/total', 'slideApply',
];
$this->context->pcMappingUrl = Url::to(['/house/decoration-company/index', 'page' => 1, 'city_code' => Yii::$app->params['currentCompany']['code_short']]);
?>
<?php echo $this->render('../common/_nav', []); ?>

<div class="top total-top">装修公司
    <a href="/" class="return"></a>
</div>
<ul id="company-list">
    <?php foreach ($infos as $info) { ?>
    <li class="clearfix company-item" provider="<?= $info['id']; ?>">
	    <a href="<?= Url::to(['/house/mobile-decoration-company/show', 'id' => $info['id'], 'action' => 'sjsj', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>" class="company-link">
			<img class="company-logo" src="<?= $info['logo']; ?>" alt="<?= $info['name']; ?>" />
            <div class="company-info clearfix">
                <div class="info-left">
                    <div class="info-line">
                        <span class='company-name'><?= $info['name']; ?></span>
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/bao.png" alt="" class="company-icon" />
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/zheng.png" alt="" class="company-icon" />
					    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/img/huan.png" alt="" class="company-icon" />
                    </div>
					<p class="note note-st">已服务&nbsp;<span class="stg-orange"><?= $info['num_owner']; ?></span>&nbsp;户业主</p>
					<p class="note note-nd">口碑值&nbsp;<span class="stg-blue"><?= $info['praise']; ?></span></p>
                </div>
                <div class="info-right">
				    <p class="score J_score"><?= $info['score']; ?></p>
                    <p class="describe">业主评分</p>
                </div>
            </div>
        </a>
        <!--<div class="info-bottom">
            <table>
                <tr>
                    <td width="18">
					    <img class="sale" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/hui.png"></td>
                    <td class="content">电视、电冰箱、空调等大家电百分百中奖
                        <br/>688元保养家套餐免费送
                        <br/>卫浴洁具套餐免费送
                        <br/>半包800元/㎡起</td></tr>
            </table>
        </div>-->
        <div class="company-blank"></div>
    </li>
    <?php } ?>
</ul>
<div class="blankBottom"></div>
<div class="bottomFixedArea">
    <div class="onlineContact" onclick="nTalk.im_openInPageChat();">
        <div class="consult">
		    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/images/m-consult.png" />
            <span>在线咨询</span></div>
    </div>
    <div class="apply">免费申请设计报价</div></div>
<div id="box" style="display: none;">
    <div class="box-con">
        <a href="javascript:void(0);" id="close-box"></a>
        <p class="box-title">预约成功</p>
        <p class="box-text">请保持手机畅通哦</br>装修管家会在24小时内联系您哦！</p>
        <p class="box-time">
            <span>3</span>秒后自动关闭</p></div>
</div>
<div id="alert" style="display:none">请输入姓名</div>
<div class="apply-container">
    <form class="pop-apply">
        <div class="form-title">申请免费设计</div>
        <p class="form-subtitle">免费获取3份设计&nbsp;选取满意设计稿</p>
        <div class="form-body">
            <input type="hidden" value="company-index" id="apply_type" name="apply_type">
            <input type="hidden" name="provider" id="provider" value="" />
            <div class="form-line input-box first">
                <input type="text" id="name" placeholder="您的姓名" /></div>
            <div class="form-line input-box">
                <input type="tel" id="phoneNum" placeholder="手机号码" /></div>
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
                <input type="button" id="entirety" value="免费申请" class="submit-btn" /></div>
            <div class="form-notice">
                <span class="font-mark">注：</span>找装修公司，<?= Yii::$app->params['siteNameBase']; ?>比其他渠道便宜20%</div></div>
        <span class="form-close"></span>
    </form>
</div>
<div id="alert" style="display:none">请输入姓名</div>
<script>$(function() {
        $(".footer").click(function() { //弹出申请框
            $(".win_all").show();
        });
        $(".close a").click(function() { //关闭申请框
            $(".win_all").hide();
        });
        $('.info-line').contents().filter(function() { //清除空格
            return this.nodeType === 3;
        }).remove();
        $(".J_score").each(function() {
            $(this).text(parseFloat($(this).text()).toFixed(1));
        });
    })</script>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/house-m/js/c_index.js"></script>
