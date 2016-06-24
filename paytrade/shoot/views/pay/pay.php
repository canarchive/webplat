<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member_address'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'OrdersController@payments';
$this->params['jsFooters'] = [
	'my/jquery-1.9.1.min', 'jquery.lazyload.min', 'underscore-min', 
	'es5-shim.min', 'base64.min', 'custom_form', 
	'jquery.countdown.min', 'slick.min', 'my/responsive', 'picturefill.min', 
	'scripts-address', 'sdj-new',
];
$this->params['pingxxPay'] = true;
?>
<main class='main-content slab-light order-payments-revision opr'>
<div class='wrapper'>
    <ul class='breadcrumb'>
        <li>
    	    <a href='<?= Yii::getAlias('@shooturl'); ?>'>首页<span>/</span></a>
        </li>
        <li>
			<a href='<?= Url::to(['myinfo/order-show', 'orderid' => $info['orderid']]); ?>'>订单<?= $info['orderid']; ?><span>/</span></a>
        </li>
    	<li>在线支付</li>
    </ul>
    <div class='slab-white opr-detail'>
        <div class='g'>
            <div class='gi desk-two-thirds one-whole'>
                <div class='opr-title'>订单提交成功！</div>
				<div class='opr-text'>
                    订单号为<i><?= $info['orderid']; ?></i>，方便起见，下单后，您可以随时在线支付
					<span class="alert-danger"></span>
				</div>
            </div>
            <div class='gi desk-one-third one-whole opr-prices'>
                <div class='opr-price'>应付金额：
					<span>￥<?= $info['pay_money']; ?></span>
                </div>
                <div class='opr-order-detail'>
					<a href="javascript:;" class="oppo-tj">订单详情&nbsp;<span class='icon icon-arrow-down-green'></span></a>
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
        <div class='brick-shadow'>
            <div class='opr-btn-pay'>
                <div class='g'>
                    <div class='gi desk-one-quarter'>
                        <p class='error_msg_note'></p>
                    </div>
                    <div class='gi desk-three-quarters'>
                        <a class='button cart-button oppo-tj' id='pay_action' href='javascript:;' data-tj='store|btn|order|lijizhifu'>立即支付</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<form action='' method='post' id='payment_form' target="_blank">
    <input type='hidden' name='order_sn' value='160622072408786'>
    <input type="hidden" name="payment_code" />
    <input type="hidden" name="payment_bankcode" />
    <input type="hidden" name="payment_method" />
    <input type="hidden" name="short_pay" />
    <input type="hidden" name="payment_qr_pay" />
	<input type="hidden" name="huabei_qishu" />
</form>
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
							<a id='paymentJumpUrl' href='<?= Url::to(['myinfo/order-show', 'orderid' => $info['orderid']]); ?>' class='button'>支付成功</a>
                        </div>
                        <div class='gi lap-one-half'>
							<a href='javascript:;' id='failed_to_pay' class='button-light'>支付失败</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('pingpp_one_ready',function(){
        document.getElementById('pay_action').addEventListener('click',function(){
            pingpp_one.init({
                app_id: 'app_1234567890', // 该应用在 ping++ 的应用 ID
				order_no: '', // 订单在商户系统中的订单号
				amount: <?= $info['pay_money']; ?>, // 订单价格，单位：人民币 分
                // 壹收款页面上需要展示的渠道，数组，数组顺序即页面展示出的渠道的顺序
                // upmp_wap 渠道在微信内部无法使用，若用户未安装银联手机支付控件，则无法调起支付
                channel: ['alipay_wap','wx_pub','upacp_wap','yeepay_wap','jdpay_wap','bfb_wap'],
				charge_url: '<?= Url::to(['/shoot/charge/pay']); ?>',  //商户服务端创建订单的 url
				charge_param:{
					account_type: 'topay',
				    money: <?= $info['pay_money']; ?>, // 订单价格，单位：人民币 分
				    orderid_info: '<?= $info['orderid']; ?>'
				}, //(可选，用户自定义参数，若存在自定义参数则壹收款会通过 POST 方法透传给 charge_url)
                open_id: 'wx1234567890', //(可选，使用微信公众号支付时必须传入)
                debug: true // (可选，debug 模式下会将 charge_url 的返回结果透传回来)
            },function(res){
				console.log(res);
                // debug 模式下获取 charge_url 的返回结果
                if(res.debug&&res.chargeUrlOutput){
                    console.log(res.chargeUrlOutput);
                }
                if(!res.status){
                    //处理错误
                    alert(res.msg);
                } else {
                    // debug 模式下调用 charge_url 后会暂停，可以调用 pingpp_one.resume 方法继续执行
                    if(res.debug&&!res.wxSuccess){
                        if(confirm('当前为 debug 模式，是否继续支付？')){
                            pingpp_one.resume();
                        }
                    }
                    //若微信公众号渠道需要使用壹收款的支付成功页面，则在这里进行成功回调，
                    //调用 pingpp_one.success 方法，你也可以自己定义回调函数
                    //其他渠道的处理方法请见第 2 节
                    else pingpp_one.success(function(res){
                        if(!res.status){
                            alert(res.msg);
                        }
                    },function(){
                        //这里处理支付成功页面点击“继续购物”按钮触发的方法，
                        //例如：若你需要点击“继续购物”按钮跳转到你的购买页，
                        //则在该方法内写入 window.location.href = "你的购买页面 url"
                        window.location.href='http://yourdomain.com/payment_succeeded';//示例
                    });
                }
            });
        });
    });
</script>

