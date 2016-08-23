<?php
use yii\helpers\Url;

$this->params['cssFiles'] = [
	'layouts/page_header', 'layouts/page_footer', 'dpl', 'common', 'lib/footer',
	'service/baojia',
];
$this->params['jsFiles'] = [
	'mtogo', 'lib/jquery-1.11.3.min', 'lib/jquery.lazyload',
	'components/placeholder', 'components/switch',
	'components/fixItem', 'components/city_list', 'components/form_select_controller',
	'common', 
];
$this->params['currentNav'] = 'free';
?>
<div class="content-baojia">
    <div class="center">
        <img class="img01" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/price-title.png" alt="兔狗装修报价">
        <h1 class="paragraph">10秒算出花多少，装修预算早知道！</h1>
        <img class="img02" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/baojia02.jpg" alt="兔狗装修报价">
        <img class="img03" src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/images/baojia03.jpg" alt="兔狗装修报价">
        <div class="form-list">
            <div class="form apply_form">
                <p>请正确填写您的真实信息</p>
                <div class="fbody">
                    <input name="apply_type" type="hidden" value="29" />
                    <input name="scene" type="hidden" value="" />
                    <input name="name" type="text" placeholder="您的姓名">
                    <input name="phone" type="tel" placeholder="手机号码">
                    <div class="form-inline clearfix">
                        <input class="form-element fn-left" name="sms_code" type="text" placeholder="验证码" />
                        <div class="get-pin-wrapper clearfix fn-left" style="position: relative;">
                            <input class="form-element fn-left btn get-pin" type="button" value="获取验证码" />
                            <div class="get-pin-validate hide">
                                <dl class="clearfix">
                                    <dd class="left js-random">
                                        <img src="http://www.tugou.com/passport/GetCaptcha/?scene=PcUserApply" alt="" /></dd>
                                    <dd class="right">
                                        <a class="js-reload">换一张</a></dd>
                                </dl>
                                <dl class="clearfix">
                                    <dd class="left">
                                        <input class="input" name="captcha" /></dd>
                                    <dd class="right">
                                        <a class="btn-orange submit">确定</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <input name="size" type="text" placeholder="面积" value="">
                    <input name="remark" type="hidden" value="在线报价">
                    <div class="select-group clearfix js-region-select-group">
                        <select class="js-province" name="province" id="province">
                            <option value="">省/市</option></select>
                        <select class="js-city" name="city" id="city">
                            <option value="">市/地区</option></select>
                    </div>
                    <span class="unit">m²</span>
                    <div class="select-group clearfix js-region-select-group baojia-type">
                        <select name="level" id="level">
                            <option value="0">装修档次</option>
                            <option value="1">普通装修</option>
                            <option value="2">中档装修</option>
                            <option value="3">高端装修</option></select>
                    </div>
                </div>
                <p class="baojia">已有
                    <span class="ifocus"></span>人成功获取报价</p></div>
            <div class="anniu"></div>
            <div class="detail">
                <p class="total">您的装修预算为
                    <span class="money">0</span>元</p>
                <div class="detail-list">
                    <p class="list-left">客厅</p>
                    <p class="list-right">
                        <span class="price-kt">0</span>元</p></div>
                <div class="detail-list">
                    <p class="list-left">卧室</p>
                    <p class="list-right">
                        <span class="price-ws">0</span>元</p></div>
                <div class="detail-list">
                    <p class="list-left">厨房</p>
                    <p class="list-right">
                        <span class="price-cf">0</span>元</p></div>
                <div class="detail-list">
                    <p class="list-left">卫生间</p>
                    <p class="list-right">
                        <span class="price-wsj">0</span>元</p></div>
                <div class="detail-list">
                    <p class="list-left">阳台</p>
                    <p class="list-right">
                        <span class="price-yt">0</span>元</p></div>
                <div class="detail-list">
                    <p class="list-left">其他预算</p>
                    <p class="list-right">
                        <span class="price-other">0</span>元</p></div>
                <p class="beizhu">* 报价仅供参考，真实报价以实际量房为准</p></div>
        </div>
        <div class="img-text">
            <p class="why">为什么选择兔狗在线装修报价器？</p>
            <div class="why-list">
                <p class="why-list-img-1"></p>
                <p class="why-title">报价精准</p>
                <p class="why-body">11年专注装修行业
                    <br/>累计800万业主数据</p></div>
            <div class="why-list">
                <p class="why-list-img-2"></p>
                <p class="why-title">一键获取</p>
                <p class="why-body">10秒轻松获取报价
                    <br/>心里有底再装修</p></div>
            <div class="why-list">
                <p class="why-list-img-3"></p>
                <p class="why-title">参考性强</p>
                <p class="why-body">空间清单一目了然
                    <br/>偏差性小值得参考</p></div>
        </div>
    </div>
</div>
<script src="<?= Yii::getAlias('@asseturl'); ?>/gallerycms/home/js/baojia.js"></script>
