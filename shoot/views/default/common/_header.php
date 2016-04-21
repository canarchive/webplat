<?php
use yii\helpers\Url;

$returnUrl = Yii::$app->request->hostInfo . Yii::$app->request->getUrl();
?>
<header class='main-header'>
    <div class='upper-area'>
        <div class='wrapper g'>
            <ul class='gi menu-sec'>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/concept/index']); ?>' target='_blank'>
                        摄影就上摄到家
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/concept/vision']); ?>' target='_blank'>
                        随时随地想摄就摄
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/enter/photographer']); ?>' target='_blank'>
                        摄影师入驻
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/enter/merchant']); ?>' target='_blank'>
                        影楼入驻
                    </a>
                </li>
            </ul>
            <div class='search gi'>
                <a class='js-toggle-close' href='#'>
                    <span class='icon icon-search'></span>
                </a>
                <div class='search-form js-content'>
                    <div class='wrapper'>
					    <form action='<?= Yii::getAlias('@shooturl') . Url::to(['/search']); ?>' class='main-form' data-desktop='.search-form .wrapper' data-mobile='.main-menu .search'>
                            <div class='input-button-item'>
                                <input placeholder='搜索摄影作品' type='text' name="q">
                                <button class='button button-primary' type='submit'>搜索</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <ul class='gi log-area'>
                <li class='gi hidden hasLogin' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
				    <a href='<?= Yii::getAlias('@passporturl'); ?>'>
                        <span class='text'>个人中心</span>
                        <span class='icon icon-messages'></span>
                        <span class='n-messages'>()</span>
                    </a>
                </li>
                <li class='gi hidden hasLogin' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
				    <a class='logout' href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/logout', 'returnUrl' => $returnUrl]); ?>'>退出</a>
                </li>
                <li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
				    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signin', 'returnUrl' => $returnUrl]); ?>'>登录</a>
                </li>
				<li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
				    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signup', 'returnUrl' => $returnUrl]); ?>'>注册</a>
                </li>
                <li class='gi' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area' id='old-version-link'></li>
            </ul>
        </div>
    </div>
    <div class='bottom-area'>
        <div class='wrapper'>
            <a class='js-open-menu' href='#'>
                <i class='js-open-menu-bar'></i>
            </a>
            <div class='logo logo-extend'>
			    <a href='<?= Yii::getAlias('@shooturl'); ?>'>
				    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/oppo_logo.png" alt="">
                </a>
            </div>
            <a class='js-open-user' href='#'>
			    <img src="<?= Yii::getAlias('@asseturl'); ?>/shoot/default/images/icon-menu-user.png" alt="">
            </a>
            <div class='main-menu'>
                <div class='search'></div>
                <nav>
                    <div class='nav-ul-view'>
                        <ul class='menu g'>
                            <li class='gi is-active'>
							    <a class='m-item' href='<?= Yii::getAlias('@shooturl'); ?>'>
                                    <span>首页</span>
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/products.html'>
                                    <span>产品</span>
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/blogs'>
                                    <span>品牌</span>
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.opposhop.cn'>
                                    <span>在线商城</span>
                                    <span class='js-toggle-submenu toggle'></span>
                                </a>
                                <ul class='sub-menu'>
                                    <li>
                                        <a href='http://www.opposhop.cn/products.html'>手机</a>
                                    </li>
                                    <li>
                                        <a href='http://www.opposhop.cn/products?is_promotion=0&category=2'>配件</a>
                                    </li>
                                    <li>
                                        <a href='http://www.oppo.com/cn/service/help?name=%E8%B4%AD%E4%B9%B0%E5%B8%AE%E5%8A%A9'>购物指南</a>
                                    </li>
                                    <li>
                                        <a href='http://points.oppo.com/' target='_blank'>积分商城</a>
                                    </li>
                                </ul>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/shops'>
                                    <span>体验店</span>
                                </a>
                            </li>
                            <li class='gi'>
                                <a class='m-item' href='http://www.oppo.com/cn/service.html'>
                                    <span>服务</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class='user-menu'>
                <div class='relative'>
                    <ul>
                        <li class='user-menu-login'>
						    <a href='<?= Yii::getAlias('@paytradeurl') . Url::to(['/myorder']); ?>'>我的订单</a>
                        </li>
                        <li class='user-menu-login'>
						    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/setting']); ?>'>账户信息</a>
                        </li>
                        <li class='user-menu-login'>
						    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/user-address']); ?>'>配送地址</a>
                        </li>
                        <li class='user-menu-login user-menu-message'>
						    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/message/system']); ?>'>系统消息</a>
                        </li>
                        <li class='user-menu-login user-menu-cart'>
						    <a href='<?= Yii::getAlias('@paytradeurl') . Url::to(['/cart']); ?>'>购物车</a>
                        </li>
                        <li class='user-menu-login user-menu-toLogin'>
						    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signin', 'returnUrl' => $returnUrl]); ?>'>登录</a>
                        </li>
                        <li class='user-menu-logout'>
						    <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/logout', 'returnUrl' => $returnUrl]); ?>'>退出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class='nav-sub-menu'>
        <div class='relative'></div>
    </div>
    <div class='nav-search-mask'></div>
    <div class='nav-search'>
        <div class='nav-search-container'>
            <div class='nav-search-content'>
                <div class='nav-search-input'>
				    <form action='<?= Yii::getAlias('@shooturl') . Url::to(['/search']); ?>' class='main-form'>
                        <input placeholder='搜索摄影产品' type='text' name="q">
                        <button class='button' type='submit'>搜索</button>
                        <a href='#' class='nav-search-close'>取消</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="languages-panel"></div>
</header>
