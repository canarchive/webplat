<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'service/measure', 'pages/index', 'layouts/page_header', 'layouts/page_footer', 'dpl', 
	'common', 'lib/footer',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 'index', 'components/jquery.bxslider.min', 
];
$this->params['currentNav'] = 'free';
?>
<?php echo $this->render('_nav', ['view' => $view]); ?>
<div class="content" id="biaodan">
    <div class="content2" id="content2">
        <div id="bg2">
            <div class="position">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bg3.jpg" height="498px">
                <!--<img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bg22.jpg">
                <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bg23.jpg">-->
                <div class="arrow01"></div>
                <div class="float apply_form">
                    <div class="title">免费量房设计</div>
                    <div class="fbody">
                        <p>免费获取3份设计&nbsp;选取最满意设计稿</p>
                        <div class="apply_form">
                            <input name="apply_type" type="hidden" value="5" />
                            <input name="name" type="text" placeholder="您的姓名" />
                            <input name="phone" type="text" placeholder="手机号码" />
                            <div class="select-group clearfix js-region-select-group">
                                <select class="js-province" name="province" id="province">
                                    <option value="">省/市</option></select>
                                <select class="js-city" name="city" id="city">
                                    <option value="">市/地区</option></select>
                            </div>
                        </div>
                        <input name="apply" type="button" value="免费申请" />
                        <b>
                            <a>注：</a>
                            <span>每户业主可获取3份设计比较，挑选最合适方案后个性化修改。</span></b>
                    </div>
                </div>
            </div>
        </div>
        <div class="page21">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/xq.jpg" class="img">
            <ul class="img1">
                <li class="li1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/1.jpg">
                    <p>专业设计师上门量门</p>
                    <span>专用工具、精准测量</span></li>
                <li class="li2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/2.jpg">
                    <p>实地考察可行性</p>
                    <span>现场沟通采光及空间布局方案</span></li>
                <li class="li3">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/3.jpg">
                    <p>充分了解业主预算</p>
                    <span>明确报价基础、实价无水分</span></li>
            </ul>
        </div>
        <div class="page22">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/ls.jpg" class="img">
            <ul class="img2">
                <li class="li1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/ls4.jpg"></li>
                <li class="li2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/ls5.jpg"></li>
                <li class="li3">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/ls6.jpg"></li>
            </ul>
        </div>
        <div class="page23">
            <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bj.jpg" class="img">
            <ul class="img3">
                <li class="li1">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bj7.jpg">
                    <p>30秒获取预算清单</p>
                    <span>不满意可重复修改</span></li>
                <li class="li2">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bj8.jpg">
                    <p>装修管家审核报价</p>
                    <span>公开透明、杜绝恶意增项漏项</span></li>
                <li class="li3">
                    <img src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/img/bj9.jpg">
                    <p>3份报价清单对比</p>
                    <span>获取满意方案</span></li>
            </ul>
        </div>
    </div>
</div>
