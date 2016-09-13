<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
    'layouts/page_header', 'layouts/page_footer', 'dpl', 'lib/footer',
	'service/oneMinute',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['currentNav'] = 'free';
$this->params['formPosition'] = 'hd-kaopu';
$this->params['formPositionName'] = '活动-靠谱';
?>
<div class="minute-banner">
    <div class="banner-img">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute_banner1.jpg" alt="1分钟找到靠谱装修公司">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute_banner2.jpg" alt="1分钟找到靠谱装修公司">
        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute_banner3.jpg" alt="1分钟找到靠谱装修公司">
        <div class="float apply_form" id="form">
            <h1 class="form-title">申请靠谱装修</h1>
            <p class="form-p">您的信息将被严格保密，请准确填写</p>
            <div class="fbody" id="biaodan">
                <div class="apply_form">
                    <input name="apply_type" type="hidden" value="kaopu" />
                    <input name="name" type="text" placeholder="您的姓名" />
                    <input name="phone" type="text" placeholder="手机号码" />
                    <input name="remark" type="hidden" value="1分钟找到靠谱装修公司">
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
                            <option value="">省/市</option></select>
                        <select class="js-city" name="city" id="city">
                            <option value="">市/地区</option></select>
                    </div>
                    <input name="apply" type="button" value="立即免费预约" />
                    <p class="number">已有<span class="ifocus">32382</span>人找到靠谱装修公司</p></div>
            </div>
        </div>
    </div>
</div>
<div class="process">
    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute1.jpg" alt="1分钟找到靠谱装修公司"></div>
<div class="gray">
    <div class="center">
        <p class="title">为什么3家装修公司PK</p>
        <ul class="gray-content">
            <li>
                <div class="img-1"></div>
                <p class="con-title">免费3家上门量房PK</p>
                <p class="synopsis">专业设计师，精准测量</p></li>
            <li>
                <div class="img-2"></div>
                <p class="con-title">免费3份设计方案PK</p>
                <p class="synopsis">量身定制 ，空间最大化利用</p></li>
            <li>
                <div class="img-3"></div>
                <p class="con-title">免费3份报价方案PK</p>
                <p class="synopsis">拒绝增项漏项，避免价格猫腻</p></li>
        </ul>
    </div>
</div>
<div class="white">
    <div class="center">
        <p class="title">为什么选择<?= Yii::$app->params['siteNameBase']; ?>靠谱装修</p>
        <ul class="list">
            <li>
                <div class="list-1"></div>
                <p class="con-title">3套装修方案PK</p>
                <p class="synopsis">选择满意装修公司，超高性价比</p></li>
            <li>
                <div class="list-2"></div>
                <p class="con-title">5次监理节点验收</p>
                <p class="synopsis">确保施工质量，不合格马上整改</p></li>
            <li>
                <div class="list-3"></div>
                <p class="con-title">手机直播工地</p>
                <p class="synopsis">施工进度随时看</p></li>
            <li>
                <div class="list-4"></div>
                <p class="con-title">一对一管家式服务</p>
                <p class="synopsis">装修管家为你全程排忧解难</p></li>
            <!--<li>
                <div class="list-5"></div>
                <p class="con-title">108道标准施工工艺</p>
                <p class="synopsis">全程标准施工，品质有保证</p></li>
            <li>
                <div class="list-6"></div>
                <p class="con-title">198项报价内容审核</p>
                <p class="synopsis">避免价格陷阱，无猫腻装修</p></li>
            <li>
                <div class="list-7"></div>
                <p class="con-title">220项施工验收标准</p>
                <p class="synopsis">杜绝质量隐患，安心入住</p></li>
            <li>
                <div class="list-8"></div>
                <p class="con-title">11年行业经验</p>
                <p class="synopsis">11年专注，累积800万装修业主口碑</p></li>-->
        </ul>
    </div>
</div>
<div class="gray">
    <div class="center">
        <p class="title"><?= Yii::$app->params['siteNameBase']; ?>如何确保靠谱装修</p>
        <ul class="ensure">
            <li>
                <div class="ensure-1"></div>
                <p class="con-title">高标准入驻条件</p>
                <p class="synopsis">精选全城靠谱装修公司
                    <br/>装修公司经过资质认证后才可入驻</p></li>
            <li>
                <div class="ensure-2"></div>
                <p class="con-title">统一施工工艺标准</p>
                <p class="synopsis">装修公司按照<?= Yii::$app->params['siteNameBase']; ?>标准施工工艺
                    <br/>有效提升施工品质</p></li>
            <li>
                <div class="ensure-3"></div>
                <p class="con-title">统一监理验收标准</p>
                <p class="synopsis">权威监理5大节点上门
                    <br/>验收实施质量有保障</p></li>
            <li>
                <div class="ensure-4"></div>
                <p class="con-title">统一售后服务标准</p>
                <p class="synopsis">隐蔽工程质保5年，基础工程质保2年
                    <br/>安心入住，售后无忧。</p></li>
        </ul>
    </div>
</div>
<div class="white">
    <div class="center">
        <p class="title"><?= Yii::$app->params['siteNameBase']; ?>精选靠谱装修公司</p>
        <img class="provider" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute2.jpg" alt="<?= Yii::$app->params['siteNameBase']; ?>精选靠谱装修公司"></div>
</div>
<div class="gray">
    <div class="center">
        <p class="title">TA们都选择了<?= Yii::$app->params['siteNameBase']; ?></p>
        <div class="xinxi">
            <div class="xinxi-left">
                <div class="signed_box">
                    <div class="signed_list">
                        <ul class="signed_list_body">
                            <?php foreach ($ownerInfos as $ownerInfo) { ?>
                            <li>
								<span class="signed_city"><?= Yii::$app->params['currentCompany']['name']; ?></span>
    						    <span class="signed_name"><?= $ownerInfo['name']; ?></span>
    							<span class="signed_area"><?= $ownerInfo['community_name']; ?></span>
    							<span class="signed_amount"><?= $ownerInfo['area']; ?>㎡</span>
    							<span class="signed_company"><?= $ownerInfo['decoration_type']; ?></span></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xinxi-right">
                <div class="case">
				    <a href="<?= Url::to(['/house/realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute3.jpg" alt="环宇天下·三室两厅·简约·半包9万">
                        <img class="face" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute5.png" alt="">
                        <p class="place">白领家园-赵先生
                            <span>120㎡</span></p>
                        <p class="type">三室两厅 | 简约 | 半包9万</p></a>
                </div>
                <div class="case">
				    <a href="<?= Url::to(['/house/realcase/index', 'city_code' => Yii::$app->params['currentCompany']['code_short']]); ?>">
                        <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute4.jpg" alt="万家星城·两室两厅·混搭·半包11万">
                        <img class="face" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/minute6.png" alt="">
                        <p class="place">创意园小区-张女士
                            <span>80㎡</span></p>
                        <p class="type">两室两厅 | 混搭 | 全包11万</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/js/list_scroll.js"></script>
<script>$(function() {
        listScroll($('.signed_list_body'), $('li'), 'top', 2, 1, 40);
        listScroll($('.signed_comment_list'), $('.signed_comment'), 'top', 8, 1, 281);
    });
    /*时间*/
    function GetDateStr(AddDayCount) {
        var dd = new Date();
        dd.setDate(dd.getDate() + AddDayCount); //获取AddDayCount天后的日期 
        var m = dd.getMonth() + 1; //获取当前月份的日期 
        var d = dd.getDate();
        return m + "/" + d;
    }
    $(".today").html(GetDateStr(0));
    $(".yesterday").html(GetDateStr( - 1));
    $(".before-yesterday").html(GetDateStr( - 2));</script>
