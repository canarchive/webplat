<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member_address'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'OrdersController@index';
$this->params['jsFooters'] = [
	'my/jquery-1.9.1.min', 'jquery.lazyload.min', 'underscore-min', 
	'es5-shim.min', 'base64.min', 'custom_form', 
	'jquery.countdown.min', 'slick.min', 'my/responsive', 'picturefill.min', 
	'scripts-address', 'sdj-new',
];
?>
<main class='main-content slab-light order-payments-revision opr'>
    <div class='wrapper'>
        <ul class='breadcrumb'>
            <li>
                <a href='http://www.oppo.com/cn/'>首页
                    <span>/</span></a>
            </li>
            <li>
                <a href='http://www.opposhop.cn/products?is_promotion=0&category=1'>在线购物
                    <span>/</span></a>
            </li>
            <li>
                <a href='http://www.opposhop.cn/trade'>购物车结算
                    <span>/</span></a>
            </li>
            <li>支付</li></ul>
        <div class='brick-bottom'>
            <ul class='steps'>
                <li class='one active '>
                    <div class='step-content'>
                        <h5 class='step-heading'>购物车</h5>
                        <div class='step-gradient'></div>
                    </div>
                </li>
                <li class='two  active'>
                    <div class='step-content palm-right-text'>
                        <h5 class='step-heading'>填写订单</h5>
                        <div class='step-gradient'></div>
                    </div>
                </li>
                <li class='three active step-completed'>
                    <div class='step-content'>
                        <h5 class='step-heading'>支付</h5>
                        <div class='step-gradient'></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class='slab-white opr-detail'>
            <div class='g'>
                <div class='gi desk-two-thirds one-whole'>
                    <div class='opr-title'>订单提交成功！</div>
                    <div class='opr-text'>订单号为
                        <i>160622072408786</i>， 请您在提交订单后
                        <span class="alert-danger">48</span>小时内付款（逾期订单将自动取消）。</div></div>
                <div class='gi desk-one-third one-whole opr-prices'>
                    <div class='opr-price'>应付金额：
                        <span>￥2799.00</span></div>
                    <div class='opr-order-detail'>
                        <a href="javascript:;" class="oppo-tj" data-tj="store|link|order|detail">订单详情&nbsp;
                            <span class='icon icon-arrow-down-green'></span></a>
                    </div>
                </div>
            </div>
            <div class='opr-order-details'>
                <p>
                    <label>商品清单：</label></p>
                <p>R9 全网通4G 全新拍照手机 金色
                    <span>x</span>
                    <span>1</span></p>
                <p>蓝牙音箱
                    <span>x</span>
                    <span>1</span></p>
                <p>OPPO R9液态硅胶保护壳 晴空蓝
                    <span>x</span>
                    <span>1</span></p>
                <p>
                    <label>收货信息：</label></p>
                <p>北京北京市朝阳区南磨房农光里 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 王 （13811974106）</p>
            </div>
        </div>
        <div class='slab-white opr-platform'>
            <div class='opr-platform-title'>选择支付平台：
                <!-- <span>（默认推荐您常用的支付平台）</span> --></div>
            <div class='brick-shadow'>
                <div class='select-platforms'>
                    <a href="javascript:;" class="open-platforms oppo-tj" data-tj="store|link|order|platforms">选择其他支付平台&nbsp;
                        <span class='icon icon-arrow-down-green'></span></a>
                </div>
                <div class='list-platforms'>
                    <form>
                        <div class='g g-wrapper-s payment-group'>
                            <!--支付宝支付-->
                            <div class='gi one-whole'>
                                <div class='field radio-item pay dark xl'>
                                    <input class='parent_radio oppo-tj' id='radio_alipay' checked name='payonline_category' code="alipay" type="radio" bankcode="directpay" paymethod="0" seed="payment_alipay" qr_pay="0" data-tj="store|radio|order|alipay" />
                                    <label for='radio_alipay'>
                                        <img alt='' src='/assets/images/payments/alipay_logo.png'></label>
                                    </input>
                                </div>
                            </div>
                            <!--花呗支付-->
                            <div class='gi one-whole parent-huabei'>
                                <div class='field radio-item pay dark xl' style="display:block!important;">
                                    <input class='parent_radio oppo-tj' id='radio_alipay_hb' name='payonline_category' value='alipay_hb' code="alipay" type="radio" bankcode="directpay" paymethod="0" seed="payment_alipay_hb" qr_pay="0" data-tj="store|radio|order|alipay-hb" />
                                    <label for='radio_alipay_hb'>
                                        <img alt='' src='/assets/images/payments/alipay_hb.jpg'>
                                        <font class='alipay-hb-tip'></font>
                                        <div class='radio-extend '>
                                            <div class='g g-wrapper-s alipay-hb-extend '>
                                                <div class='gi desk-one-third one-whole'>
                                                    <div class='field input-big-radio'>
                                                        <input code='alipay_huabei_qishu oppo-tj' name='alipay_huabei_qishu' class='alipay_huabei_qishu' type='radio' id='due_3' value='3' data-tj="store|radio|order|installment_3">
                                                        <label for='due_3'>
                                                            <div class='g alipay-hb-top'>
                                                                <div class='gi two-fifths'>
                                                                    <span class='icon-hbs icon-hb-3'></span>
                                                                </div>
                                                                <div class='gi three-fifths alipay-hb-info'>分期价
                                                                    <br>
                                                                    <font>￥954.46</font>X3</div></div>
                                                            <div class='g alipay-hb-bottom'>
                                                                <div class='gi one-whole'>共 ￥2863.38 &nbsp;&nbsp;</div>
                                                                <!-- <div class='gi two-fifths'></div> --></div>
                                                        </label>
                                                        <input type="hidden" name="huabei_qishu" value="3" class='installment_str_1'></div>
                                                </div>
                                                <div class='gi desk-one-third one-whole'>
                                                    <div class='field input-big-radio'>
                                                        <input code='alipay_huabei_qishu oppo-tj' name='alipay_huabei_qishu' class='alipay_huabei_qishu' type='radio' id='due_6' value='6' data-tj="store|radio|order|installment_6">
                                                        <label for='due_6'>
                                                            <div class='g alipay-hb-top'>
                                                                <div class='gi two-fifths'>
                                                                    <span class='icon-hbs icon-hb-6'></span>
                                                                </div>
                                                                <div class='gi three-fifths alipay-hb-info'>分期价
                                                                    <br>
                                                                    <font>￥487.49</font>X6</div></div>
                                                            <div class='g alipay-hb-bottom'>
                                                                <div class='gi one-whole'>共 ￥2924.96 &nbsp;&nbsp;</div>
                                                                <!-- <div class='gi two-fifths'></div> --></div>
                                                        </label>
                                                        <input type="hidden" name="huabei_qishu" value="6" class='installment_str_1'></div>
                                                </div>
                                                <div class='gi desk-one-third one-whole'>
                                                    <div class='field input-big-radio'>
                                                        <input code='alipay_huabei_qishu oppo-tj' name='alipay_huabei_qishu' class='alipay_huabei_qishu' type='radio' id='due_12' value='12' data-tj="store|radio|order|installment_12">
                                                        <label for='due_12'>
                                                            <div class='g alipay-hb-top'>
                                                                <div class='gi two-fifths'>
                                                                    <span class='icon-hbs icon-hb-12'></span>
                                                                </div>
                                                                <div class='gi three-fifths alipay-hb-info'>分期价
                                                                    <br>
                                                                    <font>￥251.91</font>X12</div></div>
                                                            <div class='g alipay-hb-bottom'>
                                                                <div class='gi one-whole'>共 ￥3022.92 &nbsp;&nbsp;</div>
                                                                <!-- <div class='gi two-fifths'></div> --></div>
                                                        </label>
                                                        <input type="hidden" name="huabei_qishu" value="12" class='installment_str_1'></div>
                                                </div>
                                                <div class='gi one-whole'>
                                                    <p>0首付&nbsp;|&nbsp;分期无压力&nbsp;|&nbsp;支付宝自动还款&nbsp;|&nbsp;轻松无忧&nbsp;&nbsp;
                                                        <a href="https://ds.alipay.com/fd-iiiblm8p/index.html" target="_blank">了解更多></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    </input>
                                </div>
                            </div>
                            <!--微信扫码支付-->
                            <div class='gi one-whole'>
                                <div class='field radio-item pay dark xl'>
                                    <input class='parent_radio' id='radio_weixin_qrcode' value='weixin_qrcode' name='payonline_category' code="weixin_qrcode" type="radio" bankcode="directpay" paymethod="0" seed="payment_tenpay" qr_pay="0" data-tj="store|radio|order|weixin_qrcode">
                                    <label for='radio_weixin_qrcode'>
                                        <img alt='' src='/assets/images/payments/weixin.jpg'>
                                        <div class='radio-extend portable-hide'>
                                            <div class='g'>
                                                <div class='gi one-half'>
                                                    <p class="align-center mg-50">
                                                        <img id="weixin_qrcode" src="/assets/images/loader.gif" data-src="http://www.opposhop.cn/orders/pay?order_sn=160622072408786&payment_code=weixin_js&payment_bankcode=scan" /></p>
                                                    <p class="align-center" id="weixin_qrtext">使用微信扫码完成付款</p></div>
                                                <div class='gi one-half'>
                                                    <p class='align-center'>
                                                        <img src="/assets/images/phone-bg.png" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    </input>
                                </div>
                            </div>
                            <!--网银支付-->
                            <div class='gi one-whole'>
                                <div class='field radio-item pay dark xl'>
                                    <input class='parent_radio oppo-tj' id='radio_wangyin' name='payonline_category' value='wangyin' type='radio' data-tj="store|radio|order|wangyin">
                                    <label for='radio_wangyin'>
                                        <img alt='' src='/assets/images/payments/payment_wangyin.jpg'>
                                        <div class='radio-extend'>
                                            <div class='g g-wrapper-s payment-group'>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_ICBCB2C' name='payonline_bank' code='alipay' type='radio' bankcode='ICBCB2C' paymethod='1' seed="payment_bank_ICBCB2C" data-tj="store|radio|order|wangyin_ICBCB2C">
                                                        <label for='radio_ICBCB2C'>
                                                            <img alt='' src='/assets/images/payments/payment_ico4.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_CMB' name='payonline_bank' code='alipay' type='radio' bankcode='CMB' paymethod='1' seed="payment_bank_CMB" data-tj="store|radio|order|wangyin_CMB">
                                                        <label for='radio_CMB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico3.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_CCB' name='payonline_bank' code='alipay' type='radio' bankcode='CCB' paymethod='1' seed="payment_bank_CCB" data-tj="store|radio|order|wangyin_CCB">
                                                        <label for='radio_CCB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico5.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_BOCB2C' name='payonline_bank' code='alipay' type='radio' bankcode='BOCB2C' paymethod='1' seed="payment_bank_BOCB2C" data-tj="store|radio|order|wangyin_BOCB2C">
                                                        <label for='radio_BOCB2C'>
                                                            <img alt='' src='/assets/images/payments/payment_ico7.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_ABC' name='payonline_bank' code='alipay' type='radio' bankcode='ABC' paymethod='1' seed="payment_bank_ABC" data-tj="store|radio|order|wangyin_ABC">
                                                        <label for='radio_ABC'>
                                                            <img alt='' src='/assets/images/payments/payment_ico6.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_COMM' name='payonline_bank' code='alipay' type='radio' bankcode='COMM' paymethod='1' seed="payment_bank_COMM" data-tj="store|radio|order|wangyin_COMM">
                                                        <label for='radio_COMM'>
                                                            <img alt='' src='/assets/images/payments/payment_ico8.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_PSBC-DEBIT' name='payonline_bank' code='alipay' type='radio' bankcode='PSBC-DEBIT' paymethod='1' seed="payment_bank_PSBC-DEBIT" data-tj="store|radio|order|wangyin_PSBC-DEBIT">
                                                        <label for='radio_PSBC-DEBIT'>
                                                            <img alt='' src='/assets/images/payments/payment_ico9.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_CEB-DEBIT' name='payonline_bank' code='alipay' type='radio' bankcode='CEB-DEBIT' paymethod='1' seed="payment_bank_CEB-DEBIT" data-tj="store|radio|order|wangyin_CEB-DEBIT">
                                                        <label for='radio_CEB-DEBIT'>
                                                            <img alt='' src='/assets/images/payments/payment_ico12.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_SPDB' name='payonline_bank' code='alipay' type='radio' bankcode='SPDB' paymethod='1' seed="payment_bank_SPDB" data-tj="store|radio|order|wangyin_SPDB">
                                                        <label for='radio_SPDB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico11.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_CITIC' name='payonline_bank' code='alipay' type='radio' bankcode='CITIC' paymethod='1' seed="payment_bank_CITIC" data-tj="store|radio|order|wangyin_CITIC">
                                                        <label for='radio_CITIC'>
                                                            <img alt='' src='/assets/images/payments/payment_ico16.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_CIB' name='payonline_bank' code='alipay' type='radio' bankcode='CIB' paymethod='1' seed="payment_bank_CIB" data-tj="store|radio|order|wangyin_CIB">
                                                        <label for='radio_CIB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico14.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_SDB' name='payonline_bank' code='alipay' type='radio' bankcode='SDB' paymethod='1' seed="payment_bank_SDB" data-tj="store|radio|order|wangyin_SDB">
                                                        <label for='radio_SDB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico17.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_CMBC' name='payonline_bank' code='alipay' type='radio' bankcode='CMBC' paymethod='1' seed="payment_bank_CMBC" data-tj="store|radio|order|wangyin_CMBC">
                                                        <label for='radio_CMBC'>
                                                            <img alt='' src='/assets/images/payments/payment_ico15.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_HZCBB2C' name='payonline_bank' code='alipay' type='radio' bankcode='HZCBB2C' paymethod='1' seed="payment_bank_HZCBB2C" data-tj="store|radio|order|wangyin_HZCBB2C">
                                                        <label for='radio_HZCBB2C'>
                                                            <img alt='' src='/assets/images/payments/payment_ico21.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_SHBANK' name='payonline_bank' code='alipay' type='radio' bankcode='SHBANK' paymethod='1' seed="payment_bank_SHBANK" data-tj="store|radio|order|wangyin_SHBANK">
                                                        <label for='radio_SHBANK'>
                                                            <img alt='' src='/assets/images/payments/payment_ico18.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_BJRCB' name='payonline_bank' code='alipay' type='radio' bankcode='BJRCB' paymethod='1' seed="payment_bank_BJRCB" data-tj="store|radio|order|wangyin_BJRCB">
                                                        <label for='radio_BJRCB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico19.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_SPABANK' name='payonline_bank' code='alipay' type='radio' bankcode='SPABANK' paymethod='1' seed="payment_bank_SPABANK" data-tj="store|radio|order|wangyin_SPABANK">
                                                        <label for='radio_SPABANK'>
                                                            <img alt='' src='/assets/images/payments/payment_ico13.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_FDB' name='payonline_bank' code='alipay' type='radio' bankcode='FDB' paymethod='1' seed="payment_bank_FDB" data-tj="store|radio|order|wangyin_FDB">
                                                        <label for='radio_FDB'>
                                                            <img alt='' src='/assets/images/payments/payment_ico23.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                                <div class='gi desk-one-quarter'>
                                                    <div class='field radio-item pay dark'>
                                                        <input class="bank_radio oppo-tj" id='radio_NBBANK' name='payonline_bank' code='alipay' type='radio' bankcode='NBBANK' paymethod='1' seed="payment_bank_NBBANK" data-tj="store|radio|order|wangyin_NBBANK">
                                                        <label for='radio_NBBANK'>
                                                            <img alt='' src='/assets/images/payments/payment_ico20.png'></label>
                                                        </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    </input>
                                </div>
                            </div>
                            <!--分期付款-->
                            <div class='gi one-whole'>
                                <div class='field radio-item pay dark xl'>
                                    <input class='parent_radio oppo-tj' id='radio_fenqi' name='payonline_category' code='installment' value='installment' type='radio' data-tj="store|radio|order|installment">
                                    <label for='radio_fenqi'>
                                        <img alt='' src='/assets/images/payments/payment_fenqi.jpg'>
                                        <font>（目前仅支持“招商银行分期付款”）</font>
                                        <div class='radio-extend fenqi-extend'>
                                            <div class='g g-wrapper-s'>
                                                <div class='gi desk-one-third'>
                                                    <div class='field input-big-radio'>
                                                        <input code='installment oppo-tj' name='payonline_installment' class='due' type='radio' id='due_3' value='0.03' data-cnt='3' data-param3="3%" data-param2="83.97" data-tj="store|radio|order|installment_3">
                                                        <label for='due_3'>
                                                            <span class='main'>3期</span>
                                                            <span class='aside'>￥960.99 / 月</span></label>
                                                        <input type="hidden" name="some_name" value="<$CDPRequest_Pay$><$Head$><$Version$>1.0.0.0</$Version$><$TestFlag$>N</$TestFlag$></$Head$><$Body$><$MchMchNbr$>042997</$MchMchNbr$><$TrxTrxCcy$>156</$TrxTrxCcy$><$MchBllNbr$>0000708597</$MchBllNbr$><$MchBllDat$>20160622</$MchBllDat$><$MchBllTim$>072432</$MchBllTim$><$TrxBllAmt$>2799.00</$TrxBllAmt$><$TrxPedCnt$>3</$TrxPedCnt$><$MchUsrIdn$>140634132</$MchUsrIdn$><$MchNtfUrl$>http://www.opposhop.cn/payments/installment/callback</$MchNtfUrl$><$MchNtfPam$>7569c6f351e7585769af58</$MchNtfPam$><$TrxGdsGrp$>3679222</$TrxGdsGrp$><$TrxPstTel$>13811974106</$TrxPstTel$><$UIHidePed$>N</$UIHidePed$></$Body$><$Signature$>b7fa7ae5c50f741cf428b21fb134a8e5ccd6504d</$Signature$></$CDPRequest_Pay$>" class='installment_str_3'></div>
                                                </div>
                                                <div class='gi desk-one-third'>
                                                    <div class='field input-big-radio'>
                                                        <input code='installment oppo-tj' name='payonline_installment' class='due' type='radio' id='due_6' value='0.042' data-cnt='6' data-param3="4.2%" data-param2="117.56" data-tj="store|radio|order|installment_6">
                                                        <label for='due_6'>
                                                            <span class='main'>6期</span>
                                                            <span class='aside'>￥486.09 / 月</span></label>
                                                        <input type="hidden" name="some_name" value="<$CDPRequest_Pay$><$Head$><$Version$>1.0.0.0</$Version$><$TestFlag$>N</$TestFlag$></$Head$><$Body$><$MchMchNbr$>042997</$MchMchNbr$><$TrxTrxCcy$>156</$TrxTrxCcy$><$MchBllNbr$>0000708597</$MchBllNbr$><$MchBllDat$>20160622</$MchBllDat$><$MchBllTim$>072432</$MchBllTim$><$TrxBllAmt$>2799.00</$TrxBllAmt$><$TrxPedCnt$>6</$TrxPedCnt$><$MchUsrIdn$>140634132</$MchUsrIdn$><$MchNtfUrl$>http://www.opposhop.cn/payments/installment/callback</$MchNtfUrl$><$MchNtfPam$>805261d6d3c6e55769ad75</$MchNtfPam$><$TrxGdsGrp$>3679222</$TrxGdsGrp$><$TrxPstTel$>13811974106</$TrxPstTel$><$UIHidePed$>N</$UIHidePed$></$Body$><$Signature$>ce40b6ff2cb721f61d434d4a40677f6e54d04052</$Signature$></$CDPRequest_Pay$>" class='installment_str_6'></div>
                                                </div>
                                                <div class='gi desk-one-third'>
                                                    <div class='field input-big-radio'>
                                                        <input code='installment oppo-tj' name='payonline_installment' class='due' type='radio' id='due_12' value='0.072' data-cnt='12' data-param3="7.2%" data-param2="201.53" data-tj="store|radio|order|installment_12">
                                                        <label for='due_12'>
                                                            <span class='main'>12期</span>
                                                            <span class='aside'>￥250.04 / 月</span></label>
                                                        <input type="hidden" name="some_name" value="<$CDPRequest_Pay$><$Head$><$Version$>1.0.0.0</$Version$><$TestFlag$>N</$TestFlag$></$Head$><$Body$><$MchMchNbr$>042997</$MchMchNbr$><$TrxTrxCcy$>156</$TrxTrxCcy$><$MchBllNbr$>0000708597</$MchBllNbr$><$MchBllDat$>20160622</$MchBllDat$><$MchBllTim$>072432</$MchBllTim$><$TrxBllAmt$>2799.00</$TrxBllAmt$><$TrxPedCnt$>12</$TrxPedCnt$><$MchUsrIdn$>140634132</$MchUsrIdn$><$MchNtfUrl$>http://www.opposhop.cn/payments/installment/callback</$MchNtfUrl$><$MchNtfPam$>91455e9bf0fb645769a930</$MchNtfPam$><$TrxGdsGrp$>3679222</$TrxGdsGrp$><$TrxPstTel$>13811974106</$TrxPstTel$><$UIHidePed$>N</$UIHidePed$></$Body$><$Signature$>f64ec1bfa0c32c33b9db321f4381f1a13884bbf1</$Signature$></$CDPRequest_Pay$>" class='installment_str_12'></div>
                                                </div>
                                                <div class='gi one-whole'>
                                                    <div class='field fenqi_text'>已选择分
                                                        <span>0</span>期，每期含分期手续费
                                                        <span>0</span>（手续费率
                                                        <span class="green">0</span>）</div></div>
                                            </div>
                                        </div>
                                    </label>
                                    </input>
                                </div>
                            </div>
                            <!--财付通支付-->
                            <div class='gi one-whole'>
                                <div class='field radio-item pay dark xl'>
                                    <input class='parent_radio oppo-tj' id='radio_tenpay' name='payonline_category' code="tenpay" type="radio" bankcode="directpay" paymethod="0" seed="payment_tenpay" qr_pay="0" data-tj="store|radio|order|tenpay" />
                                    <label for='radio_tenpay'>
                                        <img alt='' src='/assets/images/payments/tenpay.png'></label>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class='opr-btn-pay'>
                    <div class='g'>
                        <div class='gi desk-three-quarters'>
                            <p class='error_msg_note'></p>
                        </div>
                        <div class='gi desk-one-quarter'>
                            <a class='button cart-button oppo-tj' id='pay_action' href='javascript:;' data-tj='store|btn|order|lijizhifu'>立即支付</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<form action='http://www.opposhop.cn/orders/pay' method='post' id='payment_form' target="_blank">
    <input type='hidden' name='order_sn' value='160622072408786'>
    <input type="hidden" name="payment_code" />
    <input type="hidden" name="payment_bankcode" />
    <input type="hidden" name="payment_method" />
    <input type="hidden" name="short_pay" />
    <input type="hidden" name="payment_qr_pay" />
    <input type="hidden" name="huabei_qishu" /></form>
<form action='https://netpay.cmbchina.com/cdpay/cdpay.dll?cdpay' method='post' id='installment_payment_form' target="_blank">
    <input type="hidden" id="Request" name="Request" value="" />
    <input type="hidden" name="orderno" id='orderno' value="160622072408786"></form>
<div id="dialog" class='hidden'>
    <div class='mask'></div>
    <div class='dialog dialog-payment'>
        <div class='dialog-container'>
            <div class='dialog-close'>
                <a href='#'>x</a></div>
            <div class='dialog-content'>
                <div class='field'>
                    <h4 class='dialog-title'>请确认您的支付情况</h4></div>
                <div class='field dialog-btn'>
                    <div class='g g-wrapper-s'>
                        <div class='gi lap-one-half'>
                            <a id='paymentJumpUrl' href='http://www.opposhop.cn/orders/160622072408786/show' class='button'>支付成功</a></div>
                        <div class='gi lap-one-half'>
                            <a href='javascript:;' id='failed_to_pay' class='button-light'>支付失败</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
