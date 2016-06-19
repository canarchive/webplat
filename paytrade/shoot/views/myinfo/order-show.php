<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['cssFiles'] = ['styles_member_address'];
$this->params['jsFiles'] = ['modernizr.custom'];
$this->params['controllerForJs'] = 'AddressesController@index';
$info = ['id' => 1];
$referrer = Yii::$app->request->referrer;
?>
<?php $this->beginPage() ?>
<main class='main-content user'>
    <div class='wrapper'>
        <ul class='breadcrumb'>
            <li>
                <a href='http://www.oppo.com/cn/'>首页
                    <span>/</span></a>
            </li>
            <li>
                <a href='http://my.oppo.com/user'>我的OPPO
                    <span>/</span></a>
            </li>
            <li>
                <a href='/orders'>我的订单
                    <span>/</span></a>
            </li>
            <li>160612114174790</li></ul>
        <div class='myOppo-menu'>
            <h1 class='h-gamma'>订单详情</h1>
            <ul class='navigation'>
                <li class=''>
                    <a href='http://my.oppo.com/user'>个人首页</a></li>
                <li class=''>
                    <a href='http://my.oppo.com/user/profile'>账户信息</a></li>
                <li class=''>
                    <a href='http://www.opposhop.cn/user/addresses'>配送地址</a></li>
                <li class='is-active'>
                    <a href='http://www.opposhop.cn/orders'>我的订单</a></li>
                <li class=''>
                    <a href='http://my.oppo.com/user/messages'>系统消息</a></li>
                <li class=''>
                    <a href='http://www.opposhop.cn/coupons/show'>优惠券</a></li>
            </ul>
        </div>
        <div class='g slab-white-border order'>
            <div class='g brick-shadow order-list-top clearfix'>
                <div class='gi one-whole desk-three-quarters pull-left'>
                    <div class="one-whole lap-width-auto">
                        <input type="hidden" id="order-number" value="160612114174790">
                        <span>订单编号：
                            <strong>160612114174790</strong></span>
                    </div>
                    <div class="one-whole lap-width-auto">
                        <span>订单状态：已取消</span></div>
                    <div class='gi one-whole lap-width-auto'>
                        <div class='gi pull-left'></div>
                        <div class='gi pull-left'></div>
                    </div>
                </div>
                <div class='gi one-whole desk-one-quarter pull-left desk-text-align-right'>
                    <span>下单时间：2016-06-12 11:41:08</span></div>
            </div>
            <div class='order-list'>
                <div class='order-summary'>
                    <div class='order-show-item one-whole lap-one-half desk-one-half'>
                        <div class='title'>收货信息:</div>
                        <div class="row">收&nbsp;&nbsp;件&nbsp;&nbsp;人：王</div>
                        <div class="row">收货地址：北京北京市朝阳区南磨房农光里</div>
                        <div class="row">联系电话：13811974106</div>
                        <div class="row">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：hdwyz@163.com</div></div>
                    <div class='order-show-item one-whole lap-one-half desk-one-half'>
                        <div class='title'>支付及配送信息：</div>
                        <div class='row'>支付方式：在线支付</div>
                        <div class='row'>配送方式：快递</div>
                        <div class='row'>配送状态：
                            <span class='color-primary'>未配货</span></div>
                        <div class='row'>支付状态：未支付</div>
                        <div class='row'>发票抬头：王</div></div>
                </div>
            </div>
            <div class='g clearfix'>
                <div class='order-product-list brick-shadow one-whole desk-two-thirds pull-left'>
                    <div class='order-good-title'>商品清单：</div>
                    <div class='goods-list'>
                        <div class='goods-list-show'>
                            <a class='goods-list-image' href='http://www.opposhop.cn/products/360' target='_blank'>
                                <img src='http://static.oppo.com/archives/201603/20160315030351KKwrcwls9cvvMmC7.jpg'></a>
                        </div>
                        <div class='goods-list-detail'>
                            <div class="goods-list-info goods-list-main">
                                <div class='goods-list-description'>
                                    <h4 class='heading'>
                                        <a href='http://www.opposhop.cn/products/360' target='_blank'>R9 全网通4G 全新拍照手机 金色</a></h4>
                                    <p>全网通|金色|64G</p>
                                </div>
                                <div class="goods-list-quantity">
                                    <strong>×1</strong></div>
                                <div class='goods-list-price'>
                                    <strong>￥2799.00</strong></div>
                            </div>
                            <div class='goods-list-info goods-list-attach goods-list-gift'>
                                <div class='goods-list-description'>
                                    <i class="goods-list-flag-gift">赠品</i>
                                    <a href='http://www.opposhop.cn/products/214' target='_blank'>蓝牙音箱</a></div>
                                <div class="goods-list-quantity">×1</div></div>
                            <div class='goods-list-info goods-list-attach goods-list-gift'>
                                <div class='goods-list-description'>
                                    <i class="goods-list-flag-gift">赠品</i>
                                    <a href='http://www.opposhop.cn/products/216' target='_blank'>QCY 大咖蓝牙耳机 J134 黄黑</a></div>
                                <div class="goods-list-quantity">×1</div></div>
                            <div class='goods-list-info goods-list-attach goods-list-gift'>
                                <div class='goods-list-description'>
                                    <i class="goods-list-flag-gift">赠品</i>
                                    <a href='http://www.opposhop.cn/products/370' target='_blank'>OPPO R9液态硅胶保护壳 晴空蓝</a></div>
                                <div class="goods-list-quantity">×1</div></div>
                        </div>
                    </div>
                </div>
                <div class='total-price slab-extra-light gi one-whole desk-one-third'>
                    <div class='title hidden'>您的订单</div>
                    <ul>
                        <li>
                            <span class='product'>商品数量：</span>
                            <span class='amount'>4</span></li>
                        <li>
                            <span class='product'>总价：</span>
                            <span class='amount'>￥2799.00</span></li>
                    </ul>
                    <ul>
                        <li>
                            <span class='product'>邮费：</span>
                            <span class='amount'>+ ￥0.00</span></li>
                        <li>
                            <span class='product'>手续费：</span>
                            <span class='amount'>+ ￥0.00</span></li>
                        <li>
                            <span class='product'>优惠：</span>
                            <span class='amount'>- ￥0.00</span></li>
                    </ul>
                    <div class='total'>
                        <span class='label'>应付总额：</span>
                        <span class='price'>￥2799.00</span></div>
                </div>
            </div>
            <div class='form-actions brick-shadow lap-invisible'>
                <div class='form-actions-left'>
                    <a class='button-light' href='http://www.opposhop.cn/orders'>返回订单列表</a></div>
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
