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
<main class='main-content user'>
<div class='wrapper'>
    <?php echo $this->render('@passport/views/default/_user_nav', ['currentAction' => 'myorder']); ?>
    <div class='g'>
        <!--<div class="order-history">
			<a class="box-link" href="" target="_blank">查看历史订单</a>
        </div>-->
        <div class='gi one-whole my-oppo-content slab-white-border order'>
            <?php foreach ($infos as $info) { ?>
            <div class='g brick-shadow order-list-top'>
                <div class='gi one-whole desk-one-half'>订单编号：
                    <strong><a class='clickable order-id' href='<?= Url::to(['myinfo/order-show', 'orderid' => $info['orderid']]); ?>'><?= $info['orderid']; ?></a></strong>
                </div>
				<div class='gi one-whole desk-one-half desk-text-align-right'>下单时间：<?= date('Y-m-d H:i:s', $info['created_at']); ?></div>
            </div>
            <ul class='order-list-header'>
                <li class='order-product'>产品</li>
                <li class='order-amount'>订单金额</li>
                <li class='order-detail'>交易信息</li>
				<li class='order-primary'>状态操作</li>
            </ul>
            <div class='order-list'>
                <div class='order-item order-product desk-text-align-center'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['goods/show', 'id' => $info['goods_id']]); ?>' target="_blank">
						<img class='order-product-thumbnail' alt='' src='<?= $info['goodsMainPhoto']; ?>' />
                    </a>
                    <div class='row'>
						<a href='<?= Yii::getAlias('@shooturl') . Url::to(['goods/show', 'id' => $info['goods_id']]); ?>' target="_blank"><?= $info['goods_name']; ?></a>
                    </div>
                    <!--<p class='row'><a href=''>+其余1款商品</a></p>-->
                </div>
                <!--<div class='order-item order-quantity desk-text-align-center'>
					<span class='order-desk-hide'>商品数量：</span>2
                </div>-->
                <div class='order-item order-amount desk-text-align-center'>
				    <span class='order-desk-hide'>订单金额：</span>¥<?= $info['pay_money']; ?>
                </div>
                <div class='order-item order-detail'>
				    <div class='row order-username'><?= $info['consignee']; ?></div>
					<div class='row'><?= $info['mobile']; ?></div>
					<div class='row'><?= $info['address']; ?></div>
                </div>
                <div class='order-item order-primary desk-text-align-center'>
				    <div class='row'>订单状态：<?= $info['statusStr']; ?></div>
                    <?php if ($info['status'] == 'order') { ?>
                    <div class='row'>
						<a class='button button-s' href=''>立即支付</a>
                    </div>
                    <?php } ?>
                    <div class='row'>
					    <a class='button button-s' href='<?= Url::to(['myinfo/order-show', 'orderid' => $info['orderid']]); ?>'>查看详情</a>
                    </div>
                    <div class='row'>
					    <a class='box-link' href='javascript: vm.cancel("<?= $info['orderid']; ?>");'>取消订单</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class='gi lap-three-fifths desk-three-quarters pagination-content'></div>
    </div>
</div>
</main>
<div id='dialog-confirm' class='hidden'>
    <div class="mask-common"></div>
    <div class="dialog-common dialog-box-common">
        <div class="dialog-container">
            <a class="dialog-close-common">×</a>
            <div class="dialog-content-common">
                <div class="field">
                    <h4 class='dialog-title-common'>您确定取消订单吗？</h4></div>
                <div class="dialog-common-content"></div>
                <div class="field dialog-btn">
                    <div class="g g-wrapper-s">
                        <div class="gi lap-one-half">
                            <a class='button button-one'>确定</a></div>
                        <div class="gi lap-one-half">
                            <a class='button-light button-two'>取消</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
