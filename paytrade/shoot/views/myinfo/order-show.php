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
    <div class='g slab-white-border order'>
        <div class='g brick-shadow order-list-top clearfix'>
            <div class='gi one-whole desk-three-quarters pull-left'>
                <div class="one-whole lap-width-auto">
                    <input type="hidden" id="order-number" value="<?= $info['orderid']; ?>">
                    <span>订单编号：<strong><?= $info['orderid']; ?></strong></span>
                </div>
                <div class="one-whole lap-width-auto">
					<span>订单状态：<?= $info['statusStr']; ?></span>
                </div>
                <div class='gi one-whole lap-width-auto'>
                    <?php if ($info['status_pay'] != 'finish' && $info['status'] != 'cancel') { ?>
                    <div class='gi pull-left'>
						<a class='button button-s' href='<?= Url::to(['account/pay', 'orderid' => $info['orderid']]); ?>'>立即支付</a>
                    </div>
                    <?php } ?>
                    <?php if ($info['status'] == 'order') { ?>
                    <div class='gi pull-left'>
						<a class='box-link' href='javascript: vm.cancel("<?= $info['orderid']; ?>");'>取消订单</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class='gi one-whole desk-one-quarter pull-left desk-text-align-right'>
				<span>下单时间：<?= date('Y-m-d H:i:s', $info['created_at']); ?></span>
            </div>
        </div>
        <div class='order-list'>
            <div class='order-summary'>
                <div class='order-show-item one-whole lap-one-half desk-one-half'>
                    <div class='title'>服务信息:</div>
					<div class="row">联&nbsp;&nbsp;系&nbsp;&nbsp;人：<?= $info['consignee']; ?></div>
					<div class="row">联系电话：<?= $info['mobile']; ?></div>
					<div class="row">拍摄地址：<?= date('Y-m-d H:i:s', $info['service_start']); ?></div>
					<div class="row">拍摄持续时间：<?= $info['service_hour_num']; ?></div>
					<div class="row">拍摄地址：<?= $info['address']; ?></div>
                </div>
                <div class='order-show-item one-whole lap-one-half desk-one-half'>
                    <div class='title'>支付及服务信息：</div>
					<div class='row'>支付方式：<?= $info['pay_type']; ?></div>
					<div class='row'>支付状态：<?= $info['status_pay']; ?></div>
					<div class='row'>服务状态：<span class='color-primary'><?= $info['status_service']; ?></span></div>
                </div>
            </div>
        </div>
        <div class='g clearfix'>
            <div class='order-product-list brick-shadow one-whole desk-two-thirds pull-left'>
                <div class='order-good-title'>产品信息：</div>
                <div class='goods-list'>
                    <div class='goods-list-show'>
					    <a class='goods-list-image' href='<?= Yii::getAlias('@shooturl') . Url::to(['goods/show', 'id' => $goodsInfo['id']]); ?>' target='_blank'>
					        <img src='<?= $goodsInfo['main_photo']; ?>'>
                        </a>
                    </div>
                    <div class='goods-list-detail'>
                        <div class="goods-list-info goods-list-main">
                            <div class='goods-list-description'>
                                <h4 class='heading'><a href='<?= Yii::getAlias('@shooturl') . Url::to(['goods/show', 'id' => $goodsInfo['id']]); ?>' target='_blank'><?= $goodsInfo['name']; ?></a></h4>
								<p><?= $goodsInfo['brief']; ?></p>
                            </div>
                            <div class='goods-list-price'>
							    <strong>￥<?= $goodsInfo['price']; ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='total-price slab-extra-light gi one-whole desk-one-third'>
                <div class='title hidden'>您的订单</div>
                <ul>
                    <li>
                        <span class='product'>总价：</span>
						<span class='amount'>￥<?= $info['pay_money']; ?></span>
                    </li>
                </ul>
                <div class='total'>
                    <span class='label'>应付总额：</span>
					<span class='price'>￥<?= $info['pay_money']; ?></span>
                </div>
                <?php if ($info['status_pay'] != 'finish' && $info['status'] != 'cancel') { ?>
                <div class="total one-whole desk-text-align-right">
					<a class='button button-s' href=''>立即支付</a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class='form-actions brick-shadow lap-invisible'>
            <div class='form-actions-left'>
				<a class='button-light' href='<?= Url::to(['myinfo/order']); ?>'>返回订单列表</a>
            </div>
        </div>
    </div>
</div>
</main>
<div id='return-confirm' class='hidden'>
    <div class="mask-common"></div>
    <div class="dialog-common dialog-box-common">
        <div class="dialog-container">
            <a class="dialog-close-common">×</a>
            <div class="dialog-content-common">
                <div class="field">
                    <h4 class='dialog-title-common'>您确定要提交退换货申请吗？</h4></div>
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
<div id='return-error' class='hidden'>
    <div class="mask-common"></div>
    <div class="dialog-common dialog-box-common">
        <div class="dialog-container">
            <a class="dialog-close-common">×</a>
            <div class="dialog-content-common">
                <div class="dialog-common-content"></div>
                <div class="field dialog-btn">
                    <div class="g g-wrapper-s">
                        <div class="gi lap-one-whole">
                            <a class='button button-one-whole'>好的</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id='return-already' class='hidden'>
    <div class="mask-common"></div>
    <div class="dialog-common dialog-box-common">
        <div class="dialog-container">
            <a class="dialog-close-common">×</a>
            <div class="dialog-content-common">
                <div class="field">
                    <h4 class='dialog-title-common'>退换货申请提交成功！</h4></div>
                <div class="dialog-common-content">
                    <p>请及时带上需退换的商品，选择就近的售后服务中心进行退换货业务办理。</p>
                    <p>为了方便您及时办理退换货业务，建议立即
                        <a href="http://service.oppo.cn/reserve/" target="_blank">预约售后服务中心&gt;&gt;</a></p>
                    <p>如有疑问，请查看
                        <a href="http://www.oppo.com/cn/service/help/550?name=%E6%9C%8D%E5%8A%A1%E6%94%BF%E7%AD%96" target="_blank">退换货流程说明</a>或联系我们的
                        <a id="btn-kf" href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=890&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1" target="_blank">在线客服</a>，我们将竭诚为您服务，感谢您对OPPO的支持！</p></div>
                <div class="field dialog-btn">
                    <div class="g g-wrapper-s">
                        <div class="gi lap-one-whole">
                            <a class='button button-one-whole'>好的</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id='return-twice' class='hidden'>
    <div class="mask-common"></div>
    <div class="dialog-common dialog-box-common">
        <div class="dialog-container">
            <a class="dialog-close-common">×</a>
            <div class="dialog-content-common">
                <div class="field">
                    <h4 class='dialog-title-common'>您已提交过退换货申请!</h4></div>
                <div class="dialog-common-content">
                    <p>请及时带上需退换的商品，选择就近的售后服务中心进行退换货业务办理。</p>
                    <p>为了方便您及时办理退换货业务，建议立即
                        <a href="http://service.oppo.cn/reserve/" target="_blank">预约售后服务中心&gt;&gt;</a></p>
                    <p>如有疑问，请查看
                        <a href="http://www.oppo.com/cn/service/help/550?name=%E6%9C%8D%E5%8A%A1%E6%94%BF%E7%AD%96" target="_blank">退换货流程说明</a>或联系我们的
                        <a id="btn-kf" href="http://oim.oppo.com/oim/chatClient/chatbox.jsp?companyID=8092&configID=890&enterurl=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2Fpreview%2Ejsp&pagereferrer=http%3A%2F%2Foim%2Emyoppo%2Ecom%2Foim%2FembedScript%2Ejsp%3Ft%3D1517&k=1" target="_blank">在线客服</a>，我们将竭诚为您服务，感谢您对OPPO的支持！</p></div>
                <div class="field dialog-btn">
                    <div class="g g-wrapper-s">
                        <div class="gi lap-one-whole">
                            <a class='button button-one-whole'>好的</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->getCsrfToken(), ['id' => '_csrf', 'name' => '_csrf']); ?>
