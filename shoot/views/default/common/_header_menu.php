<?php
use yii\helpers\Url;

$returnUrl = Yii::$app->request->hostInfo . Yii::$app->request->getUrl();
?>
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
                    <a class='m-item' href='<?= Yii::getAlias('@shooturl') . Url::to(['/goods/hot']); ?>'>
                        <span>推荐产品</span>
                        <span class='js-toggle-submenu toggle'></span>
                    </a>
                    <ul class='sub-menu'>
                        <li>
                            <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/goods/show', 'id' => 1]); ?>'>生日派对</a>
                        </li>
                        <li>
                            <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/goods/show', 'id' => 1]); ?>'>儿童摄影</a>
                        </li>
                        <li>
                            <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/goods/show', 'id' => 1]); ?>'>时装</a>
                        </li>
                        <li>
                            <a href='<?= Yii::getAlias('@shooturl') . Url::to(['/goods/show', 'id' => 1]); ?>'>静物</a>
                        </li>
                    </ul>
                </li>
                <li class='gi'>
                <a class='m-item' href='<?= Yii::getAlias('@shooturl') . Url::to(['/goods/list']); ?>'>
                        <span>产品大全</span>
                    </a>
                </li>
                <li class='gi'>
                <a class='m-item' href='<?= Yii::getAlias('shooturl') . Url::to(['/sample']); ?>'>
                        <span>样片</span>
                    </a>
                </li>
                <!--<li class='gi'>
                <a class='m-item' href='<?= Yii::getAlias('@shooturl') . Url::to(['/showoff']); ?>'>
                        <span>案例</span>
                    </a>
                </li>-->
            </ul>
        </div>
    </nav>
</div>
<div class='user-menu'>
    <div class='relative'>
        <ul>
            <!--<li class='user-menu-login'>
                <a href='<?= Yii::getAlias('@paytradeurl') . Url::to(['/myorder']); ?>'>我的订单</a>
            </li>-->
            <li class='user-menu-login'>
                <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/setting']); ?>'>账户信息</a>
            </li>
            <li class='user-menu-login'>
                <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/user-address']); ?>'>约拍地址</a>
            </li>
            <!--<li class='user-menu-login user-menu-message'>
                <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/message/system']); ?>'>系统消息</a>
            </li>-->
            <!--<li class='user-menu-login user-menu-cart'>
                <a href='<?= Yii::getAlias('@paytradeurl') . Url::to(['/cart']); ?>'>购物车</a>
            </li>-->
            <li class='user-menu-login user-menu-toLogin'>
                <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/signin', 'returnUrl' => $returnUrl]); ?>'>登录</a>
            </li>
            <li class='user-menu-logout'>
                <a href='<?= Yii::getAlias('@passporturl') . Url::to(['/site/logout', 'returnUrl' => $returnUrl]); ?>'>退出</a>
            </li>
        </ul>
    </div>
</div>
