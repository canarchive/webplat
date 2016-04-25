<?php $this->beginContent('@shoot/views/default/layouts/main.php'); ?>

<main class='main-content slab-light'>
    <div class="supports">
        <div class='wrapper'>
            <ul class='breadcrumb'>
                <li>
                    <a href='http://www.oppo.com/cn/'>
                        首页
                        <span>
                            /
                        </span>
                    </a>
                </li>
                <li>
                    <a href='http://www.oppo.com/cn/service'>
                        服务
                        <span>
                            /
                        </span>
                    </a>
                </li>
                <li>
                    购买帮助
                </li>
            </ul>
        </div>
        <div class="g wrapper supports-help">
            <div class="gi one-whole lap-one-quarter desk-one-fifth">
                <ul class="g menulist">
                    <li class="gi one-whole">
                        <a class="menu">
                            <span>
                                新手指南
                            </span>
                            <span class="js-toggle-submenu toggle">
                            </span>
                        </a>
                        <ul class="sub-menu ">
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/270?name=购买帮助" class="clickable-light">
                                    账号注册
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/290?name=购买帮助" class="">
                                    忘记密码
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gi one-whole">
                        <a class="menu">
                            <span>
                                购物指南
                            </span>
                            <span class="js-toggle-submenu toggle">
                            </span>
                        </a>
                        <ul class="sub-menu ">
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/300?name=购买帮助" class="">
                                    购物流程
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/320?name=购买帮助" class="">
                                    在线支付
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/330?name=购买帮助" class="">
                                    花呗分期付款
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/634?name=购买帮助" class="">
                                    招行分期付款
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/596?name=购买帮助" class="">
                                    货到付款
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/597?name=购买帮助" class="">
                                    发票相关
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/598?name=购买帮助" class="">
                                    保障服务
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="gi one-whole">
                        <a class="menu">
                            <span>
                                配送发货
                            </span>
                            <span class="js-toggle-submenu toggle">
                            </span>
                        </a>
                        <ul class="sub-menu ">
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/310?name=购买帮助" class="">
                                    配送范围及费用
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/350?name=购买帮助" class="">
                                    发货时间
                                </a>
                            </li>
                            <li>
                                <a href="http://www.oppo.com/cn/service/help/360?name=购买帮助" class="">
                                    物流查询
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="gi one-whole lap-three-quarters desk-four-fifths supports-help-content slab-white">
                <div class="word-break article-response">
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->endContent(); ?>
