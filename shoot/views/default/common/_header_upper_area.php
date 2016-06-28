<?php
use yii\helpers\Url;

$returnUrl = Yii::$app->request->hostInfo . Yii::$app->request->getUrl();
?>
    <div class='upper-area'>
        <div class='wrapper g'>
            <ul class='gi menu-sec'>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/concept/index']); ?>' target='_blank'>
                        摄影就上摄到家
                    </a>
                </li>
                <!--<li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/concept/vision']); ?>' target='_blank'>
                        随时随地想摄就摄
                    </a>
                </li>-->
                <!--<li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav>ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/enter/photographer']); ?>' target='_blank'>
                        摄影师入驻
                    </a>
                </li>
                <li class='gi' data-desktop='.menu-sec' data-mobile='.main-menu nav .nav-ul-view > ul'>
				    <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/info/enter/merchant']); ?>' target='_blank'>
                        影楼入驻
                    </a>
                </li>-->
            </ul>
            <div class='search gi'>
                <!--<a class='js-toggle-close' href='#'>
                    <span class='icon icon-search'></span>
                </a>-->
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
				    <a href='<?= Url::to(['/site/signin', 'returnUrl' => $returnUrl]); ?>'>登录</a>
                </li>
				<li class='gi hasLogout' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area'>
				    <a href='<?= Url::to(['/site/signup', 'returnUrl' => $returnUrl]); ?>'>注册</a>
                </li>
                <li class='gi' data-desktop='.upper-area .log-area' data-mobile='.mobile-tools .log-area' id='old-version-link'></li>
            </ul>
        </div>
    </div>
